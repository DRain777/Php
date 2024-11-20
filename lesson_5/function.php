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

    if (file_exists('header.php')) {
        require_once 'header.php';
    } else {
        echo "Файл header.php не найден.";
    }

    function sum($a, $b)
    {
        print $a + $b;
    };

    sum(7, 7);



    function subtraction($a,$b,$c = 0,$d = 0){
        print $a - $b;

    };
    subtraction(17,5);

    ?>

</body>

</html>