<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8549de214a.js" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $(".hamburger").click(function(){
          $(".wrapper").toggleClass("collapse");
        });
      });
    </script>

  </head>
  <style media="screen">

*{
  margin:0;
  list-style:none;
  padding:0;
  text-decoration:none;
  box-sizing:border-box;
  font-family: 'Montserrat', sans-serif;
}

body{
  background-image: url('images/profile1.jpg');
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  font-family: new time romain;
}

.wrapper{
  margin: 10px;
}

.wrapper .top_navbar{
  width: calc(100% - 20px);
  height: 60px;
  display: flex;
  position: fixed;
  top: 10px;
}

.wrapper .top_navbar .hamburger{
  width: 70px;
  height: 100%;
  background: #2e4ead;
  padding: 15px 17px;
  border-top-left-radius: 20px;
  cursor: pointer;
}

.wrapper .top_navbar .hamburger div{
  width: 35px;
  height: 4px;
  background: #92a6e2;
  margin: 5px 0;
  border-radius: 5px;
}

.wrapper .top_navbar .top_menu{
  width: calc(100% - 70px);
  background: #fff;
  height: 100%;
  border-top-right-radius: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.wrapper .top_navbar .top_menu .logo{
  color: #2e4ead;
  font-size: 20px;
  font-weight: 700;
  letter-spacing: 3px;
}

.wrapper .top_navbar .top_menu ul{
  display: flex;
}

.wrapper .top_navbar .top_menu ul li a{
  display: block;
  margin: 0 10px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  border: 1px solid #2e4ead;
  text-align: center;
  border-radius: 50%;
  color: #2e4ead;
}

.wrapper .top_navbar .top_menu ul li a:hover{
  background: #4360b5;
  color: #fff;
}

.wrapper .sidebar{
  position: fixed;
  top: 70px;
  left: 10px;
  background: #2e4ead;
  width: 200px;
  height: calc(100% - 80px);
  border-bottom-left-radius: 20px;
  transition: all 0.3s ease;
}

.wrapper .sidebar ul li a{
  display: block;
  padding: 20px;
  position: relative;
  margin-bottom: 1px;
  color: #92a6e2;
  white-space: nowrap;
}

.wrapper .sidebar ul li a:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 3px;
  height: 100%;
  background: #92a6e2;
  display: none;
}

.wrapper .sidebar ul li a span.icon{
  margin-right: 10px;
  display: inline-block;
}

.wrapper .sidebar ul li a span.title{
  display: inline-block;
}

.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
  background: #4360b5;
  color: #fff;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
  display: block;
}


.wrapper .container{
  width: calc(100% - 200px);
  margin-top: 100px;
  margin-left: 200px;
  padding: 20px;
  padding-left: 200px;
  padding-right: 200px;
  transition: all 0.3s ease;
}

.wrapper .container .item{
  background:rgba(0,0,0,0.4);
  box-shadow: -1px 1px 60px 10px black inset;
  margin-bottom: 25px;
  margin-left: 150px;
  margin-right: 200px;
  padding: 75px;
  font-size: 20px;
}

.wrapper.collapse .sidebar{
  width: 70px;
}

.wrapper.collapse .sidebar ul li a{
  text-align: center;
}

.wrapper.collapse .sidebar ul li a span.icon{
  margin: 0;
}

.wrapper.collapse .sidebar ul li a span.title{
  display: none;
}

.wrapper.collapse .container{
  width: calc(100% - 70px);
  margin-left: 70px;

}

h1{
  font-size: 40px;
  color: black;
  margin-top: -10px;
  margin-bottom: -10px;
  text-align: center;
}

.form{
  text-align: center;
  font-size: 19px;
  margin-top: 20px;
  font-weight: normal;
}

.form-control {
  background: rgba(255,255,255, 0.2);
  border: 0px;
  border-radius: 0px;
  border-bottom: 2px solid white;
  font-size: 21px;
  color: white;
  margin-top: 20px;
}

.label{
  color: white;
}

.button{
  font-family: "Roboto", sans-serif;
  font-size: 18px;
  font-weight: bold;
  background: #1E90FF;
  width: 100px;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  color: #fff;
  border-radius: 8px;
  cursor: pointer;

}

.button:hover, .button:focus, .button:active{
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);

}

  </style>

  <body>

    <div class="wrapper">
      <div class="top_navbar">
        <div class="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </div>

        <div class="top_menu">
          <div class="logo">
            <?php
          if(isset($_SESSION["user_name"])){
          echo"Welcome to Doctor ".$_SESSION["user_name"];}
          ?></div>


          <ul>
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <a href="1st_page.html" class="button">Log Out</a>

          </ul>
        </div>
      </div>

      <div class="sidebar">
        <ul>

          <li><a href="#" class="active"><span class="icon"><i class="fas fa-user" aria-hidden: "true"></i></span><span class="title">Profile</span></a></li>
            <li><a href="doctor_duplicate_record1.php"><span class="icon"><i class="fas fa-user-md" aria-hidden: "true"></i></span><span class="title">Doctors Records</span></a></li>
              <li><a href="patient_duplicate_record.php"><span class="icon"><i class="fas fa-user-injured" aria-hidden: "true"></i></span><span class="title">Patient</span></a></li>
              <li><a href="appointment_duplicate_records.php"><span class="icon"><i class="far fa-calendar-check" aria-hidden: "true"></i></span><span class="title">Appointment</span></a></li>
              <li><a href="pharmacey_duplicate.php"><span class="icon"><i class="fas fa-book-medical" aria-hidden: "true"></i></span><span class="title">Pharmacy</span></a></li>
              <li><a href="Add_prescription.php"><span class="icon"><i class="fas fa-notes-medical" aria-hidden: "true"></i></span><span class="title">Add Prescription</span></a></li>
        </ul>
        </ul>
      </div>

      <?php
             $conn = mysqli_connect('localhost','root','','hmsdb');
             if (!$conn) {
               die('Connection Failed : '.mysqli_connect_error);
             }
             $v= $_SESSION['user_name'];
             $query ="select * from adminlog where username='$v'";

             $data=mysqli_query($conn,$query);
             $result=mysqli_fetch_assoc($data);
           ?>

<div class="container">
  <div class="item">
    <form class="form" action="" method="post">
      <h1 style="text-align:center">Doctor Profile</h1><br><br>
      <label for="" class="label">First Name :  </label>
      <input type="text" class="form-control" style="" name="first_name" value="<?php echo "   ".$result['first_name'] ?>"><br>
      <label for="" class="label">Last Name :  </label>
      <input type="text" class="form-control" name="first_name" value="<?php echo "   ".$result['last_name'] ?>"><br>
      <label for="" class="label">Date of Birth : </label>
      <input type="text" class="form-control" style="width: 245px;" name="first_name" value="<?php echo "   ".$result['date_of_birth'] ?>"><br>
      <label for="" class="label">Gender : </label>
      <input type="text" class="form-control" style="width: 297px;" name="first_name" value="<?php echo "   ".$result['gender'] ?>"><br>
      <label for="" class="label">Username :</label>
      <input type="text" class="form-control" style="width: 265px;" name="first_name" value="<?php echo "   ".$result['username'] ?>"><br>
      <label for=""class="label"> Email : </label>
      <input type="text" class="form-control" style="width: 312px;" name="first_name" value="<?php echo "   ".$result['email'] ?>"><br>
      <label for="" class="label">Phone No. : </label>
      <input type="text" class="form-control" name="first_name" value="<?php echo "   ".$result['phone_no'] ?>">

    </form>

  </div>

</div>




    </div>

  </body>
</html>
