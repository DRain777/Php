<?php

//$_get ;
//var_dump($_GET);
//print_r($_GET);
//var_dump($_POST);
print_r($_POST);
$name =htmlspecialchars($_POST['name'] ?? "");
echo "вы передали первое значение".$name."<br>";

$id =strip_tags($_POST['id'] ?? "");

print "Это ваш Id ". $id;

?>

<form  method="POST" action="">
    
<input type="text" name="name">
<input type="text" name="id">
<input type="text" name="name3">
<button>Send</button>
</form>