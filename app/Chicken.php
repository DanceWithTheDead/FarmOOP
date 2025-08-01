<?php

namespace App;

class Chicken extends Animal
{
    public function __construct()
    {
        parent::__construct(null,'Egg',0,1);
    }

    public function getType(): string
    {
        return "Chicken";
    }
}