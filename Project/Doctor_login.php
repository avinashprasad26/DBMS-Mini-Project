<?php
session_start();
//Database Connectio//
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}

if(isset($_POST['Login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "select * from doctorlog where username='$username' and password ='$password' ";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
    echo"your username and password is right";
    $_SESSION["user_name"]=$username;
    header('Location: Doctors_Data.php');
  }
  else{
    echo "your username and password is wrong";
    echo"<script>alert('Enter correct details');</script>";
  }

}
  mysqli_close($conn);


 ?>

<script type="text/javascript">

window.location="Doctor_login.html";

</script>
