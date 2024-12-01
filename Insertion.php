<?php
function insertionSort($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$names = ["Laura", "Pedro", "Ana", "Zoe", "Carlos"];
echo "Lista antes de ordenar: " . implode(", ", $names) . "\n";
$sortedNames = insertionSort($names);
echo "Lista después de ordenar (alfabético): " . implode(", ", $sortedNames) . "\n";
?>
