<?php
class MathUtility {
    public static $pi = 3.14;

    public static function areaOfCircle($radius) {
        return self::$pi * $radius * $radius;
    }
}
?>

