<?php
declare(strict_types=1);


namespace TheWorld\Zoo;

use TheWorld\AnimalAbstract;
use TheWorld\AnimalInterface;
use TheWorld\FurInterface;
use TheWorld\FurTrait;
use TheWorld\MealShop\FruitMeal;
use TheWorld\MealShop\VegetableMeal;

class Rabbit extends AnimalAbstract implements AnimalInterface, FurInterface
{
    use FurTrait;

    public function configure()
    {
        $this->AddMealType(VegetableMeal::class);
        $this->AddMealType(FruitMeal::class);
    }
}
