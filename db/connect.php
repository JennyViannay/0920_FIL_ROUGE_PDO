<?php

$dsn = "mysql:host=localhost:8889;dbname=preppdo";
$user = "root";
$password = "root";
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if ($pdo === false) {
    echo 'Error connection' . $pdo->error_log();
}