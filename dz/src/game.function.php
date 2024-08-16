<?php

function randomNumberGame(): void
{
    writeToLog("---------------------------------------", "Game");
    writeToLog("Запущена игра \"Угадай число\"", "Game");

    $name = readline("Ваше имя: ");
    echo "Привет, $name" . PHP_EOL;

    $target = rand(0, 100);

    for ($i = 1; $i < 11; $i++) {
        $answer = (int)readline("Ваш ответ: ");

        writeToLog("Попытка #" . $i . " пользователя $name: $answer", "Game");

        if ($answer > $target) {
            echo "Ваш ответ больше" . PHP_EOL;

            writeToLog("Ответ пользователя больше", "Game");
        } elseif ($answer < $target) {
            echo "Ваш ответ меньше" . PHP_EOL;

            writeToLog("Ответ пользователя меньше", "Game");
        } else {
            echo "Поздравляю, $name" . PHP_EOL;
            echo "Вы угадали число $target c " . $i . " попытки" . PHP_EOL;

            writeToLog("Пользователь угадал число с " . $i . "попытки", "Game");

            break;
        }
    }

    writeToLog("Окончена игра \"Угадай число\"", "Game");
    writeToLog("---------------------------------------", "Game");
}
