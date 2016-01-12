-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 11 2016 г., 09:12
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
  `description_en` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `parent_id`, `type`, `name_ru`, `name_en`, `url`, `priority`, `description_ru`, `description_en`) VALUES
(1, 0, 0, 'Лаборатория лазерной обработки материалов', '', 'laboratory-of-laser-materials-processing', 0, '', ''),
(2, 0, 0, 'Лаборатория микрокристаллических и аморфных материалов', '', 'laboratory-micro-crystalline-and-amorphous-materials', 0, '', ''),
(3, 0, 0, 'Лаборатория прикладной механики', '', 'laboratory-of-applied-mechanics', 0, '', ''),
(4, 0, 0, 'Лаборатория фиизики тонких плёнок и равновесных систем', '', 'laboratory-of-thin-films-and-equilibrium-systems', 0, '', ''),
(5, 0, 1, 'Беспилотных авиационных комплексов и технологий', '', 'unmanned-aircraft-systems-and-technology', 0, '', ''),
(6, 0, 1, 'Индукционных технологий и проблем термической обработки', '', 'induction-technology-and-heat-treatment-problems', 0, '', ''),
(7, 0, 1, 'Деформационных и литейных технологий', '', 'deformation-and-foundry-technologies', 0, '', ''),
(8, 0, 1, 'Объемных гетерогенных систем', '', 'obemnye-geterogennye-sistemy', 0, '', ''),
(9, 0, 1, 'Пучковых и плазменных технологий', '', 'puchkovye-i-plazmennye-tehnologii', 0, '', ''),
(10, 0, 1, 'Электронно-лучевых технологий и физики плазмы', '', 'jelektronno-luchevyh-tehnologij-i-fiziki-plaz', 0, '', ''),
(11, 0, 1, 'маркетинга и сопровождения государственных программ', '', 'marketing-i-soprovozhdenie-gosudarstvennyh-programm', 0, '', ''),
(12, 5, 1, 'Сектор системного проектирования и математического моделирования', '', 'sektor-sistemnogo-proektirovanija-i-matematicheskogo-modelirovanija', 0, '', ''),
(13, 5, 1, 'Сектор разработки программного обеспечения', '', 'sektor-razrabotki-programmnogo-obespechenija', 0, '', ''),
(14, 5, 1, 'Лаборатория разработки НТД и оперативного исполнения НИОКР', '', 'lab-razrabotki-NTD-i-operativnogo-ispolnenija-NIOKR', 0, '', ''),
(15, 5, 1, 'Сектор физического моделирования и конструирования', '', 'sektor-fizicheskogo-modelirovanija-i-konstruirovanija', 0, '', ''),
(16, 5, 1, 'Лаборатория аэродинамики и конструирования летательных аппаратов', '', 'laboratorija-ajerodinamiki-i-konstruirovanija-letatelnyh-apparatov', 0, '', ''),
(17, 5, 1, 'Лаборатория испытаний и контроля качества', '', 'laboratorija-ispytanij-i-kontrolja-kachestva', 0, '', ''),
(18, 5, 1, 'Производственно-технологический сектор', '', 'proizvodstvenno-tehnologicheskij-sektor', 0, '', ''),
(19, 6, 1, 'Лаборотория скоростных методов термической обработки металлов и сплавов', '', 'lab-skorostnyh-metodov-termicheskoj-obrabotki-metallov-i-splavov', 0, '', ''),
(20, 6, 1, 'Лаборатория технологий и оборудования индукционного нагрева', '', 'lab-tehnologij-i-oborudovanija-indukcionnogo-nagreva', 0, '', ''),
(21, 7, 1, 'Лаборатория точной штамповки', '', 'lab-tochnoj-shtampovki', 0, '', ''),
(22, 7, 1, 'Лаборатория специальных сплавов и технологий', '', 'lab-specialnyh-splavov-i-tehnologij', 0, '', ''),
(23, 7, 1, 'Лаборатория высоких давлений', '', 'lab-vysokih-davlenij', 0, '', ''),
(24, 7, 1, 'Лаборатория предельной деформируемости', '', 'lab-predelnoj-deformiruemosti', 0, '', ''),
(25, 7, 1, 'Лаборатория поперечно-клиновой прокатки', '', 'lab-poperechno-klinovoj-prokatki', 0, '', ''),
(26, 7, 1, 'Лаборатория обработки металлов давлением', '', 'lab-obrabotki-metallov-davleniem', 0, '', ''),
(27, 7, 1, 'Конструкторско-технологический-сектор', '', 'konstruktorsko-tehnologicheskij-sektor', 0, '', ''),
(28, 7, 1, 'Сектор технологии оборудования магнитоимпульсной обработки материалов', '', 'sektor-tehnologii-oborudovanija-magnitoimpulsnoj-obrabotki-materialov', 0, '', ''),
(29, 8, 1, 'Лаборатория механофизики формирования гетерогенных систем', '', 'lab-mehanofiziki-formirovanija-geterogennyh-sistem', 0, '', ''),
(30, 8, 1, 'Лаборатория физики поверхностных взаимодействий', '', 'lab-fiziki-poverhnostnyh-vzaimodejstvij', 0, '', ''),
(31, 8, 1, 'Лаборатория физики поверхностных явлений', '', 'lab-fiziki-poverhnostnyh-javlenij', 0, '', ''),
(32, 9, 1, 'Лаборатория высокоэнергетических методов обработки', '', 'lab-vysokojenergeticheskih-metodov-obrabotki', 0, '', ''),
(33, 9, 1, 'Лаборатория вакуумно-плазменных покрытий', '', 'lab-vakuumno-plazmennyh-pokrytij', 0, '', ''),
(34, 10, 1, 'Лаборатория электрофизики', '', 'lab-jelektrofiziki', 0, '', ''),
(35, 10, 1, 'Лаборатория физики плазменных процессов', '', 'lab-fiziki-plazmennyh-processov', 0, '', ''),
(36, 11, 1, 'Патентно-информационный сектор', '', 'patentno-informacionnyj-sektor', 0, '', ''),
(37, 11, 1, 'Сектор маркетинга и внедрения научно-технических разработок', '', 'sektor-marketinga-i-vnedrenija-nauchno-tehnicheskih-razrabotok', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `url` (`url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
