<?php

$conn = mysqli_connect('localhost','root','','hmsdb');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$query = "select * from doctorlog";
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
         background-image: url('images/record1.jfif');
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
      <h1>Doctor's Records of <br>LifeCare</h1>

        <div class="table-responsive">
          <table class="table">
            <br><tr>
              <th>ID</th>
              <th>First_Name</th>
              <th>Last_Name</th>
              <th>Date_Of_Birth</th>
              <th>Gender</th>
              <th>Username</th>
              <th>Email</th>
              <th>Phone_No.</th>
              <th>Qualification</th>
              <th>Specialist</th>
              <th>Date_Appointed</th>
              <th>Time_From</th>
              <th>Time_To</th>
              <th>Salary</th>
              <th colspan="2">Action</th>
            </tr>

            <?php
            while($rows=mysqli_fetch_assoc($data))
            {
              ?>
              <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><?php echo $rows['first_name'] ?></td>
                <td><?php echo $rows['last_name'] ?></td>
                <td><?php echo $rows['date_of_birth'] ?></td>
                <td><?php echo $rows['gender'] ?></td>
                <td><?php echo $rows['username'] ?></td>
                <td><span class="email-style"><?php echo $rows['email'] ?></span></td>
                <td><?php echo $rows['phone_no'] ?></td>
                <td><?php echo $rows['qualification'] ?></td>
                <td><?php echo $rows['specialist'] ?></td>
                <td><?php echo $rows['date_appointed'] ?></td>
                <td><?php echo $rows['time_from'] ?></td>
                <td><?php echo $rows['time_to'] ?></td>
                <td><?php echo $rows['salary'] ?></td>
                <td><a href="Edit.php?ii=<?php echo $rows['id']; ?>" data-bs-toggle="tooltip" title="Update"><i class="fas fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="delete.php?ii=<?php echo $rows['id']; ?>" onclick="return checkdelete()" data-bs-toggle="tooltip" title="Delete"><i class="fas fa-trash" aria-hidden="true"></i></a></td>
              </tr>
              <script>
                function checkdelete()
                {
                  return confirm('Are you sure you want to delete');
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
