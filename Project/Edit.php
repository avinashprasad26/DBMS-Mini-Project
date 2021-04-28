<?php
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$ids=$_GET['ii'];
$showquery="select * from doctorlog where id='$ids'";
$showdata=mysqli_query($conn,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['update']))
{

  $id=$_POST['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $date_of_birth = $_POST['date_of_birth'];
  $gender = $_POST['gender'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $qualification = $_POST['qualification'];
  $specialist = $_POST['specialist'];
  $date_appointed = $_POST['date_appointed'];
  $time_from = $_POST['time_from'];
  $time_to = $_POST['time_to'];
  $salary = $_POST['salary'];

  $query = " update doctorlog SET id=$id, first_name='$first_name',last_name='$last_name',date_of_birth='$date_of_birth',gender='$gender',username='$username',email='$email',phone_no='$phone_no',qualification='$qualification',specialist='$specialist',date_appointed='$date_appointed',time_from='$time_from',time_to='$time_to',salary=$salary where id=$id";

  if(mysqli_query($conn,$query))
  {
    echo"<script>alert('Updated Successfully...');</script>";
    header('Location: Doctors_Record.php');
  }
  else{
      echo"<script>alert('Updation Failed...');</script>";
      echo "Error: " .$sql."".mysqli_error($conn);
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
        background-image: url('images/add.png');
        background-attachment: fixed;
        background-size: cover;
        font-family: new time romain;
      }

      h1{
        color:white;
        text-align: center;
        margin-top: 0;
        padding: 20px;
        margin-bottom: 0px;
        width: 100%;
        font-family: 'Lobster', cursive;
        font-size: 50px;
      }

      .label{
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

      .col-md-6{
        background:rgba(0,0,0,0.4);
        height: 850px;
        box-shadow: -1px 1px 60px 10px black inset;
      }

      .container{
        margin-top:10px;
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

        <h1>Update the Details of Doctor</h1>
     <form class="" action="" method="POST">


        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>


            <div class="col-md-6">

              <label class="label col-md-3 control-label" for="id">ID : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="id" value="<?php echo $arrdata['id'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="first_name">First Name : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="first_name" value="<?php echo $arrdata['first_name'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="last_name">Last Name : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="last_name" value="<?php echo $arrdata['last_name'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="date_of_birth">Date of Birth : </label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="date_of_birth" value="<?php echo $arrdata['date_of_birth'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="gender">Gender : </label>
              <div class="col-md-9">
                <select class="form-control" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option></select>
              </div>

              <label class="label col-md-3 control-label" for="username">Username :</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="username" value="<?php echo $arrdata['username']; ?>">
              </div>


              <label class="label col-md-3 control-label" for="email"> Email : </label>
              <div class="col-md-9">
                <input type="email" class="form-control" name="email" value="<?php echo $arrdata['email']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="phone_no">Phone No. : </label>
              <div class="col-md-9">
                <input type="tel" class="form-control" name="phone_no" value="<?php echo $arrdata['phone_no']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="qualification">Qualification : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="qualification" value="<?php echo $arrdata['qualification']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="specialist">Specialist : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="specialist" value="<?php echo $arrdata['specialist']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="date_appointed">Date Appointed : </label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="date_appointed" value="<?php echo $arrdata['date_appointed']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="time_from">Time From : </label>
              <div class="col-md-9">
                <input type="time" class="form-control" name="time_from" value="<?php echo $arrdata['time_from']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="time_to">Time To : </label>
              <div class="col-md-9">
                <input type="time" class="form-control" name="time_to" value="<?php echo $arrdata['time_to']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="salary">Salary : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="salary" value="<?php echo $arrdata['salary']; ?>">
              </div>

               <input type="submit" class="btn btn-info" name="update" value="update">


            </div>
            <div class="col-md-3"></div>

          </div>
      </div>
    </form>

  </body>
</html>
