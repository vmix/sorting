<?php
$min = 1;
$max = 35;
for ($i = 0; $i < $max; $i++) {
    $arr[] = rand($min, $max);
}
shuffle($arr);
print_r($arr);

/* bubble sorting */
function bubbleSorting(&$arr)
{
    $start_time = microtime(true);
    $change_flag = 0;
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        if (isset($arr[$i + 1])) {
            if ($arr[$i] > $arr[$i + 1]) {
                $tmp = $arr[$i + 1];
                $arr[$i + 1] = $arr[$i];
                $arr[$i] = $tmp;
                $change_flag++;
            }
            if ($change_flag > 0) {
                bubbleSorting($arr);
            }
        }
    }
    $end_time = microtime(true);
    $total_time = $end_time - $start_time;
    return ([$arr, $total_time]);
}

print_r(bubbleSorting($arr));


