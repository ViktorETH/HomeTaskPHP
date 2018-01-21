<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 17:28
 */

$a = array(2, 5, 9, 15, 0, 4);

foreach ($a as $item => $value){
    if($value > 3 && $value < 10){
        echo "$value<br>";
    }
};