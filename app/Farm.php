<?php

namespace App;

class Farm
{
    private array $animals = [];
    private array $products = [];
    private int $nexId = 1;

    public function addAnimal(Animal $animal) : void
    {
        $animal->setId($this->nexId);

        $this->animals[] = $animal;
    }

    public function collectProducts(): void
    {
        foreach ($this->animals as $animal){

            $productType = $animal->getProductType();

            $amount = $animal->produceProduct();

            $this->products[$productType] = ($this->products[$productType] ?? 0) + $amount;
        }
    }

    public function getAnimalCount($type) : string
    {
        $count = 0;

        foreach ($this->animals as $animal){

            if ($animal->getType() === $type){
                $count++;
            }
        }

        return $count;
    }

    public function getProductCount($type)
    {
        return $this->products[$type];
    }
}