<?php
require __DIR__."/Door.php";
require __DIR__."/Expert.php";
require __DIR__."/Factory.php";
require __DIR__."/IronDoor.php";
require __DIR__."/IronDoorFactory.php";
require __DIR__."/IronDoorExpert.php";
require __DIR__."/WoodenDoor.php";
require __DIR__."/WoodenDoorFactory.php";
require __DIR__."/WoodenDoorExpert.php";


$WoodenFactory = new WoodenDoorFactory();
var_dump($WoodenFactory);
$WoodenFactory->makeDoor()->getInformation();
$WoodenFactory->makeExpert()->getInformation();

echo "<br>";

$IronFactory = new IronDoorFactory();
$IronFactory->makeExpert()->getInformation();
$IronFactory->makeDoor()->getInformation();

/*
 * Абстрактная фабрика — порождающий шаблон проектирования, предоставляет интерфейс для создания
 * семейств взаимосвязанных или взаимозависимых объектов, не специфицируя их конкретных классов.
 * Шаблон реализуется созданием абстрактного класса Factory, который представляет собой интерфейс для
 * создания компонентов системы (например, для оконного интерфейса он может создавать окна и кнопки).
 * Затем пишутся классы, реализующие этот интерфейс.
 */