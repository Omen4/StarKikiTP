<?php
namespace kiki\models;

class CorvetteStarship extends Starship
{
  private $passengerCount;

  public function __construct($name, $passengerCount)
  {
    parent::__construct($name);
    $this->passengerCount = $passengerCount;
  }

  public function countPassengers()
  {
    return $this->passengerCount;
  }
}
?>