<?php


namespace ItStep\PHP\Tag;


class Classes {
    protected $classes;

    public function __construct() {
        $this->clear();
    }

    function clear() {
        return $this->setArray([]);
    }

    function setArray(array $classes) {
        $this->classes = $classes;
        return $this;
    }

    function prepend(string $key, $value) {
        $old = $this->get($key);
        $value = $value . $old;
        return $this->set($key, $value);
    }

    function get(string $key) {
        return $this->toArray()[$key] ?? null;
    }

    function toArray() {
        return array_filter($this->classes, function ($classes)
        {
            return !is_null($classes);
        });
    }

    function set(string $key, $value) {
        $old = $this->toArray();
        $key = strtolower($key);
        $key = trim($key);
        $old[$key] = $value;
        return $this->setArray($old);
    }

    function append(string $key, $value) {
        $old = $this->get($key);
        $value = $old . $value;
        return $this->set($key, $value);
    }

    function __toString() {
        $classes = 'class="';
        foreach ($this->toArray() as $key => $value) {
            $classes .= "{$key}=\"{$value}\"";
        }
        return $classes;
    }
}
