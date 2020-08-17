<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/dbconnection.php';
$query = 'select id from customer';
$stmt = $conn->prepare($query);
$stmt->execute();
$results = $stmt->fetchColumn();
if ($results > 0) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = 'delete from customer where id=:id';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('Location:../index.php');
    }
} else {
    header('Location:../index.php');
}
