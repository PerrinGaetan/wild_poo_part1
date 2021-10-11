<?php

use App\Bicycle;
use App\Car;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR.'Bicycle.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR .'Car.php';

$bike = new Bicycle('blue');


$bike->setNbWheels = 2;
$bike->setCurrentSpeed = 0;


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$redCar = new Car("red", 5, "electric");
echo '<br><br>' . $redCar->start();
echo '<br>' . $redCar->forward() . '<br>Je roule à ' . $redCar->getCurrentSpeed() . 'km/h.<br>';
echo 'Wouha un mur, ';
echo $redCar->brake();

// echo $redCar->forward();
// echo '<br> Vitesse du véhicule : ' . $redCar->getCurrentSpeed . ' km/h' . '<br>';
// echo $redCar->brake();
