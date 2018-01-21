<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 05.01.18
 * Time: 23:53
 */

$a = '78';
$b = 75;
if ($a == $b) {
    var_dump('$a равна $b');   //функция возвращает структурированную информацию о выражении
                                        // string(16) "$a равна $b"
}
else {
    var_dump('$a не равна $b'); //string(21) "$a  не равна $b"
}