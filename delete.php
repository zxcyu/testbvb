<?php

require_once 'PhoneBook.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $idToDelete = $_GET['id'];

    $phoneBook = new PhoneBook();
    if ($phoneBook->deleteContact($idToDelete)) {
        header('Location: index.php');
        exit;
    }
}
