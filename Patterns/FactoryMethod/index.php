<?php
require __DIR__."/Interviewer.php";
require __DIR__."/Developer.php";
require __DIR__."/Executer.php";
require __DIR__."/HiringManager.php";
require __DIR__."/DevelopmentManager.php";
require __DIR__."/ExecutorManager.php";


$naeDevInt = new DevelopmentManager();
$int = $naeDevInt->makeInterviewer("Bob");
$int->askQuestions();

echo "<br>";

$newExInt = new ExecutorManager();
$int2 = $newExInt->makeInterviewer("Rob");
$int2->askQuestions();


/*
 * Фабричный метод — порождающий шаблон проектирования, предоставляющий подклассам интерфейс
 * для создания экземпляров некоторого класса. В момент создания наследники могут определить,
 * какой класс создавать. Иными словами, данный шаблон делегирует создание объектов наследникам
 * родительского класса. Это позволяет использовать в коде программы не специфические классы,
 * а манипулировать абстрактными объектами на более высоком уровне
 * */

