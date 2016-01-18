-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 18 2016 г., 13:53
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `phti`
--

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`id` int(6) unsigned NOT NULL,
  `parent_id` int(6) unsigned NOT NULL,
  `type` int(2) unsigned NOT NULL DEFAULT '1',
  `name_ru` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `priority` int(2) NOT NULL DEFAULT '0',
  `description_ru` text NOT NULL,
  `description_en` text NOT NULL,
  `management_ru` text NOT NULL,
  `management_en` text NOT NULL,
  `contacts_ru` text NOT NULL,
  `contacts_en` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `parent_id`, `type`, `name_ru`, `name_en`, `url`, `priority`, `description_ru`, `description_en`, `management_ru`, `management_en`, `contacts_ru`, `contacts_en`) VALUES
(1, 0, 0, 'Лаборатория лазерной обработки материалов', 'Laboratory of laser materials processing', 'laboratory-of-laser-materials-processing', 0, '', '', '', '', '', ''),
(2, 0, 0, 'Лаборатория микрокристаллических и аморфных материалов', 'Laboratory of micro crystalline and amorphous materials', 'laboratory-micro-crystalline-and-amorphous-materials', 0, '', '', '', '', '', ''),
(3, 0, 0, 'Лаборатория прикладной механики', 'Laboratory of Applied Mechanics', 'laboratory-of-applied-mechanics', 0, '', '', '', '', '', ''),
(4, 0, 0, 'Лаборатория физики тонких плёнок и равновесных систем', 'Laboratory of physics of thin films and equilibrium systems', 'laboratory-of-thin-films-and-equilibrium-systems', 0, '', '', '', '', '', ''),
(5, 0, 1, 'Центр беспилотных авиационных комплексов и технологий', 'Unmanned aircraft system and technology', 'unmanned-aircraft-systems-and-technology', 0, '', '', '', '', '', ''),
(6, 0, 1, 'Центр индукционных технологий и проблем термической обработки', 'Center induction technologies and problems of heat treatment', 'induction-technology-and-heat-treatment-problems', 0, '', '', '', '', '', ''),
(7, 0, 1, 'Центр деформационных и литейных технологий', 'Center expansion and foundry technologies', 'deformation-and-foundry-technologies', 0, '', '', '', '', '', ''),
(8, 0, 1, 'Отдел объемных гетерогенных систем', 'Unit volume of heterogeneous systems', 'obemnye-geterogennye-sistemy', 0, '', '', '', '', '', ''),
(9, 0, 1, 'Отдел пучковых и плазменных технологий', 'Department of beam and plasma technology', 'puchkovye-i-plazmennye-tehnologii', 0, '', '', '', '', '', ''),
(10, 0, 1, 'Центр электронно-лучевых технологий и физики плазмы', 'The center of electron beam technology and plasma physics', 'jelektronno-luchevyh-tehnologij-i-fiziki-plaz', 0, '', '', '', '', '', ''),
(11, 0, 1, 'Маркетинга и сопровождения государственных программ', 'Marketing and support of public programs', 'marketing-i-soprovozhdenie-gosudarstvennyh-programm', 0, '', '', '', '', '', ''),
(12, 5, 1, 'Сектор системного проектирования и математического моделирования', 'Sector systems engineering and mathematical modeling', 'sektor-sistemnogo-proektirovanija-i-matematicheskogo-modelirovanija', 0, '', '', '', '', '', ''),
(13, 5, 1, 'Сектор разработки программного обеспечения', 'Sector Software Development', 'sektor-razrabotki-programmnogo-obespechenija', 0, '', '', '', '', '', ''),
(14, 5, 1, 'Лаборатория разработки НТД и оперативного исполнения НИОКР', 'Laboratory for development documentation and speedy execution NIOKR', 'lab-razrabotki-NTD-i-operativnogo-ispolnenija-NIOKR', 0, '', '', '', '', '', ''),
(15, 5, 1, 'Сектор физического моделирования и конструирования', 'Sector of physical modeling and design', 'sektor-fizicheskogo-modelirovanija-i-konstruirovanija', 0, '', '', '', '', '', ''),
(16, 5, 1, 'Лаборатория аэродинамики и конструирования летательных аппаратов', 'Laboratory of aerodynamics and design of aircraft', 'laboratorija-ajerodinamiki-i-konstruirovanija-letatelnyh-apparatov', 0, '', '', '', '', '', ''),
(17, 5, 1, 'Лаборатория испытаний и контроля качества', 'Laboratory testing and quality control', 'laboratorija-ispytanij-i-kontrolja-kachestva', 0, '', '', '', '', '', ''),
(18, 5, 1, 'Производственно-технологический сектор', 'Production and technology sector', 'proizvodstvenno-tehnologicheskij-sektor', 0, '', '', '', '', '', ''),
(19, 6, 1, 'Лаборатория скоростных методов термической обработки металлов и сплавов', 'Laboratory methods of high-speed heat treatment of metals and alloys', 'lab-skorostnyh-metodov-termicheskoj-obrabotki-metallov-i-splavov', 0, '', '', '', '', '', ''),
(20, 6, 1, 'Лаборатория технологий и оборудования индукционного нагрева', 'Laboratory technology and induction heating equipment', 'lab-tehnologij-i-oborudovanija-indukcionnogo-nagreva', 0, '', '', '', '', '', ''),
(21, 7, 1, 'Лаборатория точной штамповки', 'Laboratory accurate punching', 'lab-tochnoj-shtampovki', 0, '', '', '', '', '', ''),
(22, 7, 1, 'Лаборатория специальных сплавов и технологий', 'Laboratory of special alloys and technologies', 'lab-specialnyh-splavov-i-tehnologij', 0, '', '', '', '', '', ''),
(23, 7, 1, 'Лаборатория высоких давлений', 'Laboratory for high pressure', 'lab-vysokih-davlenij', 0, '', '', '', '', '', ''),
(24, 7, 1, 'Лаборатория предельной деформируемости', 'Laboratory limiting deformability', 'lab-predelnoj-deformiruemosti', 0, '', '', '', '', '', ''),
(25, 7, 1, 'Лаборатория поперечно-клиновой прокатки', 'Laboratory of cross-wedge rolling', 'lab-poperechno-klinovoj-prokatki', 0, '', '', '', '', '', ''),
(26, 7, 1, 'Лаборатория обработки металлов давлением', 'Laboratory metal forming', 'lab-obrabotki-metallov-davleniem', 0, '', '', '', '', '', ''),
(27, 7, 1, 'Конструкторско-технологический-сектор', 'Design and Technology sector', 'konstruktorsko-tehnologicheskij-sektor', 0, '', '', '', '', '', ''),
(28, 7, 1, 'Сектор технологии оборудования магнитоимпульсной обработки материалов', 'Sector magnetic pulse technology equipment material handling', 'sektor-tehnologii-oborudovanija-magnitoimpulsnoj-obrabotki-materialov', 0, '', '', '', '', '', ''),
(29, 8, 1, 'Лаборатория механофизики формирования гетерогенных систем', 'Laboratory mehanofiziki formation of heterogeneous systems', 'lab-mehanofiziki-formirovanija-geterogennyh-sistem', 0, '', '', '', '', '', ''),
(30, 8, 1, 'Лаборатория физики поверхностных взаимодействий', 'Laboratory of surface interactions', 'lab-fiziki-poverhnostnyh-vzaimodejstvij', 0, '', '', '', '', '', ''),
(31, 8, 1, 'Лаборатория физики поверхностных явлений', 'Laboratory of surface phenomena', 'lab-fiziki-poverhnostnyh-javlenij', 0, '', '', '', '', '', ''),
(32, 9, 1, 'Лаборатория высокоэнергетических методов обработки', 'Laboratory high-level methods for processing ', 'lab-vysokojenergeticheskih-metodov-obrabotki', 0, '', '', '', '', '', ''),
(33, 9, 1, 'Лаборатория вакуумно-плазменных покрытий', 'Laboratory vacuum plasma coatings', 'lab-vakuumno-plazmennyh-pokrytij', 0, '', '', '', '', '', ''),
(34, 10, 1, 'Лаборатория электрофизики', 'Laboratory electrophysics ', 'lab-jelektrofiziki', 0, '', '', '', '', '', ''),
(35, 10, 1, 'Лаборатория физики плазменных процессов', 'Laboratory of Plasma Processes', 'lab-fiziki-plazmennyh-processov', 0, '', '', '', '', '', ''),
(36, 11, 1, 'Патентно-информационный сектор', 'Patent-information sector', 'patentno-informacionnyj-sektor', 0, '', '', '', '', '', ''),
(37, 11, 1, 'Сектор маркетинга и внедрения научно-технических разработок', 'Patent-information sector', 'sektor-marketinga-i-vnedrenija-nauchno-tehnicheskih-razrabotok', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(6) unsigned NOT NULL,
  `parent_id` int(6) unsigned NOT NULL DEFAULT '0',
  `department_id` int(6) unsigned NOT NULL DEFAULT '0',
  `name_ru` varchar(300) NOT NULL,
  `name_en` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `priority` int(2) unsigned NOT NULL DEFAULT '0',
  `short_description_ru` text NOT NULL,
  `short_description_en` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `parent_id`, `department_id`, `name_ru`, `name_en`, `url`, `priority`, `short_description_ru`, `short_description_en`) VALUES
