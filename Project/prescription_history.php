<?php
session_start();
$p=$_SESSION["user_name"];
$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$query = "select * from prescription pres, doctorlog d,patientlog p where pres.d_id=d.id and pres.p_id=p.id and p.pusername='$p'";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total != 0){
   echo"<script>alert('Table has $total records.');</script>";
 }
 else{
     echo"<script>alert('Table has no records.');</script>";
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8549de214a.js" crossorigin="anonymous"></script>


  </head>

     <style media="screen">

       *{
         margin: 0px;
         padding:0px;
       }

       body{
         background-image: url('images/pres3.jpg');
         background-attachment: fixed;
         background-size: cover;
         font-family: new time romain;
       }

       h1{
         color:white;
         text-align: center;
         margin-top: 0;
         padding: 20px;
         margin-bottom: 50px;
         width: 100%;
         font-family: 'Lobster', cursive;
           font-size: 50px;
       }

       th{
         color: white;
         font-size: 25px;
        }

        td{
          color: white;
          font-size: 25px;
        }

     </style>

  <body>

    <div class="container">
      <h1>Prescription History<br></h1>

        <div class="table-responsive">
          <table class="table">
            <br><tr>
              <th>Prescription_No</th>
              <th>Prescription_Date</th>
              <th>Details</th>
            </tr>

            <?php
            while($rows=mysqli_fetch_assoc($data))
            {
              ?>
              <tr>
                <td><?php echo $rows['pres_no'] ?></td>
                <td><?php echo $rows['pres_date'] ?></td>
                <td><a href="patient_prescription.php?pres=<?php echo $rows['pres_no']; ?>" onclick="return checkdelete()" data-bs-toggle="tooltip" title="Details"><i class="fas fa-info-circle" aria-hidden="true"></i></a></td>
              </tr>
              <script>
                function checkdelete()
                {
                  return confirm('Are you sure you want to check the details');
                }
              </script>
              <?php
            }
            ?>

          </table>

        </div>

    </div>

  </body>
</html>
