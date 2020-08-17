<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
try {
    $conn = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
