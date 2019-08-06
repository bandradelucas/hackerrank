<?php

/*
 * Complete the solve function below.
 */
function solve($a0, $a1, $a2, $b0, $b1, $b2) {
    /*
     * Write your code here.
     */
    $personA = $personB = 0;
    for ($i = 0; $i < 3; $i++) {
        if (${'a' . $i} > ${'b' . $i}) {
            $personA++;
        } else if (${'b' . $i} > ${'a' . $i}) {
            $personB++;
        }
    }
    return [$personA, $personB];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $a0A1A2_temp);
$a0A1A2 = explode(' ', $a0A1A2_temp);

$a0 = intval($a0A1A2[0]);

$a1 = intval($a0A1A2[1]);

$a2 = intval($a0A1A2[2]);

fscanf($__fp, "%[^\n]", $b0B1B2_temp);
$b0B1B2 = explode(' ', $b0B1B2_temp);

$b0 = intval($b0B1B2[0]);

$b1 = intval($b0B1B2[1]);

$b2 = intval($b0B1B2[2]);

$result = solve($a0, $a1, $a2, $b0, $b1, $b2);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($__fp);
fclose($fptr);
