<?php
    $user_dsn = 'mysql:host=localhost;dbname=watcoweather';
    $user_username = 'username';
    $user_password = 'password';

    try {
        $u_db = new PDO($user_dsn, $user_username, $user_password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>