<?php

namespace App;

use Exception;

abstract class Animal
{
    public function __construct(
        private ?int $id = null,
        protected string $productType,
        protected int $minProduct,
        protected int $maxProduct
    ){}

    public function setId(int $id): void
    {
        if ($this->id === null){
            $this->id = $id;
        } else {
            throw new Exception("Id уже установлен");
        }
    }

    public function getProductType() :string
    {
        return $this->productType;
    }

    public function produceProduct(): int
    {
        return rand($this->minProduct,$this->maxProduct);
    }

    abstract public function getType();
}