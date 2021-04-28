<?php

$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$ids=$_GET['ii'];
$query="delete from patientlog where id='$ids'";
$data=mysqli_query($conn,$query);
if($data)
{
  header('Location: patient_Record.php');
    echo"<script>alert('Record deleted from Database');</script>";
}
else {
  echo"<script>alert('Failed to delete the record');</script>";
}

 ?>
