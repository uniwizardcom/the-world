<?php
declare(strict_types=1);


namespace TheWorld\MealShop;


use TheWorld\MealTypeInterface;

abstract class FruitMeal implements MealTypeInterface
{
    public function getType(): string
    {
        return 'Posiłek owocowy'.PHP_EOL;
    }

    public function __toString(): string
    {
        return implode(' ', [
            $this->getType(),
            $this->getName()
        ]);
    }
}
