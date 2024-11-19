<?php
declare(strict_types=1);


namespace TheWorld\MealShop;

class Fish extends MeatMeal
{
    public function getName(): string
    {
        return 'Ryba'.PHP_EOL;
    }
}
