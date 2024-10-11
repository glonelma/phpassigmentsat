<?php
interface Shape {
    public function draw(); 
}

class Circle implements Shape {
    public function draw() {
        return "Drawing a Circle";
    }
}

class Square implements Shape {
    public function draw() {
        return "Drawing a Square";
    }
}
?>
