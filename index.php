<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<h1>Vote</h1>
<form action="save.php" method="POST">
  <input type="submit" name="reply" class="btn btn-success btn-block" value="yes">
  <input type="submit" name="reply" class="btn btn-success btn-block" value="no">
  <input type="submit" name="reply" class="btn btn-success btn-block" value="null">
</form>

<?php
  $query = "SELECT * FROM vote";
  $query1 = "SELECT * FROM vote WHERE reply='yes'";
  $query2 = "SELECT * FROM vote WHERE reply='no'";
  $query3 = "SELECT * FROM vote WHERE reply='null'";
  $result = mysqli_query($conn, $query);
  $result1 = mysqli_query($conn, $query1);
  $result2 = mysqli_query($conn, $query2);
  $result3 = mysqli_query($conn, $query3);
  $numero= mysqli_num_rows($result);
  $numero1= mysqli_num_rows($result1);
  $numero2= mysqli_num_rows($result2);
  $numero3= mysqli_num_rows($result3);
  $percentage1=($numero1/$numero)*100;
  $percentage2=($numero2/$numero)*100;
  $percentage3=($numero3/$numero)*100;
  $maxnumber=max($numero1, $numero2, $numero3);
  if($maxnumber==$numero1){
    $winner="SI";
  }
  elseif ($maxnumber==$numero2) {
    $winner="NO";
  }
  else{
    $winner="NULL";
  }

  if($numero>10){ ?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>YES</th>
      <th>NO</th>
      <th>NULL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $numero1; ?></td>
      <td><?php echo $numero2; ?></td>
      <td><?php echo $numero3; ?></td>
    </tr>
    <tr>
      <td><?php echo round($percentage1, 0), "%"; ?></td>
      <td><?php echo round($percentage2, 0), "%"; ?></td>
      <td><?php echo round($percentage3, 0), "%"; ?></td>
    </tr>
  </tbody>
</table>

<h1>The winner is <?php echo $winner ?></h1>
<?php



 } ?>

<?php include('includes/footer.php'); ?>