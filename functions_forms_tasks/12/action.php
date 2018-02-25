<?php
include "index.html";
$a = $_POST['a'];

function upperFirst($a) {
    $str = "";
    $arr = preg_split("/[.!?]+/", $a); // разбиваем строку в массив
    krsort($arr);                             // сортируем по ключам в обратном порядке
    foreach ($arr as $value){
        $str .= $value.".";                   // собираем новую строку
    }

    echo $str;
}

upperFirst($a);