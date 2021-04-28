<?php
session_start();
//Database Connectio
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}

if(isset($_POST['Login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "select * from adminlog where username='$username' and password ='$password' ";
  $result=mysqli_query($conn,$query);
  $total=mysqli_num_rows($result);
  if($total == 1)
  {
    echo"your username and password is right";
    $_SESSION["user_name"]=$username;
    header('Location: admin_data1.php');
  }
  else{
    echo "your username and password is wrong";
    echo"<script>alert('Enter correct details');</script>";
  }

}
  mysqli_close($conn);


 ?>

<script type="text/javascript">

window.location="Admin_login.html";

</script>
