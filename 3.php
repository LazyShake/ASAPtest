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

for($i = 0; $i < count($arr)-1;$i+=2){
        $arr[count($arr)-$i-1] = $arr[(int) (count($arr)-$i-1)/2];
        $arr[count($arr)-$i-2] = $arr[(int) (count($arr)-$i-1)/2];
}

var_dump($arr);