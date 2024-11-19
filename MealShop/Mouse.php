<?php
declare(strict_types=1);


namespace TheWorld\MealShop;

class Mouse extends MeatMeal
{
    public function getName(): string
    {
        return 'Mysz'.PHP_EOL;
    }
}
