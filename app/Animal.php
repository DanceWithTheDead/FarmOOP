<?php

namespace App;

abstract class Animal
{
/*
 * Абстрактный класс который содержит
 * общие свойства и методы для животных на ферме.
*/

    public function __construct(
        private ?int $id = null,
        protected string $productType,
        protected int $minProduct,
        protected int $maxProduct
    ){}


    /** Данный метод устанавливает Id животного.
     * @throws \Exception При попытке изменить id выдает ошибку
     */
    public function setId(int $id): void
    {
        if ($this->id === null){
            $this->id = $id;
        } else {
            throw new \Exception("Id уже установлен");
        }

    }


    /*
     * Возвращает тип продукции животного
     * */
    public function getProductType() :string
    {
        return $this->productType;
    }


    /*
     * Генерирует случайное количество производимой продукции
     * в пределах min max
     * */
    public function produceProduct(): int
    {
        return rand($this->minProduct,$this->maxProduct);
    }


    abstract public function getType(); //Абстрактный метод для получения типа животного

}