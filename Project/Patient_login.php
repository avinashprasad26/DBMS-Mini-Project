<?php
session_start();
//Database Connectio//
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}

if(isset($_POST['Login']))
{
  $pusername = $_POST['pusername'];
  $password = $_POST['password'];
  $query = "select * from patientlog where pusername='$pusername' and password ='$password' ";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
    echo"your username and password is right";
    $_SESSION["user_name"]=$pusername;
    header('Location: Patient_data.php');
  }
  else{
    echo "your username and password is wrong";
    echo"<script>alert('Enter correct details');</script>";
  }

}
  mysqli_close($conn);


 ?>

<script type="text/javascript">

window.location="Patient_login.html";

</script>
