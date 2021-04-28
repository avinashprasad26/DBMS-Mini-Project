<?php

//Database Connectio//
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}


if(isset($_POST['signup']))
{
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $date_of_birth = $_POST['date_of_birth'];
  $gender = $_POST['gender'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $Phone_no = $_POST['Phone_no'];
  $password = $_POST['password'];
  $query = "insert into adminlog values('$first_name','$last_name','$date_of_birth','$gender','$username','$email','$Phone_no','$password')";
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
