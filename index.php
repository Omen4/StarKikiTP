<?php

require __DIR__ . '/vendor/autoload.php';

use src\models\Starship;
use src\models\Pilot;
use src\models\Airspeeder;
use src\models\Bomber;


// Create instances of vehicles
$starship = new Starship();
$airspeeder = new Airspeeder();
$bomber = new Bomber();

// Create an instance of the pilot
$pilot = new Pilot();

// Create instances of vehicles
$starship = new Starship();
$airspeeder = new Airspeeder();
$bomber = new Bomber();

// Test driving the starship
echo "Driving the Starship:\n";
$pilot->setVehicle($starship);
$pilot->drive();
echo "All Good\n";

// Test driving the airspeeder
echo "Driving the Airspeeder:\n";
$pilot->setVehicle($airspeeder);
$pilot->drive();
echo "All Good\n";

// Test driving the bomber
echo "Driving the Bomber:\n";
$pilot->setVehicle($bomber);
$pilot->drive();
echo "All Good\n";

echo 'All you base belong to us!';
?>