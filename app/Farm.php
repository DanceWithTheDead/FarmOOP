<?php

namespace App;

class Farm
{
    /*
     * Класс фермы который содержит свойства и методы для
     * добавлять животных на ферму и собирать их продукцию,
     * вести подсчет животных по их типу, и выводить количество собранной продукции.
     * */
    private array $animals = [];
    private array $products = [];
    private int $nexId = 1;

    /**
     * @throws \Exception
     */
    public function addAnimal(Animal $animal) : void
    {
        $animal->setId($this->nexId);
        $this->animals[] = $animal;

    }


    public function collectProducts(): void
    {
        foreach ($this->animals as $animal){
            /** @var Animal $animal */
            $productType = $animal->getProductType();
            /** @var Animal $animal */
            $amount = $animal->produceProduct();
            $this->products[$productType] = ($this->products[$productType] ?? 0) + $amount;
        }

    }

    public function getAnimalCount($type) : string
    {
        $count = 0;
        /** @var Animal $animal */
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