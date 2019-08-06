<?php

/*
 * Complete the aVeryBigSum function below.
 */
function aVeryBigSum($n, $ar) {
    /*
     * Write your code here.
     */
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum += $ar[$i];
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($n, $ar);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
