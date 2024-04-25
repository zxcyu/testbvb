<?php

require_once 'PhoneBook.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $phoneBook = new PhoneBook();
    if ($phoneBook->addContact($name, $phone)) {
        header('Location: index.php');
        exit;
    } else {
        header('Location: index.php?error=1');
        exit;
    }
}
?>