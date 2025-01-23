

<?php
$contact_submit = $_POST["contakt_form"] ?? "";
$search_submit = $_POST["search_form"] ?? "";


if ($contact_submit == "submited") {
    echo "Были отправлены данные из формы контактов";
}


if ($search_submit == "submited") {
    echo "Были отправлены данные из формы поиска";
}

?>

<form method="POST">
    <input type="text" name="name">
    <input type="number" name="id">
    <input type="text" name="name3">
    <input type="checkbox" name="yes">
    <select name="number[]" multiple="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <button name="contakt_form" value="submited">Send Contact</button>
</form>

<form method="POST">
    <input type="text" name="s">
    <button name="search_form" value="submited">Search</button>
</form>