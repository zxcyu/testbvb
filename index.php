<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефонный справочник</title>
</head>
<body>
<h1>Телефонный справочник</h1>

<h2>Список контактов:</h2>
<ul>
    <?php
    require_once 'PhoneBook.php';
    $phoneBook = new PhoneBook();
    $contacts = $phoneBook->getContacts();
    foreach ($contacts as $id => $contact) {
        echo "<li>{$contact['name']}: {$contact['phone']} <a href='delete.php?id={$id}'>Удалить</a></li>";
    }
    ?>
</ul>

<h2>Добавить контакт:</h2>
<form action="add.php" method="post">
    Имя: <input type="text" name="name" required><br>
    Телефон: <input type="text" name="phone" required><br>
    <button type="submit">Добавить</button>
</form>
</body>
</html>