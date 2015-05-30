<?php

namespace en2portr3s\library;

class Inflector {

    public static function camel($value) {
        $segments = explode('-', $value);
        array_walk($segments, function (&$item) {
            $item = ucfirst(strtolower($item));
        });
        return implode('', $segments);
    }

}
