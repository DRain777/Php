<?php
$a = 3;
$b = -$a;
print $b;







// Устанавливаем количество строк и столбцов в таблице
$line = 4;    // Количество строк
$column = 4;  // Количество столбцов

// Начинаем счетчик строк с 1
$i = 1;

// Выводим открывающий тег таблицы с границей (border)
print "<table border=\"1\">";

// Внешний цикл while, который будет обрабатывать каждую строку
while ($i <= $column) {
    // Начинаем новую строку в таблице
    print "<tr>";

    // Начинаем счетчик столбцов с 1
    $j = 1;

    // Внутренний цикл while, который будет обрабатывать каждую ячейку (столбец) в строке
    while ($j <= $line) {
        // Выводим ячейку таблицы с текстом, указывающим номер строки и столбца
        print "<td>Строка: " . $i . " Столбец: " . $j . "</td>";

        // Увеличиваем счетчик столбцов, чтобы перейти к следующей ячейке
        $j++;
    }

    // Закрываем текущую строку таблицы
    print "</tr>";

    // Увеличиваем счетчик строк, чтобы перейти к следующей строке
    $i++;
}

// Закрываем тег таблицы, чтобы завершить таблицу после завершения всех строк
print "</table>";


print "<br>";


 <?php
/*
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

*/

//$a = 3 ;
//$b = -$a;
//print $b;




//;$a = '3'; $b = +$a; var_dump($b);

//$c = 2;
//$c +=3;

//print $c;



//$c = 'My';
//$c .= 'Namy is';
//print $c;


/*


for($i = 1; $i <= 10; $i++) {
    print 'hello<br>';

};

$i = 0;
for(;;) {
    print "hellow<br>";
    $i++;
    if($i === 10)break;
};


$args = [1,2,5,7,4];
for($i = 0; $i < count($args);$i++) {
    print $args[$i] . '<br>';
};




$i = 1;
while($i <= 10) {
    print $i . '<br>';
    $i++;

};

 print '<br>';
$i = 10;
while($i >= 1) {
    print $i . '<br>';
    $i--;

};



$line = 4;
$column = 4;
$i = 1;
print "<table border=\"1\"></table>";
    while($i <= $line) {
        print "<tr>";
        $j = 1;
        while($j <= $column) {
            print "<td>Строка: ". $i ."Столбец: " . $j ." </td>";
            $j++;

        }
        
    print "</tr>";

    $i++;
 }

print "</tabl";

*/


$line = 2;
$column = 7;
$i = 1;
print "<table border=\"1\">";
while ($i <= $column) {
    print "<tr>";
    $j = 1;
    while ($j <= $line) {
        print "<td>Строка: " . $i . " Столбец: " . $j . "</td>";
        $j++;
    }
    print "</tr>";
    $i++;
}
print "</table>";


 print "<br>";


   

// $year = 1922;
//     print "<select>";
//         while($year <= 2022) :
//             print "<option value=" .$year.">$year</option>
//             $year++;
//         endwhile;    
//     print  "</select>";








    // Устанавливаем начальное значение переменной $year
$year = 1927;

// Открываем тег <select> для создания выпадающего списка
print "<select>";

// Запускаем цикл, который будет выполняться, пока $year не станет больше 2022
while($year <= 2024) :
    // Выводим каждый год как элемент <option> со значением $year
    print "<option value=\"" . $year . "\">" . $year . "</option>";
    
    // Увеличиваем значение переменной $year на 1, чтобы перейти к следующему году
    $year++;
endwhile;

// Закрываем тег <select> после окончания цикла
print "</select>";







// Устанавливаем начальное значение переменной $count
$count = 1;

// Начинаем цикл do...while
do {
    // Выводим текущее значение переменной $count
    print "Текущее значение: " . $count . "<br>";

    // Увеличиваем значение переменной $count на 1
    $count++;

    // Условие цикла: продолжаем, пока $count меньше или равно 5
} while ($count <= 5);










$a = 1; $b = 2; $c = 2;
if(($a == 1 ||$a == 2) && ($b == 1 || $b == 2) && ($c == 1 || $c == 2)) {
    print "<br>";

    Print "Есть такая циффра";

}




$num = "7";

$result = match ($num) {
     1 =>     "Совпадает 1",
     2 =>     "Совпадает  2",
     3 =>     "Совпадает   3", 
     4 =>     "Совпадает   4", 
     5 =>     "Совпадает    5", 
     6 =>     "Совпадает 6",
     7 =>     "Совпадает    7", 
     8 =>     "Совпадает   8", 
     $num <= 7 =>    "true",
     $num <= 10 =>    "true",
     $num <= 10 => "true",
     17=>     "Совпадает", 
     default => "нет совпадений"
    
    };

print "<br>$result";  



$a = 0;
do {
    print   $a . "<br>";
    $a++;
    # code...
} while ($a <= 11);


$names = ["denis","irina","yan","barsik"];
$electronik =
["apple" => 5,"samsung" => 7,"haisens" => 8];


foreach ($names as $name ) {
    $name .= ".";
    print $name."<br>";
    # code...
}

print_r($names);
print "<br>";



foreach ($electronik as $item ) {
    $item .= ".";
    print $item."<br>";
    # code...
}


foreach ($electronik as $key => $value) {
    print $key .  "  " ." =>" . "  " . $value . "<br>";
    # code...
}

