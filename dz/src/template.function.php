<?php

function error(string $errorText): void
{
    echo "$errorText" . PHP_EOL;
}


function handleMan(): void
{
    $help = "Порядок вызова\r\n";
    $help .= "php app.php [COMMAND]\r\n";
    $help .= "Доступные комманды: \r\n";
    $help .= "rand - игра, \"угадай число\"";
    $help .= "help - помощь \r\n";

    echo $help;
}
