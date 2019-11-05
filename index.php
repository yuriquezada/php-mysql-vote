<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<h1>Probando turismoi</h1>
<form action="save.php" method="POST">
  <input type="submit" name="reply" class="btn btn-success btn-block" value="yes">
  <input type="submit" name="reply" class="btn btn-success btn-block" value="no">
  <input type="submit" name="reply" class="btn btn-success btn-block" value="null">
</form>


<?php include('includes/footer.php'); ?>