<?php

namespace config;

use ph\dictionary\BaseDictionary;

class Dictionary extends BaseDictionary {

    public function __construct() {
        parent::__construct(["ru", "en"], [
            "Button_Search" => ["Поиск", "Search"],

            "TopMenu_Home" => ["Главная", 'Home'],
            "TopMenu_News" => ["Новости", "News"],
            "TopMenu_Structure" => ["Структура", "Structure"],
            "TopMenu_Structure_Departments" => ["Научные центры и отделы", "Research centers and departments"],
            "TopMenu_Structure_Laboratories" => ["Лаборатории", "Laboratories"],
            "TopMenu_Production" => ["Наша продукция", "Our production"],
            "TopMenu_Contacts" => ["Контакты", "Contacts"],
            "TopMenu_About" => ["О ФТИ", "About PhTI"],
            "TopMenu_About_Governance" => ["Руководство", "Governance"],
            "TopMenu_SearchFormPlaceHolder" => ["Строка для поиска", "Enter text to search"]
        ]);
    }
}
