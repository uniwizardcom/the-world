<?php
include_once './FurInterface.php';
include_once './FurTrait.php';
include_once './MealTypeInterface.php';
include_once './MealShop/VegetableMeal.php';
include_once './MealShop/FruitMeal.php';
include_once './MealShop/MeatMeal.php';
include_once './MealShop/Carrot.php';
include_once './MealShop/Apple.php';
include_once './MealShop/Mouse.php';
include_once './MealShop/Fish.php';
include_once './AnimalInterface.php';
include_once './AnimalAbstract.php';
include_once './Zoo/Rabbit.php';
include_once './Zoo/Rino.php';
include_once './Zoo/Elefant.php';
include_once './Zoo/Tiger.php';
include_once './Zoo/Fox.php';
include_once './Zoo/SnowLeopard.php';


$rabbit = new \TheWorld\Zoo\Rabbit('Bugs Bunny');
echo $rabbit;
try {
    $rabbit->Combing();
    $rabbit->EatMeal(new \TheWorld\MealShop\Carrot());
    $rabbit->EatMeal(new \TheWorld\MealShop\Apple());
} catch (\Throwable $e) {
    echo '!!! Coś zaszkodziło zwięrzątku: '.PHP_EOL;
    echo $e->getMessage();
    echo '-----------------------------------'.PHP_EOL;
}

$rino = new \TheWorld\Zoo\Rino('Horn');
echo $rino;
try {
    $rino->EatMeal(new \TheWorld\MealShop\Carrot());
} catch (\Throwable $e) {
    echo '!!! Coś zaszkodziło zwięrzątku: '.PHP_EOL;
    echo $e->getMessage();
    echo '-----------------------------------'.PHP_EOL;
}

$elefant = new \TheWorld\Zoo\Elefant('Bigfoot');
echo $elefant;
try {
    $elefant->EatMeal(new \TheWorld\MealShop\Carrot());
    $elefant->EatMeal(new \TheWorld\MealShop\Apple());
    $elefant->EatMeal(new \TheWorld\MealShop\Mouse());
} catch (\Throwable $e) {
    echo '!!! Coś zaszkodziło zwięrzątku: '.PHP_EOL;
    echo $e->getMessage();
    echo '-----------------------------------'.PHP_EOL;
}

$tiger = new \TheWorld\Zoo\Tiger('Stripes');
echo $tiger;
try {
    $tiger->Combing();
    // $tiger->EatMeal(new \TheWorld\MealShop\Carrot());
    // $tiger->EatMeal(new \TheWorld\MealShop\Apple());
    $tiger->EatMeal(new \TheWorld\MealShop\Mouse());
} catch (\Throwable $e) {
    echo '!!! Coś zaszkodziło zwięrzątku: '.PHP_EOL;
    echo $e->getMessage();
    echo '-----------------------------------'.PHP_EOL;
}

$tiger = new \TheWorld\Zoo\Fox('Red');
echo $tiger;
try {
    $tiger->Combing();
    // $tiger->EatMeal(new \TheWorld\MealShop\Carrot());
    // $tiger->EatMeal(new \TheWorld\MealShop\Apple());
    $tiger->EatMeal(new \TheWorld\MealShop\Mouse());
    $tiger->EatMeal(new \TheWorld\MealShop\Fish());
} catch (\Throwable $e) {
    echo '!!! Coś zaszkodziło zwięrzątku: '.PHP_EOL;
    echo $e->getMessage();
    echo '-----------------------------------'.PHP_EOL;
}

$tiger = new \TheWorld\Zoo\SnowLeopard('Snowflake');
echo $tiger;
try {
    $tiger->Combing();
    $tiger->EatMeal(new \TheWorld\MealShop\Carrot());
    // $tiger->EatMeal(new \TheWorld\MealShop\Apple());
    $tiger->EatMeal(new \TheWorld\MealShop\Mouse());
    $tiger->EatMeal(new \TheWorld\MealShop\Fish());
} catch (\Throwable $e) {
    echo '!!! Coś zaszkodziło zwięrzątku: '.PHP_EOL;
    echo $e->getMessage();
    echo '-----------------------------------'.PHP_EOL;
}
