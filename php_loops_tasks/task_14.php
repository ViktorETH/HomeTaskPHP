<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 19:07
 */

$a = [4, 2, 5, 19, 13, 0, 10];

foreach($a as $item => $e){
    if($e == 2 || $e == 3 || $e == 4){
        echo "Есть!<br>";
    } else {
        echo"Нет!<br>";
    }
};