<?php

namespace en2portr3s\admin\library;

class Inflector {

    public static function camelCase($value) {
        $segments = explode('-', $value);
        array_walk($segments, function (&$item) {
            $item = ucfirst(strtolower($item));
        });
        return implode('', $segments);
    }

}
