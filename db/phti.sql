-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 18 2016 г., 21:52
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
  `desсription_ru` text NOT NULL,
  `desсription_en` text NOT NULL,
  `contact_ru` text NOT NULL,
  `contact_en` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `parent_id`, `type`, `name_ru`, `name_en`, `url`, `priority`, `desсription_ru`, `desсription_en`, `contact_ru`, `contact_en`) VALUES
(1, 0, 0, 'Лаборатория лазерной обработки материалов', 'Laboratory of laser materials processing', 'laboratory-of-laser-materials-processing', 0, '', '', '', ''),
(2, 0, 0, 'Лаборатория микрокристаллических и аморфных материалов', 'Laboratory of micro crystalline and amorphous materials', 'laboratory-micro-crystalline-and-amorphous-materials', 0, '', '', '', ''),
(3, 0, 0, 'Лаборатория прикладной механики', 'Laboratory of Applied Mechanics', 'laboratory-of-applied-mechanics', 0, '', '', '', ''),
(4, 0, 0, 'Лаборатория физики тонких плёнок и равновесных систем', 'Laboratory of physics of thin films and equilibrium systems', 'laboratory-of-thin-films-and-equilibrium-systems', 0, '', '', '', ''),
(5, 0, 1, 'Центр беспилотных авиационных комплексов и технологий', 'Unmanned aircraft system and technology', 'unmanned-aircraft-systems-and-technology', 0, '', '', '', ''),
(6, 0, 1, 'Центр индукционных технологий и проблем термической обработки', 'Center induction technologies and problems of heat treatment', 'induction-technology-and-heat-treatment-problems', 0, '', '', '', ''),
(7, 0, 1, 'Центр деформационных и литейных технологий', 'Center expansion and foundry technologies', 'deformation-and-foundry-technologies', 0, '', '', '', ''),
(8, 0, 1, 'Отдел объемных гетерогенных систем', 'Unit volume of heterogeneous systems', 'obemnye-geterogennye-sistemy', 0, '', '', '', ''),
(9, 0, 1, 'Отдел пучковых и плазменных технологий', 'Department of beam and plasma technology', 'puchkovye-i-plazmennye-tehnologii', 0, '', '', '', ''),
(10, 0, 1, 'Центр электронно-лучевых технологий и физики плазмы', 'The center of electron beam technology and plasma physics', 'jelektronno-luchevyh-tehnologij-i-fiziki-plaz', 0, '', '', '', ''),
(11, 0, 1, 'Маркетинга и сопровождения государственных программ', 'Marketing and support of public programs', 'marketing-i-soprovozhdenie-gosudarstvennyh-programm', 0, '', '', '', ''),
(12, 5, 1, 'Сектор системного проектирования и математического моделирования', 'Sector systems engineering and mathematical modeling', 'sektor-sistemnogo-proektirovanija-i-matematicheskogo-modelirovanija', 0, '', '', '', ''),
(13, 5, 1, 'Сектор разработки программного обеспечения', 'Sector Software Development', 'sektor-razrabotki-programmnogo-obespechenija', 0, '', '', '', ''),
(14, 5, 1, 'Лаборатория разработки НТД и оперативного исполнения НИОКР', 'Laboratory for development documentation and speedy execution NIOKR', 'lab-razrabotki-NTD-i-operativnogo-ispolnenija-NIOKR', 0, '', '', '', ''),
(15, 5, 1, 'Сектор физического моделирования и конструирования', 'Sector of physical modeling and design', 'sektor-fizicheskogo-modelirovanija-i-konstruirovanija', 0, '', '', '', ''),
(16, 5, 1, 'Лаборатория аэродинамики и конструирования летательных аппаратов', 'Laboratory of aerodynamics and design of aircraft', 'laboratorija-ajerodinamiki-i-konstruirovanija-letatelnyh-apparatov', 0, '', '', '', ''),
(17, 5, 1, 'Лаборатория испытаний и контроля качества', 'Laboratory testing and quality control', 'laboratorija-ispytanij-i-kontrolja-kachestva', 0, '', '', '', ''),
(18, 5, 1, 'Производственно-технологический сектор', 'Production and technology sector', 'proizvodstvenno-tehnologicheskij-sektor', 0, '', '', '', ''),
(19, 6, 1, 'Лаборатория скоростных методов термической обработки металлов и сплавов', 'Laboratory methods of high-speed heat treatment of metals and alloys', 'lab-skorostnyh-metodov-termicheskoj-obrabotki-metallov-i-splavov', 0, '', '', '', ''),
(20, 6, 1, 'Лаборатория технологий и оборудования индукционного нагрева', 'Laboratory technology and induction heating equipment', 'lab-tehnologij-i-oborudovanija-indukcionnogo-nagreva', 0, '', '', '', ''),
(21, 7, 1, 'Лаборатория точной штамповки', 'Laboratory accurate punching', 'lab-tochnoj-shtampovki', 0, '', '', '', ''),
(22, 7, 1, 'Лаборатория специальных сплавов и технологий', 'Laboratory of special alloys and technologies', 'lab-specialnyh-splavov-i-tehnologij', 0, '', '', '', ''),
(23, 7, 1, 'Лаборатория высоких давлений', 'Laboratory for high pressure', 'lab-vysokih-davlenij', 0, '', '', '', ''),
(24, 7, 1, 'Лаборатория предельной деформируемости', 'Laboratory limiting deformability', 'lab-predelnoj-deformiruemosti', 0, '', '', '', ''),
(25, 7, 1, 'Лаборатория поперечно-клиновой прокатки', 'Laboratory of cross-wedge rolling', 'lab-poperechno-klinovoj-prokatki', 0, '', '', '', ''),
(26, 7, 1, 'Лаборатория обработки металлов давлением', 'Laboratory metal forming', 'lab-obrabotki-metallov-davleniem', 0, '', '', '', ''),
(27, 7, 1, 'Конструкторско-технологический-сектор', 'Design and Technology sector', 'konstruktorsko-tehnologicheskij-sektor', 0, '', '', '', ''),
(28, 7, 1, 'Сектор технологии оборудования магнитоимпульсной обработки материалов', 'Sector magnetic pulse technology equipment material handling', 'sektor-tehnologii-oborudovanija-magnitoimpulsnoj-obrabotki-materialov', 0, '', '', '', ''),
(29, 8, 1, 'Лаборатория механофизики формирования гетерогенных систем', 'Laboratory mehanofiziki formation of heterogeneous systems', 'lab-mehanofiziki-formirovanija-geterogennyh-sistem', 0, '', '', '', ''),
(30, 8, 1, 'Лаборатория физики поверхностных взаимодействий', 'Laboratory of surface interactions', 'lab-fiziki-poverhnostnyh-vzaimodejstvij', 0, '', '', '', ''),
(31, 8, 1, 'Лаборатория физики поверхностных явлений', 'Laboratory of surface phenomena', 'lab-fiziki-poverhnostnyh-javlenij', 0, '', '', '', ''),
(32, 9, 1, 'Лаборатория высокоэнергетических методов обработки', 'Laboratory high-level methods for processing ', 'lab-vysokojenergeticheskih-metodov-obrabotki', 0, '', '', '', ''),
(33, 9, 1, 'Лаборатория вакуумно-плазменных покрытий', 'Laboratory vacuum plasma coatings', 'lab-vakuumno-plazmennyh-pokrytij', 0, '', '', '', ''),
(34, 10, 1, 'Лаборатория электрофизики', 'Laboratory electrophysics ', 'lab-jelektrofiziki', 0, '', '', '', ''),
(35, 10, 1, 'Лаборатория физики плазменных процессов', 'Laboratory of Plasma Processes', 'lab-fiziki-plazmennyh-processov', 0, '', '', '', ''),
(36, 11, 1, 'Патентно-информационный сектор', 'Patent-information sector', 'patentno-informacionnyj-sektor', 0, '', '', '', ''),
(37, 11, 1, 'Сектор маркетинга и внедрения научно-технических разработок', 'Patent-information sector', 'sektor-marketinga-i-vnedrenija-nauchno-tehnicheskih-razrabotok', 0, '', '', '', ''),
(38, 0, 1, 'Научно-производственный центр ТЕХНОМАГ\r\n', 'Scientific-production centre Technomages', 'scientific-production-centre-Technomages', 0, 'ОСНОВНЫЕ НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ  Прикладные исследования: 1. Научно-исследовательские работы по изучению и исследованию свойств материалов, способных выдерживать ударные импульсные нагрузки в качестве преград и материалов, способных поглощать энергию ударных импульсных нагрузок в качестве амортизаторов; 2. Разработка технической документации, регламентирующей создание, производство, эксплуатацию и утилизацию индивидуальных и коллективных средств бронезащиты, комплектующих изделий к ним, специального оборудова-ния  для их серийного производства; 3. Создание материально-технической базы для проведения предвари-тельных испытаний и исследований характеристик изделий специального назна-чения; 4. Изучение перспективных направлений в разработках новых технологий, анализ опыта эксплуатации индивидуальной бронезащиты и её совершенствова-ние.  Производственная деятельность:  1. Опытно-технологические работы по созданию защитных композиций и  изготовлению наукоемких образцов изделий противоударной и противопульной защиты, соответствующих действующим стандартам; 2. Серийное производство востребованных заказчиками изделий индивидуальной бронезащиты, комплектующих изделий к ним, их модернизация, ремонт и утилизация. ', 'MAIN ACTIVITIES  Applied research: 1. Research work on the study and investigation of the properties of materials capable of withstanding the shock pulse load as obstacles and materials that can absorb the energy of the shock pulses waist-loads as shock absorbers; 2. Development of technical documentation, regulating the creation, production, operation and disposal of the individual and collective means of body armor, components for them, special equip-tion for their serial production; 3. Creation of material and technical base for with preliminary tests and research characteristics of products Special purpose-cheniya; 4. The study of perspective directions in the development of new technologies, analysis of operating experience and its body armor sovershenstvova-set. Production sector: 1. technological works on the creation of protective compositions and manufacturing high-tech product samples shockproof and bulletproof protection to comply with applicable standards; 2. Serial production of products demanded by customers indivi-dual body armor, components to them, their modernization, repairs and re-utilization.', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `department_field`
--

CREATE TABLE IF NOT EXISTS `department_field` (
  `id` int(250) NOT NULL,
  `parent_id` int(250) NOT NULL,
  `key_ru` varchar(1000) NOT NULL,
  `key_en` varchar(1000) NOT NULL,
  `value_ru` text NOT NULL,
  `value_en` text NOT NULL,
  `priority` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `parent_id`, `department_id`, `name_ru`, `name_en`, `url`, `priority`, `short_description_ru`, `short_description_en`) VALUES
(1, 0, 5, 'Беспилотные авиационные комплексы', 'Unmanned aircraft systems', 'unmanned-aircraft-systems', 0, 'БЛА - это летательный аппарат без экипажа на борту. Создан для воздушной съёмки и наблюдения в реальном времени за наземными объектами.', 'UAS is aircraft without a crew on board. Designed for air shooting and real-time monitoring of ground objects.'),
(2, 1, 0, 'Беспилотный авиационный комплекс видеомониторинга местности «бусел»', 'Unmanned aircraft systems video monitoring area "Busel"', 'busel', 0, 'Беспилотный летательный аппарат (2 шт.) мобильный или переносной наземный пункт управления (1 шт.) модуль приемо-передающей аппаратуры (2 к-та)', 'Unmanned aerial vehicles (2 pcs.), Mobile or a portable ground control station (1 pc.) Module receiving and transmitting equipment (2-ta)'),
(3, 1, 0, 'Беспилотный авиационный комплекс дальнего действия для мониторинга местности и объектов БУРЕВЕСТНИК', 'Unmanned aircraft systems for long-range monitoring of terrain and objects BUREVESTNIK', 'burevestnik', 0, 'Область применения: энергосбережение, предупреждение чрезвычайных ситуаций, контроль общественного порядка, охрана природы.', 'Scope: energy saving, prevention of emergency situations, control of public order, the protection of nature.'),
(4, 0, 1, 'Лазерная обработка материалов', 'Laser processing of materials', 'Laser-processing-of-materials', 0, 'Лазерное модифицирование рабочих  поверхностей сменных деталей рабочих органов сельскохозяйственных машин', 'Laser Surface Modification of replacement parts working bodies of agricultural machines'),
(5, 4, 1, 'Лазерное модифицирование рабочих  поверхностей ', 'Laser Surface Modification', 'laser-surface-modification', 0, 'Лазерное модифицирование рабочих  поверхностей сменных деталей рабочих органов сельскохозяйственных машин', 'Laser Surface Modification of replacement parts working bodies of agricultural machines'),
(6, 4, 1, 'Лазерная наплавка', 'Laser cladding', 'Laser-cladding', 0, 'Лазерная наплавка получила широкое распространение в промышленности,. Наиболее известные применения это восстановление повреждённых поверхностей различных деталей машин, прессформ и фильер. Второе применение это модификация поверхностности. Присадочные материалы могут отличаться по химическому составу от основы и иметь другие свойства.', 'Laser welding is widely used in the industry,. The best-known application is to restore damaged surfaces of various machine parts, molds and dies. The second application is the modification of surface. Filler materials may differ in chemical composition from the substrate and have other properties.'),
(7, 4, 1, 'Лазерная сварка отрезных алмазных сегментных кругов', 'Laser welding diamond cutting segment circles', 'Laser-welding-diamond-cutting-segment-circles', 0, 'Сварка производится на специальной\r\nоснастке, позволяющей сваривать наиболее\r\nраспространенные диаметры от 200 до 400 мм, с учетом\r\nтребований ГОСТ 16115-88', 'Welding is performed on an ad hoc\r\nsnap, allowing welding most\r\nCommon diameters of 200 to 400 mm including\r\nGOST 16115-88 requirements'),
(8, 0, 2, 'Микрокристаллические и аморфные материалы', 'Microсrystalline and amorphous materials', 'microcrystalline-and-amorphous-materials', 0, 'Микрокристаллические и аморфные материалы используются для обогрева электронных устройств, защита электронных устройств, находящихся в пластмассовых корпусах, от воздействия внешних электромагнитных полей ', 'Micro-crystalline and amorphous materials are used for heating the electronic devices to protect electronic devices in plastic housings against external electromagnetic fields'),
(9, 8, 2, 'Пленочные нагреватели на керамической пластине', 'Film heaters on ceramic plate', 'Film-heaters-on-ceramic-plate', 0, 'Пленочные нагреватели, представляющие собой подложки из оксинитридной керамики или алюминия с оксидным керамическим покрытием и нанесенными на них Ni-Cr –покрытием предназначены для обогрева электронных устройств ', 'Film heaters representing oxide substrate nitride ceramics or aluminum oxide ceramic coating deposited thereon and Ni-Cr -covering designed to heat electronic devices'),
(10, 8, 2, 'Экранирующие металлические и прозрачные в видимом диапазоне света покрытия для дисплеев и корпусов электронных объектов', 'Shielding metal and transparent in the visible light range coatings for displays and housings for electronic objects', 'Shielding-metal-and-transparent', 0, 'Защищает электронные устройства, находящиеся в пластмассовых корпусах, от воздействия внешних электромагнитных полей, способных внести необратимые изменения в их работу и память, а также от электромагнитных полей, излучаемых самими системами. ', 'It protects electronic devices in the plastic casing, against external electromagnetic fields capable of making permanent changes in their performance and memory, and also from electromagnetic fields emitted by the systems.'),
(11, 8, 2, 'Износостойкие многокомпонентные покрытия на основе карбидов, нитридов, карбонитридов, боридов, титана, циркония, хрома', 'Wear multicomponent coatings based on carbides, nitrides, carbo nitrides, borides of titanium, zirconium, chromium', 'Wear-multicomponent-coatings', 0, 'Увеличивает износостойкость дорогостоящих и ответственных деталей машин и инструмента', 'Increased durability and expensive critical parts of machines and tools'),
(12, 8, 2, 'Оптические покрытия и технологии их нанесения', 'Optical coatings technologies and their application', 'Optical-coatings-technologies-and-their-application', 0, 'Увеличивает пропускную способность оптических элементов и уменьшает их отражения для видимого света', 'Increases the capacity of the optical elements and reduces visible light reflection'),
(13, 8, 2, 'Жаростойкие покрытия на основе никеля, хрома, алюминия, иттрия и др.', 'Heat-resistant coating based on nickel, chromium, aluminum, yttrium, and others.', 'Heat-resistant-coating ', 0, 'Защищает детали машин, эксплуатируемых при высоких температурах', 'Protects machine parts operating at high temperatures'),
(14, 8, 2, 'Литейные катоды для вакуумно-дугового напыления', 'Foundry cathodes for vacuum-arc deposition', 'foundry-cathodes-for-vacuum-arc-deposition', 0, 'Катоды из сплавов на основе Ti-Al, Ti-Al-Si, Ti-Al-Cr, Ti-Al-Si-Nb, Zr-Ti-Cu, Ni-Cr-Al и др. предназначены для нанесения многофункциональных покрытий', 'Cathodes based alloy Ti-Al, Ti-Al-Si, Ti-Al-Cr, Ti-Al-Si-Nb, Zr-Ti-Cu, Ni-Cr-Al et al. suitable for the application of coatings multifunction'),
(15, 8, 2, 'Полуфабрикаты и деталей из лома высокочистых цветных металлов ', 'Semi-finished products and parts made of high-purity non-ferrous metals scrap', 'Semi-finished-products-and-parts', 0, 'Получение и восстановление полуфабрикатов и деталей из лома алюминия и его сплавов, никелевых сплавов, палладия, ванадия, чистой платины и серебра с использованием вакуумного литья, направленной кристаллизации и пластической деформации, изготовление и регенерация катодов-мишеней и анодов.', 'Obtaining and recovery of semifinished parts and scrap aluminum and its alloys, nickel alloys, palladium, vanadium, platinum and silver net using vacuum casting, directional solidification and plastic deformation, production and regeneration of target cathodes and anodes.'),
(16, 0, 38, 'ТЕХНОМАГ', 'TECHNOMAGES', 'technomages', 0, 'Научно-производственный центр занимается разработкой и исследованием свойств материалов, способных выдерживать ударные импульсные нагрузки, защитных композиций и  изготовлению наукоемких образцов изделий противо-ударной и противопульной защиты', 'Research and Production Center is engaged in the development and study of the properties of materials capable of withstanding the shock pulse load, the protective compositions and manufacturing high-end models of articles anti-shock and anti-bullet protection'),
(17, 16, 0, 'Противоударный бронежилет  серии «Коралл»', 'Shock body armor Series "Coral"', 'Shock-body-armor-Series-Coral', 0, 'Разработан в 2004 г. Поставляется для под-разделений Министерства внутренних дел. Вы-пущено 4 638 шт. \r\nПредназначен для защиты от ударов холод-ным оружием, палками, камнями и др. предме-тами с энергией 30…40 Дж\r\n', 'Developed in 2004, it delivered to units of the Ministry of Internal Affairs. You-started up 4638 pieces.\r\nDesigned for protection from the cold-shock-weapon, sticks, stones and others. Pieces with energy-ter ... 30 40 J'),
(18, 16, 0, 'Противопульный бронежилет серии «Алмаз»\r\n', 'bulletproof vest Series "Diamond"', 'bulletproof-vest-Series-Diamond', 0, 'Разработан в 1998 г. После модернизации в 2007 г. сертифицирован НП РНИИСЦ «Ржев-ка». Поставляется службам инкассации банков. Выпущено 3 491 шт.', 'Designed in 1998. After the modernization in 2007 certified NP RNIISTS "Rzhev-ka." Supplied collection service banks. Released 3491 pcs.'),
(19, 16, 0, 'Противопульный бронежилет серии «Рубин»', 'bulletproof vest series "Ruby"', 'bulletproof-vest-series-Ruby', 0, 'Разработан в 1997 г. модернизирован в 2007 и 2013 гг. Удобен и обладает хорошим дизай-ном, сертифицирован НП РНИИСЦ «Ржевка», Поставляется подразделениям МВД для личного состава патрульно-постовой службы (ППС) и Департамента охраны. Выпущено 10 677 шт', 'Designed in 1997, upgraded in 2007 and 2013. It is convenient and has a good sprinkler Mr. certified NP RNIISTS "Rzhevka" Comes the Interior Ministry for the personnel of the patrol service (PPS) and the Department of Conservation. Issued 10,677 items'),
(20, 16, 0, 'Противопульный бронежилет серии «Атравм»\r\n', 'Bulletproof vest series "Atravm"', 'Bulletproof-vest-series-Atravm', 0, 'Разработан в 2006 г., модернизирован в 2013 г. Сертифицирован НП РНИИСЦ «Ржев-ка». Изготавливается как общевойсковой для Министерства обороны. Выпущено 1 423 шт.', 'Designed in 2006 and renovated in 2013. Certified NP RNIISTS "Rzhev-ka." It is produced as a combined-arms for the Ministry of Defence. Released 1423 pcs.'),
(21, 16, 0, 'Противопульный щит серии «ТМГ»\r\n', 'Bulletproof shield series TMG', 'bulletproof-shield-series-TMG', 0, 'Разработан в 2006 г., модернизирован в 2014 г. Поставляются спецподразделениям си-ловых структур. Выпущено 144 шт.', 'Designed in 2006 and renovated in 2014 supplied special forces B mal structures. Issued 144 pcs.'),
(22, 16, 0, 'Коллективная бронезащита', 'Collective body armor', 'collective-body-armor', 0, 'Защитная бронепанель для штабных ма-шин постоянного объёма обеспечивает защиту от осколков и пуль за счёт встроенных броне-вых листов по 2 кл. ГОСТ Р 50744-95 изм. №2.\r\nЗащитная панель «Мягкая броня» для штабных машин с переменным объёмом «Ба-бочка» обеспечивает защиту от осколков и пуль за счёт навесных мягких бронепанелей специальной конструкции, которая защищена патентом, по Бр1 ГОСТ Р 50744-95 изм. №3.\r\nЗащитные панели разработаны в 2007 г. и установлены на опытной серии штабных ма-шин Министерства обороны Беларуси.\r\n', 'Protective armor panels for staff vehicles constant volume provides protection against fragments and bullets due to the built-in armor-O sheets for 2 cl. GOST 50744-95 rev. №2.\r\nCover panel "soft armor" for staff vehicles with variable volume "Ba-barrel" provides protection against fragments and bullets due to the soft armor panels mounted a special design, which is protected by patent, by BR1 GOST R 50744-95 rev. No. 3.\r\nProtective panel developed in 2007 and installed in a pilot-scale series ma-tire of the Defense Ministry of Belarus.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

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
(10, 2, 'Способ старта / посадки', 'The method of start / landing', 'С руки / парашют', 'From hand / parachute', 0),
(11, 5, 'Назначение:', 'Function:', 'Повышение ресурса работы быстроизнашивающихся деталей', 'Increased service life of wearing parts', 0),
(12, 5, 'Технические характеристики:', 'Specifications:', 'Твердость модифицированных слоев до 65–70 HRC', 'The hardness of the layers of the modified up to 65-70 HRC', 0),
(13, 5, 'Преимущества:', 'Benefits:', 'Упрочнение локальных участков; минимальные зоны термического влияния', 'Strengthening of local areas; minimal heat affected zone', 0),
(14, 5, 'Область применения:', 'Application area:', 'Ножи кормоуборочных, свеклоуборочных комбайнов, косилок и др. сельскохозяйственных машин', 'Knives fodder, beet harvesters, mowers, etc. Agricultural machinery', 0),
(15, 6, 'Назначение:', 'Appointment:', 'Восстановление и упрочнение деталей машин и механизмов', 'Restoration and hardening of details of machines and mechanisms', 0),
(16, 6, 'Технические характеристики:', 'Specifications:', 'Наплавляемые материалы на железной, никелевой, кобальтовой и др. основах\r\nТолщина наплавляемых слоев ……………………………….. до 1,5–2 мм\r\n', 'Facing materials on iron, nickel, cobalt and others. Fundamentals\r\nThe thickness of the deposited layers of  1.5-2 mm', 0),
(17, 6, 'Преимущества', 'Benefits:', 'Минимальная зона термического влияния, снижение остаточных деформаций', 'The minimal heat-affected zone, reducing the residual strain', 0),
(18, 6, 'Область применения', 'Application area:', 'Машиностроение, энерго- и авиастроение, ремонтное производство', 'Mechanical engineering, energy and aeronautics, production, repair', 0),
(19, 7, 'Назначение:', 'Purpose:', 'Изготовление сборочных единиц и инструмента с высоким качеством сварных соединений', 'Production of assembly units and tools with high quality of welded joints', 0),
(20, 7, 'Технические характеристики:', 'Specifications:', 'Толщина свариваемых стальных листов до 4 мм', 'Thickness of welded steel plates up to 4 mm', 0),
(21, 7, 'Преимущества:', 'Advantages:', 'Прочность швов близка к прочности основного материалаМинимальное коробление сварных узлов и конструкцийВозможность надежного соединения трудносвариваемых традиционными методами материаловПростота организации защиты места сварки от вредноговоздействия на металл окружающего воздуха.', 'Durability joints close to the strength of the base material\r\nMinimal distortion of welded components and structures\r\nPossibility reliable connection of difficult materials by conventional methods\r\nEasy organization of protection of the weld metal vrednogovozdeystviya ambient ', 0),
(22, 7, 'Область применения:', 'Application area:', 'Машиностроение, ремонтное производство', 'Engineering, production, repair', 0),
(23, 9, 'Назначение:', 'Appointment:', 'Пленочные нагреватели, представляющие собой подложки из оксинитридной керамики или алюминия с оксидным керамическим покрытием и нанесенными на них Ni-Cr –покрытием предназначены для обогрева электронных устройств ', 'See heaters representing oxide substrate nitride ceramics or aluminum oxide ceramic coating deposited thereon and Ni-Cr -covering designed to heat electronic devices', 0),
(24, 9, 'Технические характеристики:', 'Specifications:', 'удельная мощность – 10 Вт/см2\r\nмаксимальная температура нагрева – 250 °С\r\nкоэффициент теплопроводности керамических пластин – до 150 Вт/(м•К).\r\n', 'specific power - 10 W / cm2\r\nmaximum heating temperature - 250 ° C\r\nthe thermal conductivity of the ceramic plates - up to 150 W / (m • K).', 0),
(25, 9, 'Область применения', 'Application area:', 'системы авионики (дисплейные матрицы, приборы видеонаблюдения и т.д.)', 'avionics system (display matrix, video equipment, etc.)', 0),
(26, 9, 'Преимущества:', 'Advantages:', 'термический коэффициент сопротивления нагревателей практически равен 0\r\nнагреватели имеют стабильные эксплуатационные параметры, позволяющие им эффективно обогревать изделия электроники в условиях от – 60 до +250°С.\r\n', 'Thermal coefficient of resistance heaters is almost equal to 0\r\nHeaters have stable performance parameters, allowing them to effectively heat the electronics products in the conditions of - 60 to + 250 ° C.', 0),
(27, 10, 'Назначение:', 'Appointment:', 'Защита электронных устройств, находящихся в пластмассовых корпусах, от воздействия внешних электромагнитных полей, способных внести необратимые изменения в их работу и память, а также от электромагнитных полей, излучаемых самими системами. ', 'Protection of electronic devices in plastic housings against external electromagnetic fields capable of making permanent changes in their performance and memory, and also from electromagnetic fields emitted by the systems.', 0),
(28, 10, 'Технические характеристики:', 'Specifications:', 'Поверхностное сопротивление не более 0,1 Ом/квадрат;относительная магнитная проницаемость не менее 15 000;эффективность экранирования для дисплеев 25 дБ, для корпусов электронных объектов порядка 50 дБ;пропускание видимого света прозрачным электромагнитным экраном не менее 50 %', 'Surface resistance of no greater than 0.1 ohms / square;the relative magnetic permeability of not less than 15 000;the effectiveness of screening for displays 25 dB for housing electronic objects about 50 dB;transmittance of visible light transparent electromagnetic shield at least 50%', 0),
(29, 10, 'Область применения', 'Application area:', 'Защита информации, хранящейся в компьютере, от несанкционированного доступа;– совместимость работы различных электронных устройств, задействованных в единую систему.', '- Protection of information stored on the computer from unauthorized access;\r\n- The compatibility of the various electronic devices involved in a single system.', 0),
(30, 11, 'Назначение:', 'Appointment:', 'Увеличение износостойкости дорогостоящих и ответственных деталей машин и инструмента', 'Increased durability and expensive critical parts of machines and tools', 0),
(31, 11, 'Технические характеристики:', 'Specifications:', 'Микротвердость покрытия до 55 ГПакоэффициент трения 0,2-0,4', 'microhardness of the coating up to 55 GPa\r\nthe coefficient of friction of 0.2-0.4', 0),
(32, 11, 'Область применения', 'Application area:', 'Режущий инструмент, детали машин ', 'cutting tools, machine parts', 0),
(33, 11, 'Преимущества:', 'Advantages:', 'Снижение трения, термобарьерный эффект, сопротивление абразивному, диффузионному и окислительному износу', 'friction reduction, thermal barrier effect, resistance to abrasion, diffusion and oxidative wear', 0),
(34, 12, 'Назначение:', 'Appointment:', 'Увеличение пропускной способности оптических элементов и уменьшение их отражения для видимого света', 'Increasing the capacity of optical elements and a decrease in their reflectance for visible light', 0),
(35, 12, 'Технические характеристики:', 'Specifications:', 'Отражение R ~ 0,5–1 %\r\nПропускание Т ~ 98-99 %\r\n', 'Reflection R ~ 0,5-1%\r\nTransmission T ~ 98-99%', 0),
(36, 12, 'Область применения', 'Application area:', 'Военная, космическая  техника, станкостроение, медицинская техника', 'Military, space technology, machine tools, medical equipment', 0),
(37, 13, 'Назначение:', 'Appointment:', 'Защита деталей машин, эксплуатируемых при высоких температурах', 'Protection of machine parts operating at high temperatures', 0),
(38, 13, 'Технические характеристики:', 'Specifications:', 'Температура эксплуатации покрытий 850–950 °С;высокая стойкость к сульфидной коррозии;повышение эрозионной стойкости', 'Operating temperature coatings 850-950 ° C;\r\nhigh resistance to sulphate corrosion;\r\nimproving erosion resistance', 0),
(39, 13, 'Область применения', 'Application area:', 'Авиастроение, судостроение, теплоэнергетика', 'Aerospace, shipbuilding, power system', 0),
(40, 14, 'Назначение:', 'Appointment:', 'Катоды из сплавов на основе Ti-Al, Ti-Al-Si, Ti-Al-Cr, Ti-Al-Si-Nb, Zr-Ti-Cu, Ni-Cr-Al и др. предназначены для нанесения многофункциональных покрытий', 'Cathodes based alloy Ti-Al, Ti-Al-Si, Ti-Al-Cr, Ti-Al-Si-Nb, Zr-Ti-Cu, Ni-Cr-Al et al. suitable for the application of coatings multifunction', 0),
(41, 14, 'Технические характеристики:', 'Specifications:', 'Твердостью покрытия, полученного с применением катода до 55 ГПа', 'The hardness of the coating produced using the cathode up to 55 GPa', 0),
(42, 14, 'Область применения', 'Application area:', 'Машиностроение', 'mechanical engineering', 0),
(43, 14, 'Преимущество', 'Advantages', 'Катоды, полученные литейным способом в отличие от катодов, полученных другими способами обладают более качественными получаемыми покрытиями покрытия, полученные с использованием катодов, позволяют в 2–5 раз повысить стойкость режущего и штампового инструмента, проводить высокоскоростную обработку металла без СОЖ, повысить эрозионную стойкость и усталостную прочность деталей машин.', 'Cathodes prepared casting method as opposed to the cathodes obtained in other ways have improved coatings obtained\r\ncoatings obtained with cathodes allow a 2-5 times increase the durability of cutting and stamping tools, to conduct high-speed processing of metal without coolant enhance erosion resistance and fatigue strength of machine parts.', 0),
(44, 15, 'Назначение:', 'Appointment:', 'получение и восстановление полуфабрикатов и деталей из лома алюминия и его сплавов, никелевых сплавов, палладия, ванадия, чистой платины и серебра с использованием вакуумного литья, направленной кристаллизации и пластической деформации, изготовление и регенерация катодов-мишеней и анодов ', 'Obtaining and recovery of semifinished parts and scrap aluminum and its alloys, nickel alloys, palladium, vanadium, platinum and silver net using vacuum casting, directional solidification and plastic deformation, production and regeneration of target cathodes and anodes', 0),
(45, 15, 'Технические характеристики:', 'Specifications:', 'плотность заготовок 99,9 %\r\nчистота металла не ниже исходного\r\n', 'the density of the blanks 99.9%\r\npurity metal is not lower than the original', 0),
(46, 15, 'Область применения', 'Application area:', 'Cерийное производство предприятий микроэлектронной промышленности.', 'Mass production of electronic industry enterprises.', 0),
(47, 15, 'Преимущество', 'Advantages', 'Импортозамещение\r\nэкономия дорогостоящих металлов за счет утилизации отходов и многократного оборота металлов.\r\n', 'Import substitution\r\nsaving expensive metals by waste and multiple turnover metals.', 0),
(48, 17, 'Название', 'Name', 'Противоударный бронежилет \r\nсерии «Коралл»\r\n', 'Shock body armor Series "Coral"', 0),
(49, 17, 'Описание', 'Description', 'Разработан в 2004 г. Поставляется для под-разделений Министерства внутренних дел. Вы-пущено 4 638 шт. \r\nПредназначен для защиты от ударов холод-ным оружием, палками, камнями и др. предме-тами с энергией 30…40 Дж.\r\nЗащитная композиция обладает важной ха-рактеристикой - не прокалывается оружием с узким лезвием типа заточки, шила и др., что не-доступно для обычных тканевых бронепанелей. \r\nБронежилет имеет небольшую массу (1,9-2,4 кг), обладает хорошим дизайном и резервными возможностями на создание модификаций. \r\n', 'Developed in 2004, it delivered to units of the Ministry of Internal Affairs. You-started up 4638 pieces.\r\nDesigned for protection from the cold-shock-weapon, sticks, stones and others. Pieces with energy-ter ... 30 40 J.\r\nProtective composition has an important ha tics - no weapon pierced with a narrow blade-type sharpening awls et al., Which is not available for normal-tissue armor plates.\r\nThe vest has a small weight (1.9-2.4 kg), has a good design and backup capabilities to create modifications.', 0),
(50, 18, 'Название', 'Name', 'Противопульный бронежилет серии «Алмаз»\r\n', 'Bulletproof vest series "Diamond"', 0),
(51, 18, 'Описание', 'Description', 'Разработан в 1998 г. После модернизации в 2007 г. сертифицирован НП РНИИСЦ «Ржевка». Поставляется службам инкассации банков. Выпущено 3 491 шт.Предназначен для защиты от пуль револьверов и пистолетов, в т.ч. пуль со стальным сер-дечником пистолетов ТТ и ПСМ.Разработанная для бронежилета защитная композиция включает бронеслой ТМГ-1 (противопульный и антитравматический пакеты) Бр1 класса и мягкую бронепанель усиления Бр2 класса. Бронеслой ТМГ-1 используется в каче-стве общей защиты в бронежилетах других серий. ', 'Designed in 1998. After the modernization in 2007 certified NP RNIISTS "Rzhevka." Supplied collection service banks. Released 3491 pcs.Designed to protect against bullets revolveditch and pistols, including bullets with steel-gray dechnikom pistols TT and PSM.Designed for composition comprises a protective vest bronesloy TMG-1 (antivopulny and antitravmatichesky packages) BR1 class and the soft armor panels enhance Sp2 class. Bronesloy TMG-1 is used in the quality-stve general protection in flak jackets other series.', 0),
(52, 19, 'Название', 'Name', 'Противопульный бронежилет серии «Рубин»\r\n', 'Bulletproof vest series "Ruby"', 0),
(53, 19, 'Описание', 'Description', 'Разработан в 1997 г. модернизирован в 2007 и 2013 гг. Удобен и обладает хорошим дизай-ном, сертифицирован НП РНИИСЦ «Ржевка», Поставляется подразделениям МВД для личного состава патрульно-постовой службы (ППС) и Департамента охраны. Выпущено 10 677 шт.\r\nПредназначен для защиты от пуль револьве-ров, пистолетов и охотничьих ружей 12 калиб-ра.\r\nЗащитная композиция включает общую за-щиту (бронеслой ТМГ-1) Бр1 класса и бронепа-нели усиления броневой стали С1 класса ГОСТ Р 50744-95. Конструкция бронежилета позволя-ет усиление защиты до Бр4 класса заменой одно- типными бронепанелями броневой стали.\r\n', 'Designed in 1997, upgraded in 2007 and 2013. It is convenient and has a good sprinkler Mr. certified NP RNIISTS "Rzhevka" Comes the Interior Ministry for the personnel of the patrol service (PPS) and the Department of Conservation. Issued 10,677 units.\r\nDesigned to protect against bullets revolve-ditch, pistols and hunting rifles of caliber 12-ra.\r\nProtective composition comprises a total by-shield (bronesloy TMG-1) BR1 class and bronepa-panel gain armor steel C1 class GOST 50744-95. The design of the vest, allowing an enhanced protection class up Br4 replacing a single type of armor steel armor plates.', 0),
(54, 20, 'Название', 'Name', 'Противопульный бронежилет серии «Атравм»\r\n', 'Bulletproof vest series "Atravm"', 0),
(55, 20, 'Описание', 'Description', 'Разработан в 2006 г., модернизирован в 2013 г. Сертифицирован НП РНИИСЦ «Ржев-ка». Изготавливается как общевойсковой для Министерства обороны. Выпущено 1 423 шт.\r\nПредназначен для защиты от пуль стрел-кового оружия (, пистолетов, автоматов Ка-лашникова, винтовки Драгунова и др.).\r\nЗащитная композиция включает общую защиту (бронеслой ТМГ-1) Бр1 класса и бро-непанели усиления из броневой стали Бр4 класса. Конструкция предусматривает допол-нительный карман для усиления защиты кера-мическими бронепанелями Бр5, внутренний пояс, вшивной воротник, фартук и боковые карманы для дополнительных бронепанелей. \r\n', 'Designed in 2006 and renovated in 2013. Certified NP RNIISTS "Rzhev-ka." It is produced as a combined-arms for the Ministry of Defence. Released 1423 pcs.\r\nDesigned to protect against bullets, arrows kovogo weapons (pistols, submachine Ka-lashnikova, Dragunov rifles, and others.).\r\nProtective composition comprises a general protection (bronesloy TMG-1) BR1 class and bro-nepaneli gain from armor steel Br4 class. The design included additional pocket for strengthening the protection of Kerala nomic Br5 armor plates, the inner belt, sewn collar, apron and side pockets for optional armor plates.', 0),
(56, 21, 'Название', 'Name', 'Противопульный щит серии «ТМГ»\r\n', 'Bulletproof shield series "TMG"', 0),
(57, 21, 'Описание', 'Description', 'Разработан в 2006 г., модернизирован в 2014 г. Поставляются спецподразделениям си-ловых структур. Выпущено 144 шт.\r\nПредназначен для защиты от пуль стрел-кового оружия (пистолетов, автоматов Калаш-никова, снайперской винтовки Драгунова).\r\n Щит имеет стальной экран общей площа-дью 55 дм2 со смотровым окном, откидной фартук с дополнительным бронеэлементом 8 дм2, яркую цель-обманку или фонарь. Общая масса щита 30 кг. Щит может изготавливаться Бр2, Бр3, Бр4 классов ГОСТ Р 50744-95 изм. №3 и модификации «Щиток».\r\nЩит комплектуется транспортной систе-мой ТС-5 и щитовым фонарём (по заказу).\r\n', 'Designed in 2006 and renovated in 2014 supplied special forces B mal structures. Issued 144 pcs.\r\nDesigned to protect against bullets, arrows kovogo weapons (pistols, submachine Kalash-nikov, Dragunov sniper rifle).\r\n Shield has a steel screen-Dew total surface area of ​​55 dm 2 with window, hinged apron with additional armor elements 8 dm 2, a bright goal-hornblende or lantern. The total weight of the shield 30 kg. The shield may be made Sp2, Br3, Br4 class GOST 50744-95 rev. №3 and modifications "Shield."\r\nShield set of transport systems TC-5 is my shield and torch (optional).', 0),
(58, 22, 'Название', 'Name', 'Коллективная бронезащита ', 'Collective body armor', 0),
(59, 22, 'Описание', 'Description', 'Защитная бронепанель для штабных ма-шин постоянного объёма обеспечивает защиту от осколков и пуль за счёт встроенных броне-вых листов по 2 кл. ГОСТ Р 50744-95 изм. №2.\r\nЗащитная панель «Мягкая броня» для штабных машин с переменным объёмом «Ба-бочка» обеспечивает защиту от осколков и пуль за счёт навесных мягких бронепанелей специальной конструкции, которая защищена патентом, по Бр1 ГОСТ Р 50744-95 изм. №3.\r\nЗащитные панели разработаны в 2007 г. и установлены на опытной серии штабных ма-шин Министерства обороны Беларуси.\r\n', 'Protective armor panels for staff vehicles constant volume provides protection against fragments and bullets due to the built-in armor-O sheets for 2 cl. GOST 50744-95 rev. №2.\r\nCover panel "soft armor" for staff vehicles with variable volume "Ba-barrel" provides protection against fragments and bullets due to the soft armor panels mounted a special design, which is protected by patent, by BR1 GOST R 50744-95 rev. No. 3.\r\nProtective panel developed in 2007 and installed in a pilot-scale series ma-tire of the Defense Ministry of Belarus.', 0);

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
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_field`
--
ALTER TABLE `product_field`
MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
