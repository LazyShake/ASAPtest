<?php
function main()
{
    $functionName = parseCommand();

    writeToLog("Вызвана функция $functionName", "Function");

    if (function_exists($functionName)) {
        $functionName();
    } else {
        echo "Вызываемая функция не существует!" . PHP_EOL;
    }
}

function parseCommand()
{
    $functionName = "man";

    if (isset($_SERVER['argv'][1])) {
        $functionName = match ($_SERVER['argv'][1]) {
            'rand' => "randomNumberGame",
            default => 'man'
        };
    }
    return $functionName;
}
