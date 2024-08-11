<?php
$i = 1;


while ($i <= 100) {
    if ($i % 3 == 0) {
        $result = $result . "Fizz";
    }
    if ($i % 5 == 0) {
        $result =  $result . "Buzz";
    }
    if (!$result) {
        $result = $i;
    }
    echo "$result\n";
    $i = $i + 1;
    $result = '';
}
