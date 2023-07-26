<?php
namespace kiki\models;

use kiki\interfaces\PilotInterface;
use kiki\interfaces\VehicleInterface;

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