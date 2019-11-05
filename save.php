<?php 
include("db.php");


if (isset($_POST['reply'])){
  $reply= $_POST['reply'];
  echo $reply;
  $query = "INSERT INTO vote(reply) VALUES ('$reply')";
  // $query ="SELECT count(*) FROM vote";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('Location: index.php');
}

?>