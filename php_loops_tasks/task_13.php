<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 19:03
 */

for($i = 1; $i < 10; $i++) {

    for ($j = 0; $j < 10; $j++) {
        $s = $j * $i;
        echo "$i x $j = $s<br>";
    };
    echo "<br>";
}