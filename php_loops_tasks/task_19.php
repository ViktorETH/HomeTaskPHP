<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 21:39
 */

$a = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
$date_today = date("N");
foreach ($a as $day){
    if($day == $a[$date_today]){
        echo "<b>$day</b><br>";
    } else {
        echo "$day<br>";
    }
}