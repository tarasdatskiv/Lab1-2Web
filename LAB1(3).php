<?php

function maxAbsElementIndex($array) {
    $maxAbsValue = 0;
    $maxAbsIndex = -1;
    
    for ($i = 0; $i < count($array); $i++) {
        $absValue = abs($array[$i]);
        if ($absValue > $maxAbsValue) {
            $maxAbsValue = $absValue;
            $maxAbsIndex = $i;
        }
    }
    
    return $maxAbsIndex;
}

$array = [1, -5, 10, -8, 3];

$maxIndex = maxAbsElementIndex($array);
echo "Номер максимального за модулем елемента: $maxIndex";

?>
