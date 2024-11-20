<?php
require_once 'engine/math.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'header.php';

    if (function_exists('sum')) { //проверяет если в коде такая функция или файлы
        print 'exist';
    } else {
        echo "функция не найдена";
    }

    if (!function_exists('sum')) { //проверяет если в коде такая функция или файлы
         function sum( ) {
            print 'hellow';
         }
        print 'exist';
    } else {
        echo "функция не найдена";
    }

    


    if (file_exists('header.php')) { //проверяет если в коде такая функция или файлы
        require_once 'header.php';
    } else {
        echo "Файл header.php не найден.";
    }



   print 1 + sum(7,5);


   $result = sum(7, 5);

   


    
    ?>

</body>

</html>