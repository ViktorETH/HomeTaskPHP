<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.12.17
 * Time: 18:30
 */
$day = 4; // создание переменной со значением число
switch ($day) { //Объявление конструкции switch для сравнения выражения с несколькими вариантами
    case 1:     //проверка значения переменной на строгое равенство первому значению case 1
        echo "Это рабочий день"; //вывод строки в случае (case === $day)
        break; //прерывание выполнения в случае если (case === $day)
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
        echo "Это рабочий день";
        break;
    case 4:
        echo "Это рабочий день";
        break;//
    case 5:
        echo "Это рабочий день";
        break;

}
