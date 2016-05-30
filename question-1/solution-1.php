<?php

fscanf(STDIN, "%d\n", $t);
$arr = [];



while ($t--) {
    for ($i = 0; $i < 2; $i++) {
        $line = trim(fgets(STDIN));
        $arr[] = explode(' ', $line);
    }
    #echo '<pre>';
    $n = $arr[0][0];
    $m = $arr[0][1];

    if ($n < 1 || $n > 100) {
        echo 'ERROR';
        break;
    } elseif ($m < 1 || $m > $n) {
        echo 'ERROR';
        break;
    }

    $interest = $arr[1];
    $new = [];

    #input: 100 50 3000 4000 40
    #output: 50 4000 40;
    #sum: S = |50-4000| + |4000-40| = 7910
    for ($i = 0; $i < $m; $i++) {
        $min = array_search(min($interest), $interest);
        count($new) < $m && $new[$min] = $interest[$min];

        $max = array_search(max($interest), $interest);
        count($new) < $m && $new[$max] = $interest[$max];

        if (count($new) < $m) {
            unset($interest[$max]);
            unset($interest[$min]);
        }
    }
    print_r($new);
    ksort($new);
    print_r($new);
    $new = array_values($new);
    print_r($new);
    #die;
    $sum = 0;
    for ($i = 0; $i < ($m - 1); $i++) {
        $sum += abs($new[$i] - $new[$i + 1]);
    }
    var_dump($sum);
}
