<?php
$array = \range(0, 100);
\shuffle($array);

$countedArray = \count($array) - 1;

do {
    $bool = false;
    for ($i = 0; $i < $countedArray; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            [$array[$i + 1], $array[$i]] = [$array[$i], $array[$i + 1]];
            $bool = true;
        }
    }
} while ($bool);
