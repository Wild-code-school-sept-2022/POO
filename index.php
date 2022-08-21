<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$bike->nbSeats = 1;
$bike->nbWheels = 2;

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';
echo '<br>';

$car = new Car ('yellow', 4, 'gazoil');

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

