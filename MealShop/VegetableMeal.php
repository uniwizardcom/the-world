<?php
declare(strict_types=1);


namespace TheWorld\MealShop;


use TheWorld\MealTypeInterface;

abstract class VegetableMeal implements MealTypeInterface
{
    public function getType(): string
    {
        return 'Posiłek warzywny'.PHP_EOL;
    }

    public function __toString(): string
    {
        return implode(' ', [
            $this->getType(),
            $this->getName()
        ]);
    }
}
