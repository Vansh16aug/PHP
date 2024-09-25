<?php
// Define a class named Car
class Car {
    // Property (attribute) of the class
    public $color;

    // Method (function) of the class
    public function setColor($color) {
        $this->color = $color; // $this refers to the current object
    }

    // Another method to get the color
    public function getColor() {
        return $this->color;
    }
}

// Create an object (instance) of the class Car
$myCar = new Car();

// Set the color of the car
$myCar->setColor("Red");

// Get and display the color of the car
echo "The color of the car is: " . $myCar->getColor();
?>
