+function ($) {

    'use strict';

    function InfiniteSlider(container, opts) {
        this.MOVING_LEFT = -1;
        this.MOVING_RIGHT = 1;
        this.STOPPED = 0;

        this.FPS = 60;
        this.SPEED = 3;

        this._roundImages = opts.roundImages || false;
        this._imgFullWidth = opts.imgWidth + 2 * (opts.padding || 0);  // todo extract dims from src

        this._dataItems = [];
        this.$container = container.css('height', opts.imgHeight + 'px');
        this.$plate = null;
        this.$leftArrow = null;
        this.$rightArrow = null;

        this._animationId = null;
        this._direction = this.STOPPED;

        this._extractDataItems();
        this._render();
        this._initHandlers();
    }

    InfiniteSlider.prototype.startMoving = function (direction) {
        if (this._direction === direction) return;

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
            scope._dataItems.push({
                imageUrl: $(this).data('image-url'),
                description: $(this).html().trim()
            });
        });
    };

    InfiniteSlider.prototype._render = function () {
        this._renderImages();
        this._renderArrows();
    };

    InfiniteSlider.prototype._renderImages = function () {
        this.$plate = $('<div class="plate"></div>');
        while (this._imgFullWidth * this.$plate.children().size() < this.$container.width() + this._imgFullWidth) {
            var currentImgCount = this.$plate.children().size();
            for (var i = 0, ln = this._dataItems.length; i < ln; i++) {
                var $img = $('<img>')
                    .attr('src', this._dataItems[i].imageUrl)
                    .css('left', this._imgFullWidth * (currentImgCount + i))
                    .addClass(this._roundImages ? 'round' : '');
                this.$plate.append($img);
            }
        }
        this.$plate.appendTo(this.$container);
    };

    InfiniteSlider.prototype._renderArrows = function () {
        this.$leftArrow = $('<div class="arrow left-arrow"></div>');
        this.$rightArrow = $('<div class="arrow right-arrow"></div>');
        this.$container.append(this.$leftArrow).append(this.$rightArrow);
    };

    InfiniteSlider.prototype._initHandlers = function () {
        this.$leftArrow.hover(this.startMoving.bind(this, this.MOVING_RIGHT), this.stopMoving.bind(this));
        this.$rightArrow.hover(this.startMoving.bind(this, this.MOVING_LEFT), this.stopMoving.bind(this));
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
            setTimeout(function () {
                scope._movePlate(direction * speedScale);
                if (speedScale > 0) {
                    movePlateWithSpeed(scope, direction, speedScale - 0.03);
                }
            }, 1000 / scope.FPS);
        }

        movePlateWithSpeed(this, direction, 1);
    };

    function _moveX($el, opts) {
        opts.hasOwnProperty('to') && $el.css({left: opts.to});
        opts.hasOwnProperty('on') && $el.css({left: _left($el) + opts.on});
    }

    function _left($el) {
        return $el.position().left;
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
