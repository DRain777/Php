<?php
// типы переменных
$name = "Denis";
$name2 = "Денис";
$int = 7 ;//integer цело численное значение 
$string = '7';

print $int + $string; // 14 перреведет строку в число

var_dump($name);
var_dump($name2);
var_dump($int);

//C:\wamp64\www\php\Lesson_2\index.php:6:string 'Denis' (length=5)
//C:\wamp64\www\php\Lesson_2\index.php:7:string 'Денис' (length=10) utf-8 Кирилица 1 символ за 2
// C:\wamp64\www\php\Lesson_2\index.php:9:int 7


$int = 5;
$name = "Alex Kordow";
$name2 = "Cris";
echo $name . " " . $name2; // Alex Kordow Cris
print  "<br>";

$float = 7.75;
print $int + $float;
var_dump($int + intval($float));// C:\wamp64\www\php\Lesson_2\index.php:27:int 14

 print gettype($int); //integer
 print gettype($float); //duble
 settype($float,"int");
 print $float;

$bool = TRUE;//True true и так и так правельно  тип Boolean логический тип 

$null = null; // null
////////////////////////Массивы
$array = [];// new 
$array2 = array();// old
$array3 = [7,'Denis','Yan',8];// new 
var_dump($array3);
print is_int($float); //1 true
print is_int($name);
              //////////// Ассоциативный массив
$args_old = array('name' => 'Denis','age' => 30, 'iq' => 78, 'weight' => 80.7);
$args = ['name' => 'Denis', 'age' => 30, 'iq' => 78, 'weight' => 80.7];
$fruits = ['apple','ananas','bananas','oranges'];

var_dump($args);
///////      массив в нутри массива в массиве также могут содержаться переменные 
$arr = [$int,
$float,
$fruits,
'gear' =>'bearing','bolt'];
var_dump($arr);

print count($fruits); ///4

print $fruits[0];
print  $args['name'];

array_push($fruits,'mango');// добовляем в массив данные В КОНЕЦ МАССИВА!!!
var_dump($fruits);
print_r ($fruits);// метод выводит массив на экран
print '<br>';
array_unshift($fruits,'mango','kivi'); // добовляем в массив данные В Начало МАССИВА!!!
print_r($fruits);// метод выводит массив на экран


/////////////////////////////////////////////////////////////////////////
// функции сортировки массива 
print asort($fruits);
print '<br>';
print arsort($fruits);

print '<br>';
$obj = new stdClass; // Создания Обьекта
$obj->name = "Denis";
print_r($obj);
//////////////////////////////
// тип данных ресурс RESourch 


?>