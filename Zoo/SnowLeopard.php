<?php
declare(strict_types=1);


namespace TheWorld\Zoo;

use TheWorld\AnimalAbstract;
use TheWorld\AnimalInterface;
use TheWorld\FurInterface;
// use TheWorld\FurTrait;
use TheWorld\MealShop\MeatMeal;

class SnowLeopard extends AnimalAbstract implements AnimalInterface, FurInterface
{
    // use FurTrait;

    public function configure()
    {
        $this->AddMealType(MeatMeal::class);
    }

    public function Combing(): void
    {
        echo 'Czesanie futra soplem lodu'.PHP_EOL;
    }
}
