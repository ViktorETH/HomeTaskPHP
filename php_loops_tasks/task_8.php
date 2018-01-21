<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 17:35
 */

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($a as $item => $value){
    $b .= $value; // конкатенация элементов массива
};
var_dump("$b<br>");