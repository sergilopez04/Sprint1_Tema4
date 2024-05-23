<?php
// Añadimos las clases Shape, Rectangle y Triangle
require 'Shape.php';
require 'Rectangle.php';
require 'Triangle.php';

// Esta es la clase principal, donde empezamos todo
class Main {
    public function run() {
        $rectangle = new Rectangle(57.8, 34.3);
        $triangle = new Triangle(23.5, 47.8);

        echo $rectangle->calculateArea() . PHP_EOL;
        echo $triangle->calculateArea() . PHP_EOL;
    }
}

// Creamos una instancia de la clase Main
$main = new Main();
// Llamamos al método run
$main->run();
?>
