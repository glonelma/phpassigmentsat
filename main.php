<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include all the class files
include 'AbstractClass.php';
include 'Interface.php';
include 'Trait.php';
include 'Static.php';
include 'Namespaces.php';

// Output Header
// echo "<!DOCTYPE html>
// <html lang='en'>
// <head>
//     <meta charset='UTF-8'>
//     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
//     <title>OOP Concepts in PHP</title>
//     <style>
//         body {
//             font-family: Arial, sans-serif;
//             background-color: #f4f4f4;
//             color: #333;
//             margin: 20px;
//             padding: 20px;
//             border-radius: 8px;
//             box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
//         }
//         h1 {
//             color: #2c3e50;
//         }
//         h2 {
//             color: #2980b9;
//             border-bottom: 2px solid #2980b9;
//             padding-bottom: 5px;
//         }
//         hr {
//             margin: 20px 0;
//             border: 0;
//             border-top: 1px solid #ccc;
//         }
//         strong {
//             color: #c0392b;
//         }
//         em {
//             color: #27ae60;
//         }
//     </style>
// </head>
// <body>";

// echo "<h1>Object-Oriented Programming Concepts in PHP</h1>";
// echo "<hr>";

// Testing Abstract Classes
echo "<h2>Abstract Classes</h2>";
$dog = new Dog("Buddy");
echo "<strong>{$dog->getName()}</strong> says: <em>{$dog->sound()}</em><br>";

$cat = new Cat("Whiskers");
echo "<strong>{$cat->getName()}</strong> says: <em>{$cat->sound()}</em><br>";

echo "<hr>";

// Testing Interfaces
echo "<h2>Interfaces</h2>";
$shapes = [new Circle(), new Square()];
foreach ($shapes as $shape) {
    echo "<em>{$shape->draw()}</em><br>";
}

echo "<hr>";

// Testing Traits
echo "<h2>Traits</h2>";
$user = new User();
$user->create("Alice");

$product = new Product();
$product->add("Book");

echo "<hr>";

// Testing Static Properties and Methods
echo "<h2>Static Properties and Methods</h2>";
echo "Value of Pi: <strong>" . MathUtility::$pi . "</strong><br>";
echo "Area of Circle with radius 5: <strong>" . MathUtility::areaOfCircle(5) . "</strong><br>";

echo "<hr>";

// Testing Namespaces
echo "<h2>Namespaces</h2>";
$circle1 = new \Shapes\Circle();
echo "<em>{$circle1->draw()}</em><br>";

$circle2 = new \Colors\Circle();
echo "<em>{$circle2->draw()}</em><br>";

echo "</body>
</html>";
?>
