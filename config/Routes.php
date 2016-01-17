<?php

namespace config;

use ph\routing\filters\Filter;
use ph\routing\RouteData;

// custom routing (add verification to situations where url must be handled in special way)
// if not set - standard routing: /controller/action/param1/param2/../paramN

class Routes extends Filter {

    public function filter($route) {
        $tokenArr = self::getTokenArr($route);

        if (count($tokenArr) > 0 && $tokenArr[0] == 'department') {
            $controllerName = 'department';
            $actionName = 'show';
            $pathParams = [$this->fillPathParamArr($tokenArr, 1)];
            return new RouteData($controllerName, $actionName, $pathParams);
        }
        if (count($tokenArr) == 1 && $tokenArr[0] == 'laboratory') {
            $controllerName = 'laboratory';
            $actionName = 'index';
            return new RouteData($controllerName, $actionName, null);
        }
        if (count($tokenArr) == 2 && $tokenArr[0] == 'laboratory') {
            $controllerName = 'laboratory';
            $actionName = 'show';
            $pathParams = [$tokenArr[1]];
            return new RouteData($controllerName, $actionName, $pathParams);
        }

        if (count($tokenArr) == 1 && $tokenArr[0] == 'product') {
            $controllerName = 'product';
            $actionName = 'index';
            $pathParams = [$this->fillPathParamArr($tokenArr, 1)];
            return new RouteData($controllerName, $actionName, $pathParams);
        }

        if (count($tokenArr) == 2 && $tokenArr[0] == 'product') {
            $controllerName = 'product';
            $actionName = 'show';
            $pathParams = [$tokenArr[1]];
            return new RouteData($controllerName, $actionName, $pathParams);
        }

        return null;
    }
}
