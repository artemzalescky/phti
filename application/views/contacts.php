<?php $ph->include_css('children-catalog.css') ?>

      <div class="container">
          <div class="col-lg-8">
                <div style="width: 100%; height: 370px; outline: 0; border: 0;" id="map">
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DAdsbfJghUyx8ZFu4-cRWa5of7IlvN9Y&width=100%&height=370&lang=ru_RU&sourceType=constructor"></script>
        </div>
          </div>
          <div class="col-lg-4">
            <h3>Контакты</h3>
            <ul id="contact-info">
                <li>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <span class="field">Телефон:</span>
                    <br>
                    <?php $ph->link('8 017 267-60-10', '/contacts')
                              ->single_tag('br')
                              ->link('8 017 267 42 75', '/contacts')
                              ->single_tag('br')
                              ->link('Факс: (017) 263-76-93', '/contacts')
                              ->single_tag('br')
                              ->link('Факс: (017) 267-42-75', '/contacts')
                              ?>
                </li>
                <li>
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span class="field">Email:</span>
                    <br>
                    phti@belhost.by
                    <br>
                    market_phti@belhost.by
                </li>
                <li>
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="field">Адрес:</span>
                    <br>
                    г. Минск, ул. Купревича 10
                </li>
            </ul>
          </div>
      </div>

<br>
