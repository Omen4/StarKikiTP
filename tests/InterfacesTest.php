<?php
// tests/InterfacesTest.php
use PHPUnit\Framework\TestCase;

require_once 'Interfaces/VehicleInterface.php';
require_once 'Interfaces/FlyableInterface.php';
require_once 'Interfaces/ShootableInterface.php';
require_once 'Models/Starship.php';
require_once 'Models/Airspeeder.php';
require_once 'Models/Bomber.php';

class InterfacesTest extends TestCase
{
  public function testVehicleInterface()
  {
    $starship = new StarWars\Models\Starship();
    $airspeeder = new StarWars\Models\Airspeeder();
    $bomber = new StarWars\Models\Bomber();

    $this->assertInstanceOf('StarWars\Interfaces\VehicleInterface', $starship);
    $this->assertInstanceOf('StarWars\Interfaces\VehicleInterface', $airspeeder);
    $this->assertInstanceOf('StarWars\Interfaces\VehicleInterface', $bomber);
  }

  public function testFlyableInterface()
  {
    $starship = new StarWars\Models\Starship();
    $airspeeder = new StarWars\Models\Airspeeder();

    $this->assertInstanceOf('StarWars\Interfaces\FlyableInterface', $starship);
    $this->assertInstanceOf('StarWars\Interfaces\FlyableInterface', $airspeeder);

    // Add more test cases for FlyableInterface as needed
  }

  public function testShootableInterface()
  {
    $bomber = new StarWars\Models\Bomber();

    $this->assertInstanceOf('StarWars\Interfaces\ShootableInterface', $bomber);

    // Add more test cases for ShootableInterface as needed
  }
}