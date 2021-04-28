<?php
session_start();
$p=$_SESSION["user_name"];
$pn=$_GET['pres'];
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$query = "select * from prescription pres, doctorlog d,patientlog p where pres.d_id=d.id and pres.p_id=p.id and p.pusername='$p' and pres_no=$pn";
$data= mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($data);

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  </head>

<style media="screen">

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

section{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #112d42;
}

section::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: #03b9f4;
}

section .container{
  position: relative;
  min-width: 1100px;
  min-height: 670px;
  display: flex;
  z-index: 1000;
}

section .container .contactinfo{
  position: absolute;
  top: 40px;
  width: 350px;
  height: calc(100% - 80px);
  background: #0f3959;
  z-index: 1;
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 20px 20px rgba(0, 0, 0, 0, 0.2);
}

section .container .contactinfo h2{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}

section .container .contactinfo .info{
  position: relative;
  margin: 20px 0;
}

section .container .contactinfo .info li{
  position: relative;
  list-style: none;
  display: flex;
  margin: 20px 0;
  cursor: pointer;
  align-items: flex-start;
}

section .container .contactinfo .info li span:nth-child(1){
  width: 30px;
  min-width: 30px;
}

section .container .contactinfo .info li span:nth-child(1) img{
  max-width: 100%;
  filter: invert(1);
  opacity: 0.5;
}

section .container .contactinfo .info li span:nth-child(2){
  color: #fff;
  margin-left: 10px;
  font-weight: 300;
  opacity: 0.5;
}

section .container .contactinfo .info li:hover span:nth-child(1) img,
section .container .contactinfo .info li:hover span:nth-child(2){
  opacity: 1;
}

section .container .contactinfo .sci{
  position: relative;
  display: flex;
}

section .container .contactinfo .sci li{
  list-style: none;
  margin-right: 15px;
}

section .container .contactinfo .sci li a{
  text-decoration: none;
}

section .container .contactinfo .sci li a img{
  filter: invert(1);
  opacity: 0.5;
}

section .container .contactinfo .sci li:hover a img{
  opacity: 1;
}

.location{
height: 20px;
width: 20px;
}

.mail{
  height: 20px;
  width: 20px;
}

.phone{
  height: 20px;
  width: 20px;
}

section .container .contactform{
  position: absolute;
  padding: 70px 50px;
  background: #fff;
  margin-left: 150px;
  padding-left: 250px;
  width: calc(100% - 150px);
  height: 100%;
  box-shadow: 0 50px 50px rgba(0, 0, 0, 0.5);
}

section .container .contactform h2{
  color: #0f3959;
  font-size: 24px;
  font-weight: 500;
}

section .container .contactform .formBox{
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding-top: 30px;
}

section .container .contactform .formBox .inputbox{
  position: relative;
  margin: 0 0 35px 0;
}

section .container .contactform .formBox .inputbox.w50{
  width: 47%;
}

section .container .contactform .formBox .inputbox.w100{
  width: 100%;
}

section .container .contactform .formBox .inputbox input,
section .container .contactform .formBox .inputbox textarea{
  width: 100% !important;
  padding: 5px 0;
  resize: none;
  font-size: 18px;
  font-weight: 300;
  color: #333;
  border: none;
  border-bottom: 1px solid #777;
  outline: none;
}

section .container .contactform .formBox .inputbox textarea{
  min-height: 120px;
}

section .container .contactform .formBox .inputbox span{
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 18px;
  font-weight: 300;
  color: #333;
  transition: 0.5s;
  pointer-events: none;
}

section .container .contactform .formBox .inputbox input:focus ~ span,
section .container .contactform .formBox .inputbox textarea:focus ~ span,
section .container .contactform .formBox .inputbox input:valid ~ span,
section .container .contactform .formBox .inputbox textarea:valid ~ span{
  transform: translateY(-20px);
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  color: #ff568c;
}

.facebook{
  height: 30px;
  width: 30px;
}

.insta{
  height: 30px;
  width: 30px;
}

.linkedin{
  height: 30px;
  width: 30px;
}


</style>

  <body>

    <section>



    <div class="container">
      <div class="contactinfo">
        <div class="">
          <h2>Contact Info</h2>
          <ul class="info">
            <li>
              <span><img src="images/location-pin.png" class="location" alt=""></span>
              <span>No.14, Kanakapura Rd, Raghuvanahalli, Bengaluru,<br> Karnataka 560109</span>
            </li>

            <li>
              <span><img src="images/email.png" class="mail" alt=""></span>
              <span><?php echo $rows['email'] ?></span>
            </li>

            <li>
              <span><img src="images/smartphone.png" class="phone" alt=""></span>
              <span><?php echo $rows['phone_no'] ?></span>
            </li>
          </ul>
          </div>

          <ul  class="sci">
            <li><a href="#"><img src="images/facebook.png" class="facebook" alt=""></a></li>
            <li><a href="#"><img src="images/instagram.png" class="insta" alt=""></a></li>
            <li><a href="#"><img src="images/linkedin.png" class="linkedin" alt=""></a></li>
          </ul>

      </div>

      <div class="contactform">
        <h2>Prescription Form</h2>
        <div class="formBox">
          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['pres_no'] ?>" required>
            <span>Prescription NO</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['pres_date'] ?>" required>
            <span>Prescription Date</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['d_id'] ?>" required>
            <span>Doctor ID</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['first_name']." ".$rows['last_name'] ?>" required>
            <span>Doctor Name</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['p_id'] ?>" required>
            <span>Patient ID</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['pfirst_name']." ".$rows['plast_name'] ?>" required>
            <span>Patient Name</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['pgender'] ?>" required>
            <span>Patient Gender</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['pdate_of_birth'] ?>" required>
            <span>Patient DOB</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['symptom'] ?>" required>
            <span>Symptoms</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="" value="<?php echo $rows['medicine'] ?>" required>
            <span>Medincine</span>
          </div>

          <div class="inputbox w100">
            <input type="text" name="" rows="4" cols="50" value="<?php echo $rows['comments'] ?>" required>
            <span>Comments</span>
          </div>



        </div>

      </div>

    </div>
    </section>

  </body>
</html>
