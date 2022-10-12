<?php

class Fruit {

    private $name, $color, $size;

    public function __construct($name, $color, $size) {
        $this->setName($name);
        $this->setColor($color);
        $this->setSize($size);
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSize() {
        return $this->size;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setSize($size) {
        $this->size = $size;
    }

}
