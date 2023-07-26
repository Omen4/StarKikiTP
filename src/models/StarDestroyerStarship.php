<?php
namespace kiki\models;

class StarDestroyerStarship extends Starship
{
  public function attack(Starship $target)
  {
    // Implement attack logic here
    echo $this->getName() . " is attacking " . $target->getName();
  }
}
?>