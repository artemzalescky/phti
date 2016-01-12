<?php

namespace ph\utils;

use ph\exception\PhException;

/*  format :
    d	День месяца, 2 цифры с ведущим нулём	от 01 до 31
    D	Текстовое представление дня недели, 3 символа	от Mon до Sun
    j	День месяца без ведущего нуля	от 1 до 31
    l (строчная 'L')	Полное наименование дня недели	от Sunday до Saturday
    N	Порядковый номер дня недели в соответствии со стандартом ISO-8601 (добавлен в версии PHP 5.1.0)	от 1 (понедельник) до 7 (воскресенье)
    S	Английский суффикс порядкового числительного дня месяца, 2 символа	st, nd, rd или th. Применяется совместно с j
    w	Порядковый номер дня недели	от 0 (воскресенье) до 6 (суббота)
    z	Порядковый номер дня в году (начиная с 0) От 0 до 365
    Неделя	---	---
    W	Порядковый номер недели года в соответствии со стандартом ISO-8601; недели начинаются с понедельника (добавлено в версии PHP 4.1.0)	Например: 42 (42-я неделя года)
    Месяц	---	---
    F	Полное наименование месяца, например January или March	от January до December
    m	Порядковый номер месяца с ведущим нулём	от 01 до 12
    M	Сокращенное наименование месяца, 3 символа	от Jan до Dec
    n	Порядковый номер месяца без ведущего нуля	от 1 до 12
    t	Количество дней в указанном месяце	от 28 до 31
    Год	---	---
    L	Признак високосного года	1, если год високосный, иначе 0.
    o	Номер года в соответствии со стандартом ISO-8601. Имеет то же значение, что и Y, кроме случая, когда номер недели ISO (W) принадлежит предыдущему или следующему году; тогда будет использован год этой недели. (добавлен в версии PHP 5.1.0)	Примеры: 1999 или 2003
    Y	Порядковый номер года, 4 цифры	Примеры: 1999, 2003
    y	Номер года, 2 цифры	Примеры: 99, 03
    Время	---	---
    a	Ante meridiem (англ. "до полудня") или Post meridiem (англ. "после полудня") в нижнем регистре	am или pm
    A	Ante meridiem или Post meridiem в верхнем регистре	AM или PM
    B	Время в формате Интернет-времени (альтернативной системы отсчета времени суток)	от 000 до 999
    g	Часы в 12-часовом формате без ведущего нуля	от 1 до 12
    G	Часы в 24-часовом формате без ведущего нуля	от 0 до 23
    h	Часы в 12-часовом формате с ведущим нулём	от 01 до 12
    H	Часы в 24-часовом формате с ведущим нулём	от 00 до 23
    i	Минуты с ведущим нулём	от 00 до 59
    s	Секунды с ведущим нулём	от 00 до 59
    u	Микросекунды (добавлено в версии PHP 5.2.2). Учтите, что date() всегда будет возвращать 000000, т.к. она принимает целочисленный (integer) параметр, тогда как DateTime::format() поддерживает микросекунды.	Например: 654321
    Временная зона	---	---
    e	Код шкалы временной зоны(добавлен в версии PHP 5.1.0)	Примеры: UTC, GMT, Atlantic/Azores
    I (заглавная i)	Признак летнего времени	1, если дата соответствует летнему времени, 0 в противном случае.
    O	Разница с временем по Гринвичу, в часах	Например: +0200
    P	Разница с временем по Гринвичу с двоеточием между часами и минутами (добавлено в версии PHP 5.1.3)	Например: +02:00
    T	Аббревиатура временной зоны	Примеры: EST, MDT ...
    Z	Смещение временной зоны в секундах. Для временных зон, расположенных западнее UTC возвращаются отрицательные числа, а расположенных восточнее UTC - положительные.	от -43200 до 50400
    Полная дата/время	---	---
    c	Дата в формате стандарта ISO 8601 (добавлено в PHP 5)	2004-02-12T15:19:21+00:00
    r	Дата в формате » RFC 2822	Например: Thu, 21 Dec 2000 16:01:07 +0200
    U	Количество секунд, прошедших с начала Эпохи Unix (The Unix Epoch, 1 января 1970 00:00:00 GMT)	Смотрите также time()
 */

class TimeUtil {

    private function __construct() { }

    public static function getTime() {
        return time();
    }

    public static function getTimeAfter($intervalCount = 0) {
        return new AfterTime($intervalCount);
    }

    public static function getTimeMs() {
        return round(microtime(true) * 1000);
    }

    public static function toTimestamp($dateString, $format = 'Y.m.d H:i s') {
        $dateTime = date_create_from_format($format, $dateString);
        if ($dateTime === false) {
            throw new PhException("Invalid time format '" . $format . "' for date '" . $dateString . "'");
        }
        return date_create_from_format($format, $dateString)->getTimestamp();
    }

    public static function toString($timestamp, $format = 'Y.m.d H:i s') {
        return date($format, $timestamp);
    }
}

class AfterTime {
    private $intervalCount;

    public function __construct($count) {
        $this->intervalCount = $count;
    }

    public function second() {
        return $this->plusTime('second');
    }

    public function seconds() {
        return $this->second();
    }

    public function minute() {
        return $this->plusTime('minute');
    }

    public function minutes() {
        return $this->minute();
    }

    public function hour() {
        return $this->plusTime('hour');
    }

    public function hours() {
        return $this->hour();
    }

    public function day() {
        return $this->plusTime('day');
    }

    public function days() {
        return $this->day();
    }

    public function month() {
        return $this->plusTime('month');
    }

    public function months() {
        return $this->month();
    }

    public function year() {
        return $this->plusTime('year');
    }

    public function years() {
        return $this->year();
    }

    private function plusTime($intervalName) {
        return strtotime('+' . $this->intervalCount . ' ' . $intervalName);
    }
}
