<?php
// tests/FactoriesTest.php

use kiki\factories\StarshipFactory;
use kiki\models\CorvetteStarship;
use kiki\models\StarDestroyerStarship;
use PHPUnit\Framework\TestCase;

class FactoriesTest extends TestCase
{
  public function testMakeCorvetteStarship()
  {
    $corvette = StarshipFactory::make('Corvette', 'Corvette 1', 50);

    $this->assertInstanceOf(CorvetteStarship::class, $corvette);
    $this->assertEquals('Corvette 1', $corvette->getName());
    $this->assertEquals(50, $corvette->countPassengers());
  }

  public function testMakeStarDestroyerStarship()
  {
    $starDestroyer = StarshipFactory::make('StarDestroyer', 'Star Destroyer 1');

    $this->assertInstanceOf(StarDestroyerStarship::class, $starDestroyer);
    $this->assertEquals('Star Destroyer 1', $starDestroyer->getName());
  }

  public function testInvalidShipType()
  {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage("Invalid ship type: InvalidType");

    StarshipFactory::make('InvalidType', 'Invalid Ship');
  }
}