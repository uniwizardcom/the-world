<?php
declare(strict_types=1);


namespace TheWorld;

abstract class AnimalAbstract
{
    private string $name = 'Unnamed animal';

    private array $mealTypes = [];

    public function __construct(?string $name = null)
    {
        if(!empty($name)) {
            $this->name = $name;
        }

        $this->configure();
    }

    public function AddMealType(string $mealType): void
    {
        $this->mealTypes[] = $mealType;
    }

    /**
     * @throws \Exception
     */
    public function EatMeal(MealTypeInterface $mealType): void
    {
        if(!$this->isGoodMeal($mealType)) {
            $this->vomiting('Złe jedzenie: '.$mealType);
        }

        echo $mealType;
    }

    protected function vomiting(?string $reason = null): void
    {
        throw new \Exception($reason ?? 'Nie wiadomo co.');
    }

    public function __toString(): string
    {
        return $this->name.PHP_EOL;
    }

    private function isGoodMeal(MealTypeInterface $mealType): bool
    {
        foreach($this->mealTypes as $mealTypeClassName) {
            if(is_a($mealType, $mealTypeClassName)) {
                return true;
            }
        }

        return false;
    }
}
