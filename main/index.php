<?php

use App\Chicken;
use App\Cow;
use App\Farm;

require_once __DIR__ . "/../vendor/autoload.php";

$farm = new Farm();

for ($i = 0; $i < 10; $i++){
    $farm->addAnimal(new Cow());
}
for ($i = 0; $i < 20; $i++){
    $farm->addAnimal(new Chicken());
}

echo "Коров: " . $farm->getAnimalCount('Cow') . "\n";
echo "Кур: " . $farm->getAnimalCount('Chicken') . "\n";

for ($i = 0; $i < 7; $i++){
    $farm->collectProducts();
}

echo "Собрано за неделю: \n";
echo "Молоко: " . $farm->getProductCount('milk') . "\n";
echo "Яйца: " . $farm->getProductCount('Egg') . "\n";

for ($i = 0; $i < 5; $i++){
    $farm->addAnimal(new Chicken());
}
$farm->addAnimal(new Cow());
echo "Коров: " . $farm->getAnimalCount('Cow') . "\n";
echo "Кур: " . $farm->getAnimalCount('Chicken') . "\n";

for ($i = 0; $i < 7; $i++){
    $farm->collectProducts(); }

echo "Собрано за две неделю: \n";
echo "Молоко: " . $farm->getProductCount('milk') . "\n";
echo "Яйца: " . $farm->getProductCount('Egg') . "\n";

