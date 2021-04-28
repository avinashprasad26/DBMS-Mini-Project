<?php
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}

if(isset($_POST['Add']))
{

  $app_id=$_POST['app_id'];
  $app_date = $_POST['app_date'];
  $app_time = $_POST['app_time'];
  $pid = $_POST['pid'];
  $doc_id = $_POST['doc_id'];
  $symptoms = $_POST['symptoms'];
  $query = "insert into appointment values('$app_id','$app_date','$app_time','$pid','$doc_id','$symptoms')";
  if(mysqli_query($conn,$query))
  {
    echo "<script>alert('Registration Successfull...');</script>";
  }
  else{
    if($app_id==$app_id){
      echo "<script>alert('Duplicate Appointment ID....Please enter Different Appointment ID.');</script>";
    }
    //echo "Error: " .$sql."".mysqli_error($conn);
  }

}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </head>

  <style media="screen">


      *{
        margin: 0px;
        padding:0px;
      }

    body{
      background-image: url('images/appoi3.jpg!d');
      background-attachment: fixed;
      background-size: cover;
      font-family: new time romain;
    }

    h1{
      color:white;
      text-align: center;
      margin-top: 30;
      padding: 40px;
      margin-bottom: -40px;
      width: 100%;
      font-family: 'Lobster', cursive;
      font-size: 50px;
    }

    .label{
      font-size: 17px;
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

    .col-md-6{
      background:rgba(0,0,0,0.4);
      height: 500px;
      box-shadow: -1px 1px 60px 10px black inset;
    }

    .container{
      margin-top:80px;
    }

    option{
    color: #666;
    }

.btn-info{
  margin-top: 20px;
  margin-left:200px;
  width: 180px;
  font-size: 19px;
  border-radius: 1000px;
}



  </style>

  <body>

    <h1>Add Appointment</h1>
 <form class="" action="" method="post">


    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">

          <br><br><label class="label col-md-3 control-label" for="app_id">Appointment ID :</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="app_id" value="">
          </div>

          <label class="label col-md-3 control-label" for="app_date">Appointment Date : </label>
          <div class="col-md-9">
            <input type="date" class="form-control" name="app_date" value="">
          </div>

          <label class="label col-md-3 control-label" for="app_time">Booking Time : </label>
          <div class="col-md-9">
            <input type="time" class="form-control" name="app_time" value="">
          </div>

          <label class="label col-md-3 control-label" for="pid">Patient ID  : </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="pid" value="">
          </div>

          <label class="label col-md-3 control-label" for="doc_id">Doctor ID : </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="doc_id" value="">
          </div>

          <label class="label col-md-3 control-label" for="symptoms">Symptoms :</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="symptoms" value="">
          </div>

           <input type="submit" class="btn btn-info" name="Add" value="Add"><br><br><br>




           <p class="label"><b>NOTE :</b> If you wanna check Doctor's Record then <a href="doctor_duplicate_record.php">Click Here</a></p><br><br>


        </div>
        <div class="col-md-3"></div>

      </div>
  </div>
</form>


  </body>
</html>
