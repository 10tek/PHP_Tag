<?php


namespace ItStep\PHP;


class Doctype {
    static function get($type){
        return "<!DOCTYPE {$type}>";
    }
}