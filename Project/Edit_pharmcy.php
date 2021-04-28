<?php
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$ids=$_GET['ii'];
$showquery="select * from pharmacy where drug_id='$ids'";
$showdata=mysqli_query($conn,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['update']))
{

  $drug_id=$_POST['drug_id'];
  $drug_name = $_POST['drug_name'];
  $dosage = $_POST['dosage'];
  $batch_no = $_POST['batch_no'];
  $mfg_date = $_POST['mfg_date'];
  $exp_date = $_POST['exp_date'];
  $qnty = $_POST['qnty'];


  $query = " update pharmacy SET drug_id=$drug_id, drug_name='$drug_name',dosage='$dosage',batch_no=$batch_no,mfg_date='$mfg_date',exp_date='$exp_date',qnty=$qnty where drug_id=$ids";

  if(mysqli_query($conn,$query))
  {
    echo"<script>alert('Updated Successfully...');</script>";
    header('Location: pharmacey.php');
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
        margin-top: 30;
        padding: 40px;
        margin-bottom: -40px;
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
        height: 470px;
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

        <h1>Update the Details of Pharmacy</h1>
     <form class="" action="" method="POST">


        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>


            <div class="col-md-6">

              <label class="label col-md-3 control-label" for="drug_id">Drug ID : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="drug_id" value="<?php echo $arrdata['drug_id'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="drug_name">Drug Name : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="drug_name" value="<?php echo $arrdata['drug_name'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="dosage">Dosage : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="dosage" value="<?php echo $arrdata['dosage'] ?>">
              </div>

              <label class="label col-md-3 control-label" for="batch_no">Batch No : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="batch_no" value="<?php echo $arrdata['batch_no'] ?>">
              </div>



              <label class="label col-md-3 control-label" for="mfg_date">Mfg Date :</label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="mfg_date" value="<?php echo $arrdata['mfg_date']; ?>">
              </div>


              <label class="label col-md-3 control-label" for="exp_date">Exp Date : </label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="exp_date" value="<?php echo $arrdata['exp_date']; ?>">
              </div>

              <label class="label col-md-3 control-label" for="qnty">Quantity : </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="qnty" value="<?php echo $arrdata['qnty']; ?>">
              </div>



               <input type="submit" class="btn btn-info" name="update" value="update">


            </div>
            <div class="col-md-3"></div>

          </div>
      </div>
    </form>

  </body>
</html>
