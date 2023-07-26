<?php

require_once 'vendor/autoload.php';

use kiki\factories\StarshipFactory;
use kiki\models\Starship;
use kiki\models\Pilot;
use kiki\models\Airspeeder;
use kiki\models\Bomber;

// Create an instance of the pilot
$pilot = new Pilot();

// Create instances of vehicles
$starship = new Starship("Star Kiki");
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

$corvette = StarshipFactory::make('Corvette', 'Corvette 1', 50);
echo "Corvette name: " . $corvette->getName() . " - ";
echo "Corvette passengers: " . $corvette->countPassengers() . " /// ";

$starDestroyer = StarshipFactory::make('StarDestroyer', 'Star Destroyer 1');
echo "Star Destroyer name: " . $starDestroyer->getName() . " /// ";
$starDestroyer->attack($corvette);


echo 'All you base belong to us!';
?>