<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';

$bike = new Bicycle('blue', 1);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo '<br>';

$car = new Car ('yellow', 4, 'eletric');

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';
echo '<br>';

$truck = new Truck('red', 2, 10, 'fuel');

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->isFull();
echo '<br>';
echo $truck->setStorageLevel(10);
echo $truck->isFull();
echo '<br>';
