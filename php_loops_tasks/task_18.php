<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 21:06
 */

$a = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
$date_today = date("N");
foreach ($a as $day){
    if($day == $a[$date_today] || $day == $a[$date_today -6]){
        echo "<b>$day</b><br>";
    } else {
        echo "$day<br>";
    }
}


// проверить правильность выбора на сегодняшний день