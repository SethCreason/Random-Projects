<?php
    $database_dsn = 'mysql:host=localhost;dbname=bulletins';
    $database_username = 'username';
    $database_password = 'password';

    try {
        $db = new PDO($database_dsn, $database_username, $database_password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>