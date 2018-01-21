<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 15:29
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 foreach ($arr as $key => $value){
     echo "$key<br>"; // вывод ключей массива
 };

 echo "<br>";

foreach ($arr as $key => $value){
    echo "$value<br>"; // вывод значений массива
};