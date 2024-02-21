<?php
$arr = array();
echo "Сгенерированный массив: <br/> ";
for ($i = 0; $i < 10; $i++) { 
    $arr[] = rand(1, 100);
    echo $arr[$i];
    echo "<br/>";
}




