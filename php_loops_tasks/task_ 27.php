
<table style="text-align: center;"
              align = "center"
              width = 400
              height = 200>
<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 21.01.18
 * Time: 22:13
 */
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$lenght = count($colors);
$rows = 5;
$cols = 5;
for($i = 0; $i < $rows; $i++) { //$i = tr
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) { // $j = td
        $q = rand(0, $lenght - 1);
        $number = rand(0, 9999);
        echo "<td bgcolor = " . $colors[$q] . ">" . $number . "</td>";
    }
    echo "</tr>";
}
?>
</table>