<?php
namespace src\models;

use src\interfaces\VehicleInterface;
use src\interfaces\FlyableInterface;
use src\interfaces\ShootableInterface;

class Bomber implements VehicleInterface, FlyableInterface, ShootableInterface
{
  public function start()
  {
    // Logic to start the bomber
  }

  public function stop()
  {
    // Logic to stop the bomber
  }

  public function embark()
  {
    // Logic to embark in the bomber
  }

  public function takeOff()
  {
    // Logic to take off with the bomber
  }

  public function land()
  {
    // Logic to land with the bomber
  }

  public function shoot()
  {
    // Logic to shoot with the bomber
  }
}
?>