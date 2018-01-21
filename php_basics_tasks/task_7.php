<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.12.17
 * Time: 18:01
 */
$age = 6;
    if ($age >= 18 && $age < 60)
        echo "Вам еще работать и работать";
else
    if ($age > 59)
        echo "Вам пора на пенсию!";
else
    if ($age >= 0 && $age < 18)
        echo "Вам еще рано работать!";