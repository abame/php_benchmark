<?php

$arrayToTest = [];

foreach (range(0, 9999) as $number) {
    $arrayToTest[] = mt_rand(0, $number);
}

$start = microtime(true);
$sortArray = bubbleSort($arrayToTest);
$end = microtime(true);

echo "The code took " . ($end - $start) . " seconds to complete.";

function bubbleSort($array)
{
    do {
        $swapped = false;
        for ($i = 0, $c = count($array) - 1; $i < $c; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i + 1], $array[$i]) =
                    array($array[$i], $array[$i + 1]);
                $swapped = true;
            }
        }
    } while ($swapped);
    return $array;
}