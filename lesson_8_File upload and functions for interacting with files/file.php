<?php
//$_get $_post $_server $_file
//move_uploded_file функция которая перемещает загруженный файл в новое место
//print_r($_POST); метод пост не хронит в себе файлы
//print_r($_SERVER);

//print phpinfo();
//print_r($_FILES);
//file_exists принимает только будевое значение
//rename меняя название мы можем перемещатьфайлы по каталогам по папкам
//mkdir("folder") создает каталоги папки
//rmdir удоляет папки
//copy копирует файлы
//unlink будет удалять файл
// is_dir . is_file эти две функции проверяют на каталог и файл возвращает булевое значение 
// file_get_contents достает данные из файла
//n12br 
//file достает данные только записываеи их в массив
//FILE_IGNORE_NEW_LINES  убирает \n перенос сторки 
//FILE_SKIP_EMPTY_LINES
//file_put_contents() записывает в файл данные ЗаМЕНЯЕТ данные без file_append
//Lock_ex
//filesize  
//fopen,fwrite,fread,fclose
if (!empty($_FILES)) {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES['file']["name"]);
}
if (file_exists("uploads/Neyroseti-960x540 — копия.png")) echo "файл существует" . "\n" . PHP_EOL;
    

rename("uploads/1660911373_11-kartinkin-net-p-khakerskie-oboi-na-rabochii-stol-krasivo-12.jpg" ,  "uploads/1.jpg");
//rename("uploads/1.jpg",  "2.jpg"); файл переместится в основной каталог и переименуется
//rename("uploads" ,"uloads_2");
if (!file_exists("folder3/img")) {
    if (mkdir("folder3/img", 0777, true)) {
        echo "Folder 'folder3/img' created successfully.";
    } else {
        echo "Failed to create folder 'folder3/img'.";
    }
} else {
    echo "Folder 'folder3' already exists." . "PHP_EOL";
}

if(rmdir("folder3/img")) {
    echo "delite folder3/img" . "\n";
}

copy("uploads/1.jpg" , "folder3/1.jpg");
unlink("folder3/1.jpg");//удалит файл 1.jpg

$readmy = file_get_contents("ReadMy.txt");
print nl2br($readmy);
//$readmy = file_get_contents("ReadMy.txt",false, null,5, 10); print nl2br($readmy);
 
//$text = file_get_contents("https://profinansy.ru/market/dashboard");
//echo htmlspecialchars($text);

$text = file("ReadMy.txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//print $text;
var_dump($text);







$text = file("ReadMy.txt");

// Проверяем, существует ли второе значение в массиве
if (isset($text[1])) {
    echo $text[1]; // Выводим второе значение
} else {
    echo "Второе значение отсутствует в файле.";
}




//Если нужно удалить лишние пробелы или символы новой строки:
//Иногда строки могут содержать лишние пробелы или символы новой строки. Чтобы их удалить, ///используйте функцию trim():



if (isset($text[1])) {
    echo trim($text[1]); // Удаляем лишние пробелы и символы новой строки
} else {
    echo "Второе значение отсутствует в файле.";
}




//$text_file = file("https://www.php.net/manual/ru/function.move-uploaded-file.php");

//foreach ($text_file as $key => $line) {
//    echo $key . " :" . htmlspecialchars($line) . "<br>";
//}




$file = "ReadMy.txt";
$var = "hello/n";
 $bytes = file_put_contents($file,$var,FILE_APPEND);
echo $bytes; 




$handle = fopen($file, "a+" );// r только для чтения w только для записи a+ и то и другоу
$tt = fread($handle, filesize($file));
fwrite($handle,"script");
fclose($handle);
echo $tt;







?>



<form method="POST" action="" enctype="multipart/form-data">
    <p><input type="text" name="title"></p>
    <p><input type="file" name="file"></p>
    <button>Submit</button>
</form>