-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 17 2016 г., 11:06
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
(6, 0, 1, 'Центр индукционных технологий и проблем термической обработки', '', 'induction-technology-and-heat-treatment-problems', 0, '', '', '', '', '', ''),
(7, 0, 1, 'Центр деформационных и литейных технологий', '', 'deformation-and-foundry-technologies', 0, '', '', '', '', '', ''),
(8, 0, 1, 'Отдел объемных гетерогенных систем', '', 'obemnye-geterogennye-sistemy', 0, '', '', '', '', '', ''),
(9, 0, 1, 'Отдел пучковых и плазменных технологий', '', 'puchkovye-i-plazmennye-tehnologii', 0, '', '', '', '', '', ''),
(10, 0, 1, 'Центр электронно-лучевых технологий и физики плазмы', '', 'jelektronno-luchevyh-tehnologij-i-fiziki-plaz', 0, '', '', '', '', '', ''),
(11, 0, 1, 'Маркетинга и сопровождения государственных программ', '', 'marketing-i-soprovozhdenie-gosudarstvennyh-programm', 0, '', '', '', '', '', ''),
(12, 5, 1, 'Сектор системного проектирования и математического моделирования', '', 'sektor-sistemnogo-proektirovanija-i-matematicheskogo-modelirovanija', 0, '', '', '', '', '', ''),
(13, 5, 1, 'Сектор разработки программного обеспечения', '', 'sektor-razrabotki-programmnogo-obespechenija', 0, '', '', '', '', '', ''),
(14, 5, 1, 'Лаборатория разработки НТД и оперативного исполнения НИОКР', '', 'lab-razrabotki-NTD-i-operativnogo-ispolnenija-NIOKR', 0, '', '', '', '', '', ''),
(15, 5, 1, 'Сектор физического моделирования и конструирования', '', 'sektor-fizicheskogo-modelirovanija-i-konstruirovanija', 0, '', '', '', '', '', ''),
(16, 5, 1, 'Лаборатория аэродинамики и конструирования летательных аппаратов', '', 'laboratorija-ajerodinamiki-i-konstruirovanija-letatelnyh-apparatov', 0, '', '', '', '', '', ''),
(17, 5, 1, 'Лаборатория испытаний и контроля качества', '', 'laboratorija-ispytanij-i-kontrolja-kachestva', 0, '', '', '', '', '', ''),
(18, 5, 1, 'Производственно-технологический сектор', '', 'proizvodstvenno-tehnologicheskij-sektor', 0, '', '', '', '', '', ''),
(19, 6, 1, 'Лаборотория скоростных методов термической обработки металлов и сплавов', '', 'lab-skorostnyh-metodov-termicheskoj-obrabotki-metallov-i-splavov', 0, '', '', '', '', '', ''),
(20, 6, 1, 'Лаборатория технологий и оборудования индукционного нагрева', '', 'lab-tehnologij-i-oborudovanija-indukcionnogo-nagreva', 0, '', '', '', '', '', ''),
(21, 7, 1, 'Лаборатория точной штамповки', '', 'lab-tochnoj-shtampovki', 0, '', '', '', '', '', ''),
(22, 7, 1, 'Лаборатория специальных сплавов и технологий', '', 'lab-specialnyh-splavov-i-tehnologij', 0, '', '', '', '', '', ''),
(23, 7, 1, 'Лаборатория высоких давлений', '', 'lab-vysokih-davlenij', 0, '', '', '', '', '', ''),
(24, 7, 1, 'Лаборатория предельной деформируемости', '', 'lab-predelnoj-deformiruemosti', 0, '', '', '', '', '', ''),
(25, 7, 1, 'Лаборатория поперечно-клиновой прокатки', '', 'lab-poperechno-klinovoj-prokatki', 0, '', '', '', '', '', ''),
(26, 7, 1, 'Лаборатория обработки металлов давлением', '', 'lab-obrabotki-metallov-davleniem', 0, '', '', '', '', '', ''),
(27, 7, 1, 'Конструкторско-технологический-сектор', '', 'konstruktorsko-tehnologicheskij-sektor', 0, '', '', '', '', '', ''),
(28, 7, 1, 'Сектор технологии оборудования магнитоимпульсной обработки материалов', '', 'sektor-tehnologii-oborudovanija-magnitoimpulsnoj-obrabotki-materialov', 0, '', '', '', '', '', ''),
(29, 8, 1, 'Лаборатория механофизики формирования гетерогенных систем', '', 'lab-mehanofiziki-formirovanija-geterogennyh-sistem', 0, '', '', '', '', '', ''),
(30, 8, 1, 'Лаборатория физики поверхностных взаимодействий', '', 'lab-fiziki-poverhnostnyh-vzaimodejstvij', 0, '', '', '', '', '', ''),
(31, 8, 1, 'Лаборатория физики поверхностных явлений', '', 'lab-fiziki-poverhnostnyh-javlenij', 0, '', '', '', '', '', ''),
(32, 9, 1, 'Лаборатория высокоэнергетических методов обработки', '', 'lab-vysokojenergeticheskih-metodov-obrabotki', 0, '', '', '', '', '', ''),
(33, 9, 1, 'Лаборатория вакуумно-плазменных покрытий', '', 'lab-vakuumno-plazmennyh-pokrytij', 0, '', '', '', '', '', ''),
(34, 10, 1, 'Лаборатория электрофизики', '', 'lab-jelektrofiziki', 0, '', '', '', '', '', ''),
(35, 10, 1, 'Лаборатория физики плазменных процессов', '', 'lab-fiziki-plazmennyh-processov', 0, '', '', '', '', '', ''),
(36, 11, 1, 'Патентно-информационный сектор', '', 'patentno-informacionnyj-sektor', 0, '', '', '', '', '', ''),
(37, 11, 1, 'Сектор маркетинга и внедрения научно-технических разработок', '', 'sektor-marketinga-i-vnedrenija-nauchno-tehnicheskih-razrabotok', 0, '', '', '', '', '', '');

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
