<?php
/*
 * Дан массив в 10 элементов,
 * у которого заполнены только первые 5 значений, например $arr =  [1, 2, 3, 4, 5, 0, 0, 0, 0, 0];
 * Напишите алгоритм, распределяющий эти 5 значений по всему массиву так:
 * например $arr =  [1, 1, 2, 2, 3, 3, 4, 4, 5, 5];
 * Первые 5 значений могут быть любые.
 * В идеале сделать циклом в 5 итераций или функциями для работы с массивами
 */

$arr =  [1, 2, 3, 4, 5, 0, 0, 0, 0, 0];
//var_dump($arr);

for ($i = 5; $i >= 1; $i -= 1) {
        $arr[($i * 2) - 1] = $arr[$i - 1];
        $arr[($i * 2) - 2] = $arr[$i - 1];
}

print_r($arr);
