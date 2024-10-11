<?php
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function sound(); 
}

class Dog extends Animal {
    public function sound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Meow!";
    }
}
?>
