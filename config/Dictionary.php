<?php

namespace config;

use ph\dictionary\BaseDictionary;

class Dictionary extends BaseDictionary {

    public function __construct() {
        parent::__construct(["ru", "en"], [
            "Label_FTI" => ["ФТИ", "FTI"],
            "Label_Departments" => ["Научные центры и отделы", "Research centers and departments"],
            "Label_Laboratories" => ["Лаборатории", "Laboratories"],
            "Label_Production" => ["Продукция и услуги", "Production and services"],
            "Label_Catalog" => ["Каталог продукции", "Product Catalog"],
            "Label_Catalog_Razrabotok" => ["Каталог разработок", "Product development"],
            "Label_OurProduction" => ["Наша продукция", "Our production"],
            "Label_Managment" => ["Руководство ФТИ","Managment PHTI"],
            "Label_Cooperate" => ["Мы сотрудничаем","We cooperate"],
            "Label_Location" => ["Местоположение","Location"],
            "Label_News" => ["Новости","PHTI News"],

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
            "TopMenu_Structure_Departments" => ["Научные центры и отделы", "Research centers and departments"],
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

        ]);
    }
}
