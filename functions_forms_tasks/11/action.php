<?php

include "index.html";
$a = $_POST['a'];
function upperFirst($a) {
    $arr = preg_split("/[.!\?]+/", $a);
    $str2 = "";
    foreach ($arr as $value) {
        $str2 .= mb_strtoupper(mb_substr(trim($value), 0, 1)). mb_substr($value, 2);
    }
    echo $str2;
}
upperFirst($a);
