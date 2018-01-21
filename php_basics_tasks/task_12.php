<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.12.17
 * Time: 19:01
 */

include 'task_9.php'; //включение файла в код сценария php
switch ($day) {
    case 0:
        echo "Неизвестный день";
        break;
    case ($day >= 1 && $day <= 5):// создание логического условия
        echo "Это рабочий день";
        break;
    case ($day == 6 && $day == 7):
        echo "Это выходной день";
        break;
    default; //вывод строки в случае, если (case !== $day)
    echo "Неизвестный день";
    break;
}
