<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 20:17
 */

$a = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль',
            'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь', ); // обьявляем переменную с массивом
$date_today = date("n");                                      // подключаем системную дату:
                                                                     // порядковый номер месяца без ведущего нуля
 foreach ($a as $item => $month) {                     // обьявляем запуск цикла с проверкой значения
     if($month == $a[$date_today - 1]){                // выполняем проверку на соответствие значения текущему месяуц
         echo "<b>$month</b><br>";                     // в случае совпадения, выводим жирным шрифтом
     } else {
         echo "$month<br>";                            // если нет, обычным
     }
 }