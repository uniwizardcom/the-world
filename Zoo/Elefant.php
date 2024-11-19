<?php
declare(strict_types=1);


namespace TheWorld\Zoo;

use TheWorld\AnimalAbstract;
use TheWorld\AnimalInterface;
use TheWorld\MealShop\FruitMeal;
use TheWorld\MealShop\VegetableMeal;

class Elefant extends AnimalAbstract implements AnimalInterface
{
    public function configure()
    {
        $this->AddMealType(VegetableMeal::class);
        $this->AddMealType(FruitMeal::class);
    }
}
