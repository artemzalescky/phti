+function ($) {

    'use strict';

    function InfiniteSlider(container, opts) {
        this.MOVING_LEFT = -1;
        this.MOVING_RIGHT = 1;
        this.STOPPED = 0;

        this.FPS = 60;
        this.SPEED = 3;

        this._roundImages = opts.roundImages || false;
        this._imgWidth = opts.imgWidth;
        this._imgHeight = opts.imgHeight;
        this._imgFullWidth = this._imgWidth + 2 * (opts.padding || 0);  // todo extract dims from src
        this._previewTitleHeight = opts.previewTitleHeight || 0;
        this._arrowsBackgroundColor = opts.arrowsBackgroundColor || '#fff';

        this._dataItems = [];
        this.$container = container.css('height', this._fullHeight());
        this.$plate = null;
        this.$leftArrowContainer = null;
        this.$rightArrowContainer = null;
        this.$modal = null;

        this._animationId = null;
        this._direction = this.STOPPED;

        this._extractDataItems();
        this._render();
        this._initHandlers();
    }

    InfiniteSlider.prototype.startMoving = function (direction) {
        if (this._direction === direction) return;

        this._stopSmoothStopAnimation();
        this._direction = direction;
        clearInterval(this._animationId);

        this._animationId = setInterval(this._movePlate.bind(this, direction), 1000 / this.FPS);
    };

    InfiniteSlider.prototype.stopMoving = function () {
        this._animateSmoothStop(this._direction);
        this._direction = 0;
        clearInterval(this._animationId);
    };

    InfiniteSlider.prototype._extractDataItems = function () {
        var scope = this;
        this.$container.find('.data-item').each(function () {
            var $this = $(this);
            scope._dataItems.push({
                imageUrl: $this.data('image-url'),
                title: $this.find('.title').html().trim(),
                description: ($this.find('.description').html() || '').trim(),
                previewTitle: ($this.find('.preview-title').html() || '').trim()
            });
        });
    };

    InfiniteSlider.prototype._render = function () {
        this._renderPlateItems();
        this._renderArrows();
        this._setInitialPlateOffset();
        this._renderModal();
    };

    InfiniteSlider.prototype._renderPlateItems = function () {
        this.$plate = $('<div class="plate"></div>');
        while (this._imgFullWidth * this.$plate.children().size() < this.$container.width() + this._imgFullWidth) {
            var currentImgCount = this.$plate.children().size();
            for (var i = 0, ln = this._dataItems.length; i < ln; i++) {
                var $plateItem = $('<div class="plate-item"></div>')
                    .attr('data-index', i)
                    .css({
                        left: this._imgFullWidth * (currentImgCount + i),
                        width: this._imgWidth,
                        height: this._fullHeight()
                    });
                var $img = $('<img>')
                    .attr('src', this._dataItems[i].imageUrl)
                    .css({
                        width: this._imgWidth,
                        height: this._imgHeight
                    })
                    .addClass(this._roundImages ? 'round' : '');
                $plateItem.append($img);
                if (this._previewTitleHeight) {
                    $('<div class="preview-title">' + this._dataItems[i].previewTitle + '</div>')
                        .css('height', this._previewTitleHeight - 5)
                        .appendTo($plateItem);
                }
                this.$plate.append($plateItem);
            }
        }
        this.$plate.appendTo(this.$container);
    };

    InfiniteSlider.prototype._renderArrows = function () {
        var $leftArrow = $('<div class="arrow left-arrow"></div>'),
            $rightArrow = $('<div class="arrow right-arrow"></div>');

        this.$leftArrowContainer = $('<div class="arrow-container left-arrow-container"></div>')
            .append($leftArrow)
            .css({backgroundColor: this._arrowsBackgroundColor});
        this.$rightArrowContainer = $('<div class="arrow-container right-arrow-container"></div>')
            .append($rightArrow)
            .css({backgroundColor: this._arrowsBackgroundColor});

        this.$container.append(this.$leftArrowContainer, this.$rightArrowContainer);
        [$leftArrow, $rightArrow].forEach(_placeInCenterOfParent);
    };
    
    InfiniteSlider.prototype._renderModal = function () {
        this.$modal = $(
            '<div class="modal fade">' +
            '    <div class="modal-dialog">' +
            '        <div class="modal-content">' +
            '            <div class="modal-header">' +
            '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' +
            '                <h4 class="modal-title"></h4>' +
            '            </div>' +
            '            <div class="modal-body">' +
            '                <img>' +
            '                <p class="description"></p>' +
            '                <div class="clearfix"></div>' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        ).appendTo(this.$container);
    };

    InfiniteSlider.prototype._initHandlers = function () {
        this.$leftArrowContainer.hover(this.startMoving.bind(this, this.MOVING_RIGHT), this.stopMoving.bind(this));
        this.$rightArrowContainer.hover(this.startMoving.bind(this, this.MOVING_LEFT), this.stopMoving.bind(this));

        this.$plate.on('click', 'img', function (e) {
            var index = $(e.target).parent().data('index');
            var data = this._dataItems[index];
            this.$modal.find('.modal-body img').attr({
                src: data.imageUrl,
                class: data.description ? 'left' : 'center'
            });
            this.$modal.find('.modal-title').html(data.title);
            this.$modal.find('.description').html(data.description);
            this.$modal.modal();
        }.bind(this));
    };

    InfiniteSlider.prototype._fullHeight = function () {
        return this._imgHeight + this._previewTitleHeight;
    };

    InfiniteSlider.prototype._movePlate = function (direction) {
        _moveX(this.$plate, {on: this.SPEED * direction});
        this._checkBoundaryElements(direction);
    };

    InfiniteSlider.prototype._checkBoundaryElements = function (direction) {
        var $first = this.$plate.children().first();
        var $last = this.$plate.children().last();

        if (direction > 0 && -_left($first) < _left(this.$plate)) {
            this._moveLastToBegin($first, $last);
        }

        if (direction < 0 && _left($last) + this._imgFullWidth + _left(this.$plate) < this.$container.width()) {
            this._moveFirstToEnd($first, $last);
        }
    };

    InfiniteSlider.prototype._moveLastToBegin = function ($first, $last) {
        _moveX($last, {to: _left($first) - this._imgFullWidth});
        $last.remove().prependTo(this.$plate);
    };

    InfiniteSlider.prototype._moveFirstToEnd = function ($first, $last) {
        _moveX($first, {to: _left($last) + this._imgFullWidth});
        $first.remove().appendTo(this.$plate);
    };

    InfiniteSlider.prototype._animateSmoothStop = function (direction) {
        function movePlateWithSpeed(scope, direction, speedScale) {
            scope._smoothStopAnimationId = setTimeout(function () {
                scope._movePlate(direction * speedScale);
                if (speedScale > 0) {
                    movePlateWithSpeed(scope, direction, speedScale - 0.03);
                }
            }, 1000 / scope.FPS);
        }

        movePlateWithSpeed(this, direction, 1);
    };

    InfiniteSlider.prototype._stopSmoothStopAnimation = function () {
        clearTimeout(this._smoothStopAnimationId);
    };

    InfiniteSlider.prototype._setInitialPlateOffset = function () {
        _moveX(this.$plate, {on: this.$leftArrowContainer.width()});
    };

    function _moveX($el, opts) {
        opts.hasOwnProperty('to') && $el.css({left: opts.to});
        opts.hasOwnProperty('on') && $el.css({left: _left($el) + opts.on});
    }

    function _left($el) {
        return $el.position().left;
    }

    function _placeInCenterOfParent($el) {
        $el.css({
            left: ($el.parent().width() - $el.width()) / 2,
            top: ($el.parent().height() - $el.height()) / 2
        })
    }

    $.fn.ph_infinite_slider = function (opts) {
        var $container = $(this);
        var slider = $container.data('ph-infinite-slider');
        if (!slider) {
            slider = new InfiniteSlider($container, opts || {});
            $container.data('ph-infinite-slider', slider);
        }
        return slider;
    };

    $.fn.ph_infinite_slider.Constructor = InfiniteSlider;

}(jQuery);
