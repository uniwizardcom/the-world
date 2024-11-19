<?php
declare(strict_types=1);


namespace TheWorld\Zoo;

use TheWorld\AnimalAbstract;
use TheWorld\AnimalInterface;
use TheWorld\MealShop\VegetableMeal;

class Rino extends AnimalAbstract implements AnimalInterface
{
    public function configure()
    {
        $this->AddMealType(VegetableMeal::class);
    }
}
