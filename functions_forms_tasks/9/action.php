<?php
include "index.html";
$a = $_POST['a'];
mb_internal_encoding("UTF-8");
function turnString($a){
    $b = "";                                     // объявляем переменную, в которую будут записаны елементы строки
        for($i = strlen($a); $i >= 0; $i--){     // начинаем цикл, для перебора строки, начиная с последнего элемента
            $b .= $a[$i];                        // конкатенируем каждый элемент строки. Конкатенация происходит от последнего элемента
    }
                // возвращаем собраную в обратном порядке строку
    echo $b;
}

turnString($a);                                  // Вызываем строку
