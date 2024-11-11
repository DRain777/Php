<?php

$a = 2;
$b = 3;
$c = 4; // Исправлено имя переменной на $c, так как была использована кириллическая буква "с"

// Если код в функции состоит из одной строки, скобки можно опустить
$result = ($a) ? "True" : "False";
print $result;

print "<br>";

$result2 = ($a > 1) ? "больше" : "меньше";
print $result2;

print "<br>";
// !==  не равно
// or - или  ||
// and - и &&
// if - если  else - иначе 

// Исправлено $a=5 на $a==5 для сравнения; также исправлено $b=3 на $b==3
if ($a == 5 && $b == 3) {
    print "a = 5 b = 3";
} else {
    print "a b не совпали";
}

print "<br>";

// Исправлено имя переменной на $c; также поправлены логические операторы для читаемости
if (($a == 2 || $b == 3) && $c == 4) {
    print "a b c True";
} else {
    print "a b c false";
}

print "<br>";
// switch case

switch ($a) {
    case 1:
        print "a = 1";
        break;
    case 2:
        print "a = 2";
        break;
    case 3:
        print "a = 3";
        break;
    default:
        print "a больше 3";
        break;
}

print "<br>";
// оператор match  
$fruit = 'apple';
$result3 = match($fruit) {
    'apple' => 'в корзине apple',
    'banana' => 'в корзине banana',
    'mango' => 'в корзине mango',
};

print $result3;

print "<br>";

// if-else с альтернативным синтаксисом, добавлена согласованность в HTML-теги и отступы
if ($a == 7) {
    print "hello world";
} else { ?>
    <h1>Run</h1>
<?php
}

// Использование альтернативного синтаксиса для if
if ($a): ?>
    <h1>True</h1>
<?php else: ?>
    <h1>False</h1>
<?php endif; ?>