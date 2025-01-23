<?php

$success = false;
$contact_submit = $_POST["contact_form"] ?? "";
$errors = "";

if ($contact_submit == "submited") {

    $name = strip_tags(trim($_POST['name'] ?? ''));
    $phone = strip_tags(trim($_POST['phone'] ?? ''));
    $text = strip_tags(trim($_POST['text'] ?? ''));
    $yes = strip_tags(trim($_POST['yes'] ?? ''));

    $body = $name . "\n" . $phone . "\n" . $text . "\n" . $yes;

    if ($name == '' || $phone == '' || $text == '') {
        $errors = "Заполните необходимые поля";
    } else if (mb_strlen($name, 'utf-8') > 20) {
        $errors = 'имя не может быть больше 20 символов';
    } else {
        $mailResult = mail("d.cochew777@gmail.com", 'заголовок письма', $body);
        if ($mailResult) {
            $success = true;
        } else {
            $errors = 'Ошибка отправки письма';
        }
    }
}

?>

<h1>Contact form</h1>

<style>
    label {
        width: 150px;
        display: block;
    }
</style>

<?php if ($success) {
    echo " Форма успешно отправлена";
} else {
    if (!empty($errors)) echo $errors;
?>

    <form action="" method="post">
        <p><label for="name">Name</label><input type="text" id="name" value="<?php if (isset($name)) echo $name; ?>" name="name"></p>
        <p><label for="phone">Phone</label><input type="number" id="phone" name="phone"></p>
        <p><label for="text">Text</label><textarea name="text" id="text"></textarea></p>
        <p><label for="yes">Yes or No</label><input type="checkbox" id="yes" name="yes"></p>
        <button name="contact_form" value="submited">Send Contact</button>

    </form>

<?php } ?>