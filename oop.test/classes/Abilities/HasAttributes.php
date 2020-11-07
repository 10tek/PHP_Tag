<?php


namespace ItStep\PHP\Abilities;


use ItStep\PHP\Tag\Attributes;

trait HasAttributes
{
    /** @var Attributes */
    protected $attributes;

    protected function bootHasAttributes() {
        $this->attributes = new Attributes();
    }

    function attributes():Attributes{
        return $this->attributes;
    }

    function setAttr(string $key, $value){
        $this->attributes()->set($key, $value);
        return $this;
    }

    function prependAttr(string $key, $value){
        $this->attributes()->prepend($key, $value);
        return $this;
    }

    function addClass($class){

    }

    function appendAttr(string $key, $value){
        $this->attributes()->append($key, $value);
        return $this;
    }
    function __call(string $name, array $arguments){
        return $this->setAttr($name, ... $arguments);
    }



    function __set($name, $value){
        $this->setAttr($name, $value);
    }

}