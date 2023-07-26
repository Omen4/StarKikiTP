<?php
namespace kiki\factories;

use kiki\models\CorvetteStarship;
use kiki\models\StarDestroyerStarship;
use SebastianBergmann\Diff\InvalidArgumentException;


class StarshipFactory
{
  public static function make($shipType, $name, $passengerCount = 0)
  {
    switch ($shipType) {
      case 'Corvette':
        return new CorvetteStarship($name, $passengerCount);
      case 'StarDestroyer':
        return new StarDestroyerStarship($name);
      default:
        throw new InvalidArgumentException("Invalid ship type: $shipType");
    }
  }
}

?>