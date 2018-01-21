<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 18:10
 */
$n = 1000;
$i = 0;
while($n >= 50){
    $n = $n / 2;
    if($n >= 50) {
        $i++;
        echo $n.'<br>';
    }
}
echo 'Количество итераций = '.$i;