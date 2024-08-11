<?php
/*
 * Напишите алгоритм, заполняющий массив в 100 элементов, случайными значениями от 1 до 200,
 * сгенерируйте значения через rand(1, 200) или другим способом
 * Главный критерий - значения не должны повторяться.
 */

$arr = [];

/*while (count($arr) != 100) {
    $temp = rand(1, 200);
    if (!in_array($temp, $arr)) {
        $arr[] = $temp;
    }
    
}*/

$arr = range(1, 200);
shuffle($arr);
$arr = array_slice($arr, 100);

/*for ($i = 0; $i < 100; $i++) {
    $temp = rand(1, 200);

    while (in_array($temp, $arr)) {
        $temp = rand(1, 200);
    }

    $arr[] = $temp;
}*/

print_r($arr);
