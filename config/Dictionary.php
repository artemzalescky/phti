<?php

namespace config;

use ph\dictionary\BaseDictionary;

class Dictionary extends BaseDictionary {

    public function __construct() {
        parent::__construct(["ru", "en"], [
            "Label_FTI" => ["ФТИ", "FTI"],
            "Label_Departments" => ["Отделы", "departments"],
            "Label_Laboratories" => ["Лаборатории", "Laboratories"],
            "Label_Production" => ["Продукция и услуги", "Production and services"],
            "Label_Catalog" => ["Каталог продукции", "Product Catalog"],
            "Label_Catalog_Razrabotok" => ["Каталог разработок", "Product development"],
            "Label_OurProduction" => ["Наша продукция", "Our production"],
            "Label_Managment" => ["Руководство ФТИ","Managment PHTI"],
            "Label_Cooperate" => ["Мы сотрудничаем","We cooperate"],
            "Label_Certificate" => ["Cертификаты","Certificates"],
            "Label_Location" => ["Местоположение","Location"],
            "Label_News" => ["Новости","PHTI News"],
            "Label_About_US" => ["Коротко о ФТИ","About PHTI"],
            "Label_Recall" => ["Отзывы","Recall"],
            "Label_Useful_Information" => ["Полезная информация","Useful information"],

            "Label_Schedule" => ["График работы","Schedule"],

            /* ---slider--- */
            "Slider_Learn_More" => ["Подробнее", "Learn More"],
            "Slider_First_Name" => ["Контакты" , "contacts"],
            "Slider_First_Description" => ["Для получения информации о местоположении ФТИ НАН Беларуси и графике работы" , "For information about the location of the Ioffe Institute of NAS of Belarus and work schedule"],
            "Slider_Second_Name" => ["Руководство ФТИ" , "managment PHTI"],
            "Slider_Second_Description" => ["Руководство ФТИ НАН Беларуси" , "Managment PHTI NAN Belarus"],
            "Slider_Third_Name" => ["Деятельность ФТИ" , "Activities PHTI"],
            "Slider_Third_Description" => ["Основные направления научных исследований, проводимых сегодня в Институте:" , "The main directions of scientific research carried out today in the Institute:"],
            /*---------*/

            "Button_Search" => ["Поиск", "Search"],

            "TopMenu_Home" => ["Главная", 'Home'],
            "TopMenu_News" => ["Новости", "News"],
            "TopMenu_Structure" => ["Структура", "Structure"],
            "TopMenu_Structure_Departments" => ["Отделы", "departments"],
            "TopMenu_Structure_Laboratories" => ["Лаборатории", "Laboratories"],
            "TopMenu_Production" => ["Продукция & Услуги", "Our production & services"],
            "TopMenu_Productionandservices" => ["Продукция и услуги", "Our production and services"],
            "TopMenu_Contacts" => ["Контакты", "Contacts"],
            "TopMenu_About" => ["О НАС", "About"], 
            "TopMenu_Attestats" => ["Аттестаты аккредитации, сертификаты, лицензии", "Certificate of accreditation"],
            "TopMenu_About_Management" => ["Руководство", "Management"],
            "TopMenu_About_History" => ["История", "History"],
            "TopMenu_SearchFormPlaceHolder" => ["Строка для поиска", "Enter text to search"],
            "TopMenu_Video" => ["Видео", "Video"],

            "Product_Label_Varieties" =>["Разновидности", "Varieties"],
            "Conference_Label" =>["Конференции ФТИ НАН Беларуси", "Conference PHTI NAN Belarus"],
            "Conference" =>["Конференции", "Conference"],
            "TopMenu_Science" =>["НАУКА", "SCIENCE"],
            "TopMenu_Productionservices" =>["ПРОДУКЦИЯ  УСЛУГИ", "PRODUCTS  SERVICES"],
            "TopMenu_molod" =>["МОЛОДЕЖНАЯ СТРАНИЦА", "YOUTH PAGE"],
            "TopMenu_Science_1" =>["КОНФЕРЕНЦИИ", "CONFERENCE"],
            "TopMenu_Science_2" =>["КОНКУРСЫ", ""],
            "TopMenu_Science_3" =>["ПУБЛИКАЦИИ И МОНОГРАФИИ", ""],
            "TopMenu_Science_4" =>["СОВЕТ ПО ЗАЩИТЕ ДИССЕРТАЦИЙ", ""],
            "TopMenu_Science_5" =>["МЕЖДУНАРОДНЫЕ ПРОЕКТЫ", "International projects"],
            "TopMenu_Science_6" =>["ГОСУДАРСТВЕННЫЕ ПРОГРАММЫ", ""],
            "Label_Competition" =>["Конкурсы", "Competition"],
            "Label_Cooperate_Science" =>["СОТРУДНИЧЕСТВО", "COOPERATE"],
            "Label_Conference"=>["КОНФЕРЕНЦИИ", "CONFERENCE"],
            "Label_International_Project"=>["МЕЖДУНАРОДНЫЕ ПРОЕКТЫ", "INTERNATIONAL PROJECT"],
            "Label_Publication_Monogram"=>["ПУБЛИКАЦИИ И МОНОГРАФИИ", "PUBLICATIONS AND MONOGRAMS"],
            "Label_Sovet_Nayki"=>["СОВЕТ ПО ЗАЩИТЕ ДИССЕРТАЦИЙ", "SOVET"],
            "Label_PHTI_GOS_Programs"=>["ФТИ НАН БЕЛАРУСИ В ГОСПРОГРАММАХ", "PHTI NAN BELARUSI"],



            
            
            
            
            
            
            
            
            
            "Conference_Text" =>["<strong>Уважаемые коллеги!</strong> <br>
Приглашаем Вас принять участие в ХII Международной научно-технической конференции <br>
<strong>«Современные методы и технологии создания и обработки материалов»
13–15 сентября 2017 г., </strong><br>
г. Минск, ул. Купревича 10, (Физико-технический институт НАН Беларуси)<br>
Ниже вы можете скачать информационное сообщение и заявку на участие. <br>
<a href='https://drive.google.com/open?id=0B4ehyaGAtV5TUUhFYTB3cXk2eDQ' target='_blank'> Заявка на участие в конференции </a> <br>
<a href='https://drive.google.com/open?id=0B4ehyaGAtV5TQzB4cjRXdmljYlU' target='_blank'> 2017 Информационное сообщение XII МНТК</a><br>
<a href='https://drive.google.com/open?id=0B4ehyaGAtV5TWjJYdXZ3VTBNUW8' target='_blank'> Пример оформления статьи</a>

",

  "<strong>Dear Colleagues!</strong> <br>
You are welcome to take part in <br>
ХII International Science and Technology Conference <br>
Advanced methods and technologies of materials development and processing <br>

September 13–15, 2017, Minsk, Belarus <br>
<a href='https://drive.google.com/open?id=0B4ehyaGAtV5TeTdaUkIwaTJ0bDQ' target='_blank'> Application form for participation in the XII  International</a> <br>
<a href='https://drive.google.com/open?id=0B4ehyaGAtV5TSFZ5YmFLblBPY00' target='_blank'> 2017-Announcement XII Conference</a>"]

        ]);
    }
}
