<?php
$name = readline("Enter you name: ");
$age = (int) readline("How old are you?: ");

$result = "Hello $name! You are $age years old!";
if ($age < 18) {
    $result = "$result You are too young to enter!";
}

echo $result;
