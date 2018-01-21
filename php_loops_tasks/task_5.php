<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 15:44
 */

$a = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
foreach ($a as $key => $value){
    echo "$key - зарплата $value долларов<br>"; //вывод результата перебора массива цыклом как ключ => значение
};

