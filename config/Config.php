<?php

namespace config;

class Config {

    private static $properties;

    //  ------------- applying configuration ----------------
    public static function load($environment) {
        self::readConfigFile($environment);
        self::applyConfiguration();
    }

    //  ------------- path ----------------

    public static function getBasePath() {
        return self::get('app.basePath', '/');
    }

    //  ------------- db ----------------

    public static function useDatabase() {
        return !empty(self::$properties['db.host']);
    }

    public static function getDatabaseDialect() {
        return self::get('db.dialect', 'mysql');
    }

    public static function getDatabaseHost() {
        return self::get('db.host', '127.0.0.1');
    }

    public static function getDatabasePort() {
        return self::get('db.port', '3306');
    }

    public static function getDatabaseUser() {
        return self::get('db.user');
    }

    public static function getDatabasePassword() {
        return self::get('db.password');
    }

    public static function getDatabaseName() {
        return self::get('db.name');
    }

    public static function getDatabaseCharset() {
        return self::get('db.charset', 'utf8');
    }

    // ------------- session ----------------

    public static function useSession() {
        return self::get('session.use', false);
    }

    // ------------- locale ----------------

    public static function useLocale() {
        return self::get('locale.use', false);
    }

    public static function getDefaultLang() {
        return self::get('locale.defaultLang', 'ru');
    }

    public static function getErrorLoggingLevel() {
        return E_ALL & ~E_NOTICE;
    }

    public static function isErrorRender() {
        return self::get('error.render', false);
    }

    public static function isErrorFileLogging() {
        return self::get('error.fileLogging', false);
    }

    private static function readConfigFile($environment) {
        self::$properties = parse_ini_file("environments/$environment.ini", false, INI_SCANNER_RAW);
        array_walk(self::$properties, function (&$v, $k) {
            $v === 'On' && $v = true;
            $v === 'Off' && $v = false;
        });
    }

    private static function applyConfiguration() {
        date_default_timezone_set('Europe/Minsk');
    }

    private static function get($name, $defaultValue = null) {
        return isset(self::$properties[$name]) ? self::$properties[$name] : $defaultValue;
    }
}
