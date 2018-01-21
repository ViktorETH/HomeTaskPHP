<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 15:56
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $item => $value){
    $en[] = $item; // помещение ключей массива в новый масиив
    $ru[] = $value;// помещение ключей массива в новый массив
};
foreach ($en as $item2 => $value2){ // перебор массива, куда были помещены ключи
    echo "$item2 => $value2<br>";
};

foreach ($ru as $item3 => $value3){ // перебор массива, куда были помещены значения
    echo "$item3 => $value3<br>";
};