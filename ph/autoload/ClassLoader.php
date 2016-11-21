<?php

namespace ph\autoload;

class ClassLoader {

    public static function loadFromNamespace($className) {
        try {
            include_once(self::getClassPathFromClassName($className));
        } catch (\ErrorException $ignored) { }
    }

    public static function getClassPathFromClassName($className) {
        return BASE_PATH . str_replace('\\', '/', '/' . $className . '.php');
    }
}
