<?php

$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$id=$_GET['ii'];
$query="delete from appointment where app_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
  header('Location: appointment_history.php');
    echo"<script>alert('Record deleted from Database');</script>";
}
else {
  echo"<script>alert('Failed to delete the record');</script>";
}

 ?>
