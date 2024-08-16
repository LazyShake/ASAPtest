<?php

function writeToLog(mixed $data, mixed $suffix = ''): void
{
    if (is_array($data) || is_object($data)) {
        $data = print_r($data, true);
    }

    $fd = fopen('.' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . "$suffix" . 'Logs.txt', 'a');

    fputs($fd, date("j.m.Y. H:i ") .  $data . PHP_EOL);

    fclose($fd);
}
