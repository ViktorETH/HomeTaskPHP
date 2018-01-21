<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.12.17
 * Time: 18:05
 */
$age = "12";
    if (($age == 0 ) || ($age < 0 )){
        echo "Неизвестный возраст";}
else {
    if ($age >= 18 && $age < 60){
        echo "Вам еще работать и работать";}
else
    if ($age > 59){
        echo "Вам пора на пенсию!";}
else
    if ($age >= 0 && $age < 18){
        echo "Вам еще рано работать!";}
}
