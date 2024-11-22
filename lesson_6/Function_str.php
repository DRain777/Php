<?php
//trim    вырезать  функция вырезат символы которые я задам 
//Удаляет пробельные или другие символы в начале и конце строки
//ltrim  left  
//rtrim   right
//strip_tags  уберает теги
//xss атака когда html код в писывают скрит который например ворует куки
//htmlspecialchars() заменяет теги сущностями и код не интеплитируется как html текст
//htmlspecialchars_decode() действует наоборот &lt.....декодирует в html код
//htmlentities()
// str_replace заменяет  данные  регистро зависимая функция
// str_ireplace    регистро НЕзависимая функция
//strtoupper преобразует строку в верхний регистр
//strtolower преобразует строку в нижний регистр
//strlen возвращает длину строки и  сколько байт
//mb_strlen выводит длинну строки а не количество байт  мульти байт для подчета Кирилицы на utf_8
// strpos // mb_strpos функция показывает в каком индексе находся значения которую я ищи.
 


$message = "      hellow, world    .";
$mes = "hellow, world.";
$message2 = "<strong> hello  </strong> world    .";
$message3 = "<strong> hello  </strong>  <h1>  world </h1>  .";
$message3 = "<strong> hello  </strong>  <h1>  world </h1>  .";
$message4 = "<strong> hello  </strong>  <h1>  world </h1> <script>alert('test')</script>  .";
$message5 = 'hellow [b]world[/b]';
$message6 = '<i>hellow</i>  <b>world</b>';






var_dump($message);
$result = rtrim($message,"d.");
$result2 = ltrim($message, "h");
print  $result; // hellow, world! .
print  "<br>";
print $result2; // hellow, world! .
print  "<br>";
print $message2;
$resuil_3 = strip_tags($message3);
print  "<br>";
print $resuil_3;
print  "<br>";
print $message4;

$resuil_4 = htmlspecialchars($message4);
print  "<br>";
print $resuil_4;

$resuil_5 = str_replace('[b]','<b>',$message5);
print  "<br>";
print $resuil_5;

$resuil_6 = str_replace('hellow', 'privet', $message5);
print  "<br>";
print $resuil_6;



///////////////////////////////////////////////////

$bb_code = ['[b]','[/b]', '[i]', '[/i]'];
$html_code = ['<b>', '</b>','<em>', '</em>'];

$resuil_7 = str_replace($bb_code, $html_code, $message5);
print  "<br>";
print $resuil_7;

/////////////////////////////////////////
$message6 = "<h3>the</h3>
<i>my</i>  <b>world</b>";
$result_8 = strip_tags($message6);
$result_8 = strip_tags($message6,['b'.'i']);
$result_8 = htmlspecialchars($message6);


print  "<br>";
print $result_8;


/////////////////////////////////////

$result_9 = strpos($mes,"h");
print  "<br>";
print $result_9;

 

if($result_9 !== false) {
    print " позия буквы = " . $result_9;

}else{
    print " нету в строке такой буквы";
}


?>