<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/dbconnection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location:../index.php');
}
if (isset($_POST['submit'])) {
    if (!empty($_POST['first_name'])) {
        $fname = $_POST['first_name'];
    }
    if (!empty($_POST['last_name'])) {
        $lname = $_POST['last_name'];
    }
    $query = "update customer set first_name=:first_name,last_name=:last_name where id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':first_name', $fname);
    $stmt->bindParam(':last_name', $lname);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('Location:../index.php');
}
