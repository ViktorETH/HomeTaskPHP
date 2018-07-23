<?php

require __DIR__."/BurgerBuilder.php";
require __DIR__."/Burger.php";

$burger1 = (new BurgerBuilder(14))
    ->addMeat()
    ->addSauce()
    ->addSalad()
    ->build();

var_dump($burger1);

$burger2 = (new BurgerBuilder("10"))
    ->addMeat();

var_dump($burger2);


/*
 * Строитель — порождающий шаблон проектирования, который предоставляет способ создания составного объекта.
 * Предназначен для решения проблемы антипаттерна «Телескопический конструктор».
 */
