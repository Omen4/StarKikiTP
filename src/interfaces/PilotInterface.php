<?php
namespace kiki\interfaces;

interface PilotInterface
{
  public function setVehicle(VehicleInterface $vehicle);
  public function drive();
}
?>