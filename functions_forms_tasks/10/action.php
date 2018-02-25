<?php

include "index.html";
$a = $_POST['a'];

function uniArr($arr2) {
    $arr2 = mb_strtolower($arr2);           // переводим строку в нижний регистр, чтобы повторяющийся слова были в равных условиях написания
    $arr = explode(" ", $arr2);     // разбиваем строку в массив
    $uniArray = [];                         // создаем пустой массив
    foreach ($arr as $value) {
        if (!in_array($value, $uniArray)) { // если в массиве $uniArray отсутствует значение из массива $arr
            $uniArray[] = $value;           // то его туда необходимо положить
        }
    }
    print_r($uniArray);                     // вывести массив $uniArray
}

uniArr($a);