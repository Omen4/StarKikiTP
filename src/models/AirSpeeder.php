<?php
namespace src\models;

use src\interfaces\VehicleInterface;
use src\interfaces\FlyableInterface;

class Airspeeder implements VehicleInterface, FlyableInterface
{
  public function start()
  {
    // Logic to start the airspeeder
  }

  public function stop()
  {
    // Logic to stop the airspeeder
  }

  public function embark()
  {
    // Logic to embark in the airspeeder
  }

  public function takeOff()
  {
    // Logic to take off with the airspeeder
  }

  public function land()
  {
    // Logic to land with the airspeeder
  }
}
?>