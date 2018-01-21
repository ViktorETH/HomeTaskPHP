<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 21.01.18
 * Time: 0:32
 */
include "index.html";
$a = $_POST ['a'];
$b = $_POST ['b'];
//$a = "34555675";
//$b = 5;
$arr1 = str_split($a);
foreach ($arr1 as $value){
    if($b == $value){
    $sum += 1;
    }
}
    echo "Цифра ".$b." встречается в числе ".$a." = ".$sum." раз(a)";
