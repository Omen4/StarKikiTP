<?php
namespace kiki\models;

use kiki\interfaces\FlyableInterface;
use kiki\interfaces\VehicleInterface;

class Starship implements VehicleInterface, FlyableInterface
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }


  public function start()
  {
    // Logic to start the starship
  }

  public function stop()
  {
    // Logic to stop the starship
  }

  public function embark()
  {
    // Logic to embark in the starship
  }
  public function takeOff()
  {
    // Logic to take off with the starship
  }

  public function land()
  {
    // Logic to land with the starship
  }
}
?>