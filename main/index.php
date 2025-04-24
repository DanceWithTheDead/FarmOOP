<?php

require_once __DIR__ . "/../vendor/autoload.php";

$farm = new \App\Farm(); // Инициализация фермы

for ($i = 0; $i < 10; $i++){
    $farm->addAnimal(new \App\Cow()); // Добавляем 10 коров
}
for ($i = 0; $i < 20; $i++){
    $farm->addAnimal(new \App\Chicken()); // Добавляем 20 куриц
}

echo "Коров: " . $farm->getAnimalCount('Cow') . "\n"; // Выводим количество коров
echo "Кур: " . $farm->getAnimalCount('Chicken') . "\n"; // Выводим количество куриц

for ($i = 0; $i < 7; $i++){  // собирает продукцию за неделю
    $farm->collectProducts();
}

echo "Собрано за неделю: \n"; // Выводим количество собранной продукции за неделю
echo "Молоко: " . $farm->getProductCount('milk') . "\n";
echo "Яйца: " . $farm->getProductCount('Egg') . "\n";

for ($i = 0; $i < 5; $i++){
    $farm->addAnimal(new \App\Chicken()); // Добавляем еще 5 куриц
}
$farm->addAnimal(new \App\Cow()); // Добавляем еще одну корову
echo "Коров: " . $farm->getAnimalCount('Cow') . "\n"; //Снова выводим количество коров
echo "Кур: " . $farm->getAnimalCount('Chicken') . "\n"; //Снова выводим количество куриц

for ($i = 0; $i < 7; $i++){
    $farm->collectProducts(); // Повторно собираем продукцию
}

echo "Собрано за две неделю: \n"; //Выводим количество собранной продукции за две недели
echo "Молоко: " . $farm->getProductCount('milk') . "\n";
echo "Яйца: " . $farm->getProductCount('Egg') . "\n";

