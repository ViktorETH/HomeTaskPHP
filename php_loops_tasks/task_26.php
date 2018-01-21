<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 21.01.18
 * Time: 21:28
 */
echo "Дан массив чисел: ";
$arr = array();
for($i = 0; $i < 10; $i++){
    $arr[] = rand(0, 100);
    echo "$arr[$i] ";
}

echo "<br>";

echo "Произведение чисел больше нoля и с парным индексом, а имеено чисел: ";
$mult = 1;
foreach ($arr as $item => $value){
  if($item % 2 == 0 && $value > 0){
      $mult *= $value;
      echo "$value ";
  }
};
echo " = $mult";

echo "<br>";

echo "Числами в массиве, которые больше ноля и у которых не парный индекс являются: ";
foreach ($arr as $item => $value){
    if($item % 2 == 1 && $value > 0){
        echo "$value ";
    }
}
echo "<br>";