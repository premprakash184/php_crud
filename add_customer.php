<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/header.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 my-5">
      <div class="mb-3">
        <a href="index.php">Go Back</a>
      </div>

      <form action="/query/insert.php" method="POST">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control">
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
      </form>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php';
