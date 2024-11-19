<?php
declare(strict_types=1);


namespace TheWorld;


interface MealTypeInterface
{
    public function getName(): string;

    public function getType(): string;

    public function __toString(): string;
}
