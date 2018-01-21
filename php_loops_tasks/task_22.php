<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 22:48
 */

$a = array("x");

for($i = 0; $i < 10; $i +=2){
    echo "<br>";
    for($j = 0; $j < $i + 2; $j++){
        echo "x";
    }
}