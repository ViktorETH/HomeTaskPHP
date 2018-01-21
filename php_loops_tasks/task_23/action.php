<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 20.01.18
 * Time: 22:52
 */

include 'index.html';
$a = $_POST ['a'];
$arr1 = str_split($a);
foreach ($arr1 as $value){
  $sum += $value;
};
echo "Сумма цифр в числе $a = $sum";







