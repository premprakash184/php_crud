<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/dbconnection.php';

  if (isset($_POST['submit'])) {
      if (!empty($_POST['first_name'])) {
          $first_name = $_POST['first_name'];
      }
      if (!empty($_POST['last_name'])) {
          $last_name = $_POST['last_name'];
      }
      $query = 'insert into customer(first_name,last_name) values(:firstname,:lastname)';
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':firstname', $first_name);
      $stmt->bindParam(':lastname', $last_name);
      $stmt->execute();
      
      header("Location:../index.php");
  }
