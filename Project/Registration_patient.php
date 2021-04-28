<?php
//Database Connectio//
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}


if(isset($_POST['signup']))
{
  $id=$_POST['id'];
  $pfirst_name = $_POST['pfirst_name'];
  $plast_name = $_POST['plast_name'];
  $pdate_of_birth = $_POST['pdate_of_birth'];
  $pgender = $_POST['pgender'];
  $pusername = $_POST['pusername'];
  $pemail = $_POST['pemail'];
  $pPhone_no = $_POST['pPhone_no'];
  $password = $_POST['password'];
  $query = "insert into patientlog values('$id','$pfirst_name','$plast_name','$pdate_of_birth','$pgender','$pusername','$pemail','$pPhone_no','$password')";
  if(mysqli_query($conn,$query))
  {
    echo "<script>alert('Registration Successfull...');</script>";
  }
  else{
    echo "Error: " .$sql."".mysqli_error($conn);
  }

}
  mysqli_close($conn);


 ?>
