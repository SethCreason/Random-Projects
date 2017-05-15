<?php
    $weather_dsn = 'mysql:host=localhost;dbname=weather_results';
    $weather_username = 'username';
    $weather_password = 'password';

    try {
        $db2 = new PDO($weather_dsn, $weather_username, $weather_password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>