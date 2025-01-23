<?php


//print_r ($_GET);
//print_r ($_POST); 
//$name = $_POST['name'] ?? "";
$name = htmlspecialchars($_POST['name'] ?? ""); // заменяет html теги сущностями
echo "первое переданное значени: " . $name . "<br>";


$id = (int) strip_tags($_POST['id'] ?? "");
echo "Ваш ID: " . $id . "<br>";
if ($id == 0) {
    echo "вы ввели  не цифровое значение: ";
}



//$yes = strip_tags($_POST['yes'] ?? ""); // заменяет html теги сущностями
//var_dump($yes);



$yes = strip_tags($_POST['yes'] ?? "");
var_dump($yes);

if ($yes == "on") {
    echo "Checkbox включен";
} else {
    echo "Checkbox выключен";
}






$number = ($_POST['number'] ?? "");
var_dump($number);