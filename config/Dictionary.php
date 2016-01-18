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
            "Label_OurProduction" => ["Наша продукция", "Our production"],
            "Label_Managment" => ["Руководство ФТИ","Managment PHTI"],
            "Label_Cooperate" => ["Мы сотрудничаем","We cooperate"],
            "Label_Location" => ["Местоположение","Location"],

            /* ---slider--- */
            "Slider_Learn_More" => ["Подробнее", "Learn More"],
            "Slider_First_Name" => ["БАК и Технологии" , "UAS and Technology"],
            "Slider_First_Description" => ["Лаборатория Беспилотных Летальных Аппаратов и Технологий производит беспилотники" , "Laboratory unmanned aircraft systems and technology produces drones"],
            "Slider_Second_Name" => ["Руководство ФТИ" , "managment PHTI"],
            "Slider_Second_Description" => ["Руководство ФТИ НАН Беларуси" , "Managment PHTI NAN Belarus"],
            "Slider_Third_Name" => ["Деятельность ФТИ" , "Activities PHTI"],
            "Slider_Third_Description" => ["Деятельность ФТИ является примером реализации связи науки с производством" , "Activity PHTI is an example of the implementation of links between science and production"],
            /*---------*/

            "Button_Search" => ["Поиск", "Search"],

            "TopMenu_Home" => ["Главная", 'Home'],
            "TopMenu_News" => ["Новости", "News"],
            "TopMenu_Structure" => ["Структура", "Structure"],
            "TopMenu_Structure_Departments" => ["Научные центры и отделы", "Research centers and departments"],
            "TopMenu_Structure_Laboratories" => ["Лаборатории", "Laboratories"],
            "TopMenu_Production" => ["Продукция & Услуги", "Our production & services"],
            "TopMenu_Contacts" => ["Контакты", "Contacts"],
            "TopMenu_About" => ["О ФТИ", "About"],
            "TopMenu_About_Management" => ["Руководство", "Management"],
            "TopMenu_About_History" => ["История", "History"],
            "TopMenu_SearchFormPlaceHolder" => ["Строка для поиска", "Enter text to search"],

            "Product_Label_Varieties" =>["Разновидности", "Varieties"]
        ]);
    }
}
