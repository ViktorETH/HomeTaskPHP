<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 19:14
 */

$a = array(4, 2, 5, 19, 13, 0, 10);

foreach ($a as $item => $value){
    $count = $item + 1;
}
echo "Колличество элементов в массиве =  $count<br>";