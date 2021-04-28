<?php

$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$id=$_GET['ii'];
$query="delete from doctorlog where id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
  header('Location: Doctors_Record.php');
    echo"<script>alert('Record deleted from Database');</script>";
}
else {
  echo"<script>alert('Failed to delete the record');</script>";
}

 ?>
