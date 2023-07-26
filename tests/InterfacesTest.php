<?php
// tests/InterfacesTest.php
use PHPUnit\Framework\TestCase;

use kiki\models\Bomber;
use kiki\models\Airspeeder;
use kiki\models\Pilot;
use kiki\models\Starship;
use kiki\interfaces\FlyableInterface;
use kiki\interfaces\PilotInterface;
use kiki\interfaces\ShootableInterface;
use kiki\interfaces\VehicleInterface;


class InterfacesTest extends TestCase
{
  public function testVehicleInterface()
  {
    $starship = new Starship("Space Kiki");
    $airspeeder = new Airspeeder();
    $bomber = new Bomber();

    $this->assertInstanceOf(VehicleInterface::class, $starship);
    $this->assertInstanceOf(VehicleInterface::class, $airspeeder);
    $this->assertInstanceOf(VehicleInterface::class, $bomber);
  }

  public function testFlyableInterface()
  {
    $starship = new Starship("Space Kiki");
    $airspeeder = new Airspeeder();

    $this->assertInstanceOf(FlyableInterface::class, $starship);
    $this->assertInstanceOf(FlyableInterface::class, $airspeeder);

  }

  public function testShootableInterface()
  {
    $bomber = new Bomber();

    $this->assertInstanceOf(ShootableInterface::class, $bomber);

  }
}