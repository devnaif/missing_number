<?php

function getMissingNumber($arr)
{
    $a = [];
    $b = 0;
    $c = max($arr) / min($arr);
    $d = max($arr) / $c;
    for ($i = 0; $i < $c; $i++) {
        array_push($a, ($b += $d));
    }
    $result = array_diff($a, $arr);
    return $result;
}
$data = [];
$arrays = [
    $multiple_1 = [1, 2, 4, 5, 7,12, 9, 11],
    $multiple_2 = [2, 4, 8, 10, 14,26, 18, 22],
    $multiple_3 = [3, 6, 9, 15, 21, 27, 39, 33],
    $multiple_9 = [9, 18, 27, 36, 72, 54, 63]
];
foreach ($arrays as $arr) {
 print_r(getMissingNumber($arr));
}

