<?php

namespace en2portr3s\registrados\library;

class Inflector {

    public static function camelCase($value) {
        $segments = explode('-', $value);
        array_walk($segments, function (&$item) {
            $item = ucfirst(strtolower($item));
        });
        $segments[0] = strtolower($segments[0]);
        return implode('', $segments);
    }

    public static function studlyCaps($value) {
        $segments = explode('-', $value);
        array_walk($segments, function (&$item) {
            $item = ucfirst(strtolower($item));
        });
        return implode('', $segments);
    }

}
