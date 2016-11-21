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
      
      <div class="container">
<br><br><br><br>
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

<h3>Учёный совет</h3>
<ul>

    <li> <strong>Залесский В.Г. −</strong> д.ф.- м.н.,  директор (председатель)</li>
    <li> <strong>Белый А.В. −</strong> член-корреспондент, заместитель директора по научной работе (заместитель председателя) </li>
    <li> <strong>Поко О.А. −</strong>  к.т.н., ученый секретарь (секретарь)</li>
    <li> <strong>Вегера И.И. −</strong> к.т.н., заведующий лабораторией </li>
    <li> <strong>Волочко А.Т. −</strong> д.т.н. заведующий лабораторией </li>
    <li> <strong>Гордиенко А.И. −</strong> академик, начальник НИЦ </li>
    <li> <strong>Зеленин В.А. −</strong> д.т.н., главный научный сотрудник </li>
    <li> <strong>Изобелло А.Ю. −</strong> к.т.н., заведующий лабораторией </li>
    <li> <strong>Жукова А.А. −</strong> к.т.н., заведующий лабораторией </li>
    <li> <strong>Клубович В.В. −</strong> академик, главный научный сотрудник </li>
    <li> <strong>Кузей А.М. −</strong> д.т.н., заведующий лабораторией </li>
    <li> <strong>Ласковнев А.П. −</strong> академик, главный научный сотрудник </li>
    <li> <strong>Латушкина С.Д. −</strong> к.т.н., заведующий лабораторией </li>
    <li> <strong>Лебедев В.Я. −</strong> к.т.н., заведующий лабораторией </li>
   <!-- <li> <strong>Леоновец Ю.А. −</strong> к.т.н., заместитель директора по научной и производственной работе </li> -->
    <li> <strong>Михлюк А.И. −</strong> к.т.н., заместитель директора по научной и инновационной работе </li>
    <li> <strong>Поболь И.Л. −</strong> д.т.н., начальник НИЦ </li>
    <li> <strong>Покровский А.И. −</strong> к.т.н., заведующий лабораторией </li>
    <li> <strong>Чекан Н.М. −</strong> к.ф.-м.н., заведующий лабораторией </li>  
    <!--  
    <li><strong>Алифанов А.В. − </strong>д.т.н.</li>
    <li><strong>Анисович А.Г. − </strong>д.т.н.</li>
    <li><strong>Голубев В.С. − </strong>к.ф.-м.н.</li>
    <li><strong>Дудецкая Л.Р. − </strong>к.т.н.</li>
    <li><strong>Здор Г.Н. − </strong>д.т.н.</li>
    <li><strong>Ивашко В.В. − </strong>к.т.н.</li>
    <li><strong>Красневский С.М. − </strong>к.т.н.</li>
    <li><strong>Купченко Г.В. − </strong>д.т.н.</li>
    <li><strong>Мицкевич М.К. – </strong>д.т.н.</li>
    <li><strong>Обухов В.Е. − </strong>к.т.н.</li>
    <li><strong>Смягликов И.П.</strong><strong>− </strong>к.т.н.</li>
    <li><strong>Хина Б.Б. − </strong>д.ф.-м.н.</li>
    <li><strong>Чапланов А.М. − </strong>д.ф-м.н.</li>
    <li><strong>Щукин В.Я. − </strong>к.т.н.</li> -->
</ul>
<br>
<h3>Структура института</h3>
<ul>
    <li><em><strong>Научно-исследовательский центр индукционных технологий и проблем термической обработки.</strong></em> Начальник центра − Гордиенко Анатолий Илларионович</li>
    <li><strong><em>Научно-исследовательский центр деформационных и литейных технологий. </em></strong>Начальник центра – Томило Вячеслав Анатольевич</li>
    <li><em><strong>Отдел&nbsp;объемных&nbsp;гетерогенных систем. </strong></em>Заведующий отделом – Алифанов Александр Викторович</li>
    <li><em> <strong>Отдел пучковых и плазменных технологий.</strong> </em> Заведующий отделом − Белый Алексей Владимирович</li>
    <li><em><strong>Научно-исследовательский центр</strong>&nbsp;<strong>электронно-лучевых технологий и физики плазмы.</strong></em><strong>&nbsp;</strong>&nbsp;Начальник центра – Поболь Игорь Леонидович</li>
    <li><strong><em>Лаборатория прикладной механики.</em></strong> Заведующий лабораторией − Красневский Светослав Михайлович</li>
    <li><strong><em>Лаборатория&nbsp; вакуумно-плазменных покрытий.&nbsp;</em></strong> Заведующий лабораторией<strong> −</strong>Латушкина Светлана Дмитриевна</li>
    <li><em><strong>Лаборатория физики тонких плёнок и равновесных систем.</strong>&nbsp;</em> Заведующий лабораторией<strong> − </strong>Маркевич Мария Ивановна</li>
    <li><strong><em>Сектор технологии и оборудования магнитоимпульсной обработки материалов.</em> </strong>Заведующий сектором<strong> − </strong>Кривонос Юрий Иванович</li>
    <li><strong> <em>Сектор металлографического и рентгеноструктурного анализа.</em></strong> Заведующий сектором<strong> − </strong>Анисович Анна Геннадиевна</li>
    <li><em><strong>НПЦ «ТЕХНОМАГ. </strong></em>Начальник центра – Дик Виктор Николаевич</li>
    <li><em><strong>Научно-технический отдел маркетинга и сопровождения государственных программ.</strong> </em>Заведующий отделом – Замыслов Александр Сергеевич</li>
    <li><strong><em>Опытное производство.</em> </strong>Заведующий опытным производством<strong>&nbsp;− </strong>Волков&nbsp; Александр Дмитриевич</li>
</ul>



      </div>

<br>
