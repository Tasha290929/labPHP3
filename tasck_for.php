<?php
$a = 0;
$b = 0;
for ($i = 0; $i <= 5; $i++) {
 $a += 10;
 $b += 5;
 echo "Проход цикла номер ".($i+1)."   a = ".$a." b = ".$b."<br/>";
}
echo "<br />Конец цикла, и значение a = " . $a . ", а значение b = " . $b;
