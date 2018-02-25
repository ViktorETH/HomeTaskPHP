<?php
include "index.html";
$string1 = $_POST['a'];
$string2 = $_POST['b'];
                                              // создам функцию getCommonWords с заданными параметрами
function getCommonWords($a, $b)
{
    $common = array();
    $a = explode(" ", $a);            // создаем массив строк, содержащий элементы переданной строки $a
    $b = explode(" ", $b);            // создаем массив строк, содержащий элементы переданной строки $a
    foreach ($a as $value) {                  // перебираем циклом значения массива $a
        foreach ($b as $value2) {             // перебираем циклом значения массива $b
            if ($value === $value2) {         // проверка на совпадение значений
                $common[] = $value;           // запись совпавших значений в новый массив
            }
        }
    }
    if (in_array(true, $common)) {      // если массив $common не пустой
        echo "Совпавшие слова: ";
        foreach ($common as $item) {
            echo "$item ";                    // выводим совпавшие слова
        }
    } else {                                  // В другом случае
        echo "Совпадений не обнаружено";      // вывод информации об отсутствии совпадений
    }
}
getCommonWords($string1, $string2);

