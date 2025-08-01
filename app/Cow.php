<?php

namespace App;

class Cow extends Animal
{
    public function __construct()
    {
        parent::__construct(null,'milk',8,12);
    }

    public function getType(): string
    {
        return "Cow";
    }
}