<?php $ph->include_css('children-catalog.css') ?>
<?php $ph->include_css('contacts.css') ?>
<br><br><br>
<div class="contact-container">
    <br><br>
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
                              ->link('Факс: (017) 369-76-93', '/contacts')
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
 </div>
<div class="container">
<br><br>
<?php $ph->include_css('managment.css') ?>
<?php $ph->include_css('title.css') ?>

<div id="manager-list">
    <h2 class="title text-center ">Руководство ФТИ НАН Беларуси</h2>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <?php $ph->image('struct/zalescky.jpg', ['class' => 'managment-image']);?>
            </div>
            <div class="col-md-9">
                <h3 class="managment-name"> Залесский Виталий Геннадьевич </h3>
                <p>
                    <h3><b>Должность:</b> Директор </h3>
                    <h3><b>Время приема:</b> среда 16.00-17.30</h3>
                    <h3><b>Номер кабинета:</b> каб. 301</h3>
                    <h3><b>Номер телефона:</b> тел. 267-60-10</h3>
                    <h3><b>e-mail:</b> V.Zalesski@mail.ru</h3>
                </p>
            </div>
        </div>

    <hr> 
    <div class="row">
        <div class="col-md-3">
            <?php $ph->image('struct/biely.jpg', ['class' => 'managment-image']);?>
        </div>
        <div class="col-md-9">
            <h3 class="managment-name"> Белый Алексей Владимирович </h3>
            <p>
            <h3><b>Должность:</b> Заместитель директора по научной работе</h3>
            <h3><b>Время приема:</b> четверг 16.00-17.30</h3>
            <h3><b>Номер кабинета:</b> каб. 317</h3>
            <h3><b>Номер телефона:</b> тел. 265-07-98</h3>
            </p>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-3">
            <?php $ph->image('struct/mihluk.jpg', ['class' => 'managment-image']);?>
        </div>
        <div class="col-md-9">
            <h3 class="management-name"> Михлюк Анатолий Игнатьевич </h3>
            <p>
            <h3><b>Должность:</b> Заместитель директора по научной и инновационной работе</h3>
            <h3><b>Время приема:</b> понедельник 16.00-17.30</h3>
            <h3><b>Номер кабинета:</b> каб. 325</h3>
            <h3><b>Номер телефона:</b> тел. 267-42-75</h3>
            </p>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-3">
            <?php $ph->image('struct/povarov.jpg', ['class' => 'managment-image']);?>
        </div>
        <div class="col-md-9">
            <h3 class="management-name"> Поваров Олег Евгеньевич </h3>
            <p>
            <h3><b>Должность:</b> Зам. директора по общим вопросам </h3>
            <h3><b>Время приема:</b> </h3>
            <h3><b>Номер кабинета:</b> 303 к. 2 </h3>
            <h3><b>Номер телефона:</b> 8029 6836474</h3>
            </p>
        </div>
    </div>
<!--
    <hr>
    <div class="row">
        <div class="col-md-3">
            <?php// $ph->image('struct/leonov.jpg', ['class' => 'managment-image']);?>
        </div>
        <div class="col-md-9">
            <h3 class="management-name"> Леоновец Юрий Александрович </h3>
            <p>
            <h3><b>Должность:</b> Зам. директора по научной работе </h3>
            </p>
        </div>
    </div> -->
    <hr>
    <div class="row">
        <div class="col-md-3">
            <?php $ph->image('struct/Poko_mini.jpg', ['class' => 'managment-image']);?>
        </div>
        <div class="col-md-9">
            <h3 class="management-name"> Поко Ольга Александровна </h3>
            <p>
            <h3><b>Должность:</b>  ученый секретарь </h3>
            <h3><b>Номер телефона:</b> 267-64-53</h3>
            <h3><b>Номер мобильного телефона:</b> 8-0296-19-60-15</h3>
            </p>
        </div>
    </div>

<!--    <hr>-->
<!--    <div class="row">-->
<!--        <div class="col-md-3">-->
<!--            --><?php //$ph->image('struct/mlinov.jpg', ['class' => 'managment-image']);?>
<!--        </div>-->
<!--        <div class="col-md-9">-->
<!--            <h3 class="managment-name"> Малиновский Александр Иосифович </h3>-->
<!--            <p>-->
<!--            <h3><b>Должность:</b> Главный  инженер</h3>-->
<!--            <h3><b>Время приема:</b> понедельник 16.00-17.30</h3>-->
<!--            <h3><b>Номер кабинета:</b> каб. 325</h3>-->
<!--            <h3><b>Номер телефона:</b> тел. 267-36-55</h3>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->

</div>

<div style="clear:both;"> </div>
<br>
<h2 class="title text-center ">СОСТАВ УЧЁНОГО СОВЕТА "ФТИ НАН БЕЛАРУСИ"</h2>

<table class="table table-hover">
    <tbody>
        <tr>
            <td>Председатель совета</td>
            <td>Залесский В.Г.</td>
            <td>д.ф.-м.н.</td>
            <td>директор</td>
        </tr>
        <tr>
            <td>Заместитель председателя</td>
            <td>Белый А.В.</td>
            <td>д.т.н., член-корр.</td>
            <td>зам. директора</td>
        </tr>
        <tr>
            <td>Секретарь</td>
            <td>Поко О.А.</td>
            <td>к.т.н.</td>
            <td>ученый секретарь</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Анисович А.Г.</td>
            <td>д.ф.-м.н.</td>
            <td>зав. сектором</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Босяков М.Н.</td>
            <td>к.ф.-м.н.</td>
            <td>вед.научн.сотр.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Вегера И.И.</td>
            <td>к.т.н.</td>
            <td>нач.отд.- зав.лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Волочко А.Т.</td>
            <td>д.т.н.</td>
            <td>нач.отд.- зав.лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Гордиенко А.И.</td>
            <td>д.т.н., академик</td>
            <td>гл. научн. сотр.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Зеленин В.А.</td>
            <td>д.т.н.</td>
            <td>зав. сектором</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Жукова А.А.</td>
            <td>к.т.н.</td>
            <td>нач. отдела</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Изобелло А.Ю.</td>
            <td>к.т.н.</td>
            <td>зав. лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Кожевникова Г.В.</td>
            <td>д.т.н.</td>
            <td>гл.научн.сотр.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Кузей А.М.</td>
            <td>д.т.н.</td>
            <td>гл. научн. сотр.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Клубович В.В.</td>
            <td>д.т.н., академик</td>
            <td>гл. научн. сотр.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Ласковнёв А.П.</td>
            <td>д.т.н., академик</td>
            <td>гл. научн. сотр.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Латушкина С.Д.</td>
            <td>к.т.н.</td>
            <td>зав. лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Лебедев В.Я.</td>
            <td>к.т.н.</td>
            <td>зав. лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Маркевич М.И.</td>
            <td>д.ф.-м.н.</td>
            <td>зав. лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Михлюк А.И.</td>
            <td>к.т.н.</td>
            <td>зам. директора</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Поболь И.Л.</td>
            <td>д.т.н.</td>
            <td>нач.отд.- зав.лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Покровский А.И.</td>
            <td>к.т.н.</td>
            <td>зав. лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Смягликов И.П.</td>
            <td>к.ф.-м.н.</td>
            <td>зав.лаб.</td>
        </tr>
        <tr>
            <td>Член совета</td>
            <td>Чекан Н.М.</td>
            <td>к.ф.-м.н.</td>
            <td>зав. лаб.</td>
        </tr>
    </tbody>
</table>


<h2 class="title text-center ">СТРУКТУРА ИНСТИТУТА</h2>
<ul>
    <li><em><strong>Отдел индукционных технологий и термической обработки</strong></em> Начальник центра − Вегера И.И.</li>
    <li><strong><em>Отдел материаловедения и литейно-деформационных технологий </em></strong>Начальник центра – Волочко А.Т.</li>
    <li><em><strong>Отдел инженерии поверхности</strong></em>Заведующий отделом – Белый А.В.</li>
    <li><em> <strong>Отдел наноструктурированных материалов</strong> </em> Заведующий отделом - Залесский В.Г.</li>
    <li><em> <strong>Отдел электронно-лучевых технологий и физики плазмы</strong> </em> Заведующий отделом - Поболь И.Л.</li>
    <li><em> <strong>Отдел магнитоимпульсной обработки материалов</strong> </em> Заведующий отделом - Михлюк А.И.</li>
    <li><em> <strong>Научно-производственный центр ТЕХНОМАГ</strong> </em> Заведующий центром - Дик В.Н.</li>
    <li><em> <strong>Лаборатория прикладной механики</strong> </em> Заведующий отделом - Красневский С.М.</li>
    <li><em> <strong>Конструкторско-технологический отдел</strong> </em> Заведующий отделом - Сальманович А.З.</li>
</ul>



      </div>

<br>
