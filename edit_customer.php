<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'?>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = 'select * from customer where id=:id';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($customers as $customer) {
            $first_name = $customer['first_name'];
            $last_name = $customer['last_name'];
        }
    } else {
        header('Location:index.php');
    }
?>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 mt-4">
      <h1 class="mb-4">Update Details</h1>
      <p><a href="index.php">Go Back</a></p>
      <form action="query/update.php?id=<?php echo $id;?>"
        method="POST">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control"
            value="<?php echo $first_name;?>">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control"
            value="<?php echo $last_name?>">
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-secondary">
      </form>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php';
