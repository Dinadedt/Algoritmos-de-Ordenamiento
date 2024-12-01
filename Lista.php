<?php
function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$numbers = [34, -2, 7, 0, 7, -45, 3];
echo "Lista antes de ordenar: " . implode(", ", $numbers) . "\n";
$sortedNumbers = bubbleSortDescending($numbers);
echo "Lista después de ordenar (descendente): " . implode(", ", $sortedNumbers) . "\n";
?>