(1, 0, 5, 'Беспилотные авиационные комплексы', 'Unmanned aircraft systems', 'unmanned-aircraft-systems', 0, 'БЛА - это летательный аппарат без экипажа на борту. Создан для воздушной съёмки и наблюдения в реальном времени за наземными объектами.', 'UAS is aircraft without a crew on board. Designed for air shooting and real-time monitoring of ground objects.'),
(2, 1, 0, 'Беспилотный авиационный комплекс видеомониторинга местности «бусел»', 'Unmanned aircraft systems video monitoring area "Busel"', 'busel', 0, 'Беспилотный летательный аппарат (2 шт.) мобильный или переносной наземный пункт управления (1 шт.) модуль приемо-передающей аппаратуры (2 к-та)', 'Unmanned aerial vehicles (2 pcs.), Mobile or a portable ground control station (1 pc.) Module receiving and transmitting equipment (2-ta)'),
(3, 1, 0, 'Беспилотный авиационный комплекс дальнего действия для мониторинга местности и объектов БУРЕВЕСТНИК', 'Unmanned aircraft systems for long-range monitoring of terrain and objects BUREVESTNIK', 'burevestnik', 0, 'Область применения: энергосбережение, предупреждение чрезвычайных ситуаций, контроль общественного порядка, охрана природы.', 'Scope: energy saving, prevention of emergency situations, control of public order, the protection of nature.');

