<?php 
include("db.php");


if (isset($_POST['reply'])){
  $valorcito= $_POST['reply'];
  echo $valorcito;
  $query = "INSERT INTO vote(reply) VALUES ('$valorcito')";
  // $query ="SELECT count(*) FROM vote";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
}

?>