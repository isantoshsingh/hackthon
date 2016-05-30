<?php

/*
 * Read input from stdin and provide input before running code

  fscanf(STDIN, "%s\n", $name);
  echo "Hi, ".$name;

 */

fscanf(STDIN, "%d\n", $T);

$line = trim(fgets(STDIN));
$d = explode(' ', $line);

if ($T != count($d)) {
    echo 'ERROR in argument';
    exit;
}

foreach ($d as $number) {
    for ($i = 1; $i <= $number; $i++) {
        $divisible = false;
        if ($i % 3 == 0) {
            echo "Fizz";
            $divisible = true;
        }
        if ($i % 5 == 0) {
            echo "Buzz";
            $divisible = true;
        }

        if (!$divisible)
            echo $i;

        echo "\n";
    }
}
?>
