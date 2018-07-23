<?php
require __DIR__."/WoodenDoor.php";
require __DIR__."/SteelDoor.php";
require __DIR__."/DoorFactory.php";

$newWoodenDoor = DoorFactory::makeWoodenDoor(7.8, 10);
var_dump($newWoodenDoor);

$newSteelDoor = DoorFactory::makeSteelDoor("brown", 7, 12.4);
var_dump($newSteelDoor);
