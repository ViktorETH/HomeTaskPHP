<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 19:27
 */

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($a as $item => $value){
        if ($value % 3 == 0){
            echo $value .",<br>";
        }else{
            echo $value .", ";
        }
    }