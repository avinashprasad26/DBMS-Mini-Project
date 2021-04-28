<?php

//Database Connectio//
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}


if(isset($_POST['Add']))
{
  $id=$_POST['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $date_of_birth = $_POST['date_of_birth'];
  $gender = $_POST['gender'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $qualification = $_POST['qualification'];
  $specialist = $_POST['specialist'];
  $date_appointed = $_POST['date_appointed'];
  $time_from = $_POST['time_from'];
  $time_to = $_POST['time_to'];
  $salary = $_POST['salary'];
  $query = "insert into doctorlog values('$id','$first_name','$last_name','$date_of_birth','$gender','$username','$password','$email','$phone_no','$qualification','$specialist','$date_appointed','$time_from','$time_to','$salary')";
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
