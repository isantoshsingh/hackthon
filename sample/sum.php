<?php

fscanf(STDIN, "%d\n", $t);
$arr = [];

while ($t--) {
    $line = trim(fgets(STDIN));
    $arr[] = explode(' ', $line);
}


foreach ($arr as $numbers) {

    echo array_sum($numbers);
    echo "\n";
}