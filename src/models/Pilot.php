<?php
namespace src\models;

use src\interfaces\PilotInterface;
use src\interfaces\VehicleInterface;

class Pilot implements PilotInterface
{
  private $vehicle;

  public function setVehicle(VehicleInterface $vehicle)
  {
    $this->vehicle = $vehicle;
  }

  public function drive()
  {
    $this->vehicle->start();
    $this->vehicle->embark();
    $this->vehicle->stop();
  }
}
?>