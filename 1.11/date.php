<?php

$text = '24.03.2025';

$pattern = "/[0-9]/";
$numbers = [];
preg_match_all($pattern, $text, $numbers);

$chislo = (substr(implode('', $numbers[0]),0,2) .'');
// print($chislo);

// print('Число: ' . implode('', $numbers[0]) . '<br>');
print('Число: ' . $chislo . '<br>');


$pattern = "/[0-9]/";
$letters = [];
preg_match_all($pattern, $text, $letters);

$chislo = (substr(implode('', $letters[0]),0,2) .'');
print('Месяц: ' . implode('', $letters[0]) . '<br>');





$pattern = "/[0-9]/";
$symbols = [];
preg_match_all($pattern, $text, $symbols);
print('Год: ' . implode('', $letters[0]) . '<br>');
