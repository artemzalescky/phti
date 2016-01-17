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

            "Button_Search" => ["Поиск", "Search"],

            "TopMenu_Home" => ["Главная", 'Home'],
            "TopMenu_News" => ["Новости", "News"],
            "TopMenu_Structure" => ["Структура", "Structure"],
            "TopMenu_Structure_Departments" => ["Научные центры и отделы", "Research centers and departments"],
            "TopMenu_Structure_Laboratories" => ["Лаборатории", "Laboratories"],
            "TopMenu_Production" => ["Наша продукция", "Our production"],
            "TopMenu_Contacts" => ["Контакты", "Contacts"],
            "TopMenu_About" => ["О ФТИ", "About"],
            "TopMenu_About_Management" => ["Руководство", "Management"],
            "TopMenu_About_History" => ["История", "History"],
            "TopMenu_SearchFormPlaceHolder" => ["Строка для поиска", "Enter text to search"],

            "Product_Label_Varieties" =>["Разновидности", "Varieties"]
        ]);
    }
}