-- --------------------------------------------------------

--
-- Структура таблицы `product_field`
--

CREATE TABLE IF NOT EXISTS `product_field` (
`id` int(8) unsigned NOT NULL,
  `product_id` int(6) NOT NULL,
  `key_ru` varchar(150) NOT NULL,
  `key_en` varchar(150) NOT NULL,
  `value_ru` text NOT NULL,
  `value_en` text NOT NULL,
  `priority` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `product_field`
--

INSERT INTO `product_field` (`id`, `product_id`, `key_ru`, `key_en`, `value_ru`, `value_en`, `priority`) VALUES
(1, 2, 'Тип БЛА', 'UAS Type', 'Электролет "Бусел"', 'UAS "Busel"', 0),
(2, 2, 'Взлетная масса, кг', 'Takeoff weight, kg', '6+1,3', '', 0),
(3, 2, 'Полный размах крыла, мм', 'Full wingspan, mm', '2 280', '', 0),
(4, 2, 'Продолжительность полета, мин', 'The duration of the flight, min', 'до 90', '< 90', 0),
(5, 2, 'Диапазон скоростей полета, км/ч', 'Flight speed range, km / h', '40–100', '', 0),
(6, 2, 'Максимальная высота полета, м', 'Maximum flight altitude, m', 'до 3 000', '< 3000', 0),
(7, 2, 'Дальность применения, км', 'Range of applications, km', 'до 25', '< 25', 0),
(8, 2, 'Целевая нагрузка', 'The target load', 'Гиростабилизированный модуль оптико-электронного мониторинга в составе ТВ, Фото, ИК, лазерный дальномер, модуль радиационного мониторинга', 'Gyrostabilized module opto-electronic monitoring as a part of TV, photo, infrared, laser rangefinder, radiation monitoring module', 0),
(9, 2, 'Пилотажно-навигационный комплекс', 'Flight navigation system', 'GPS и САУ', 'GPS and САУ', 0),
(10, 2, 'Способ старта / посадки', 'The method of start / landing', 'С руки / парашют', 'From hand / parachute', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_field`
--
ALTER TABLE `product_field`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_field`
--
ALTER TABLE `product_field`
MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
