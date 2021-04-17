<?php
include("connection.php");
error_reporting(0);

$rn = $_GET['rn'];
$nm = $_GET['nm'];
$em = $_GET['em'];
$ph = $_GET['ph'];
$dg = $_GET['dg'];
$uf = $_GET['uf'];

?>


<html>
<head>
<link rel="stylesheet" href="think201css.css">
</head>
<body>

 <form action="" method="GET"  enctype="multipart/form-data">
    <div class="container">
      <h1>Update Details</h1>
      <hr>
      <h4>Update the details and then click on the update button to insert it in the database.</h4>
      <hr>
      <label for="rollno"><b>Roll No</b></label>
      <input type="text" placeholder="Enter Roll No" name="rollno" value="<?php echo "$rn" ?>" required>

      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" value="<?php echo "$nm" ?>" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" value="<?php echo "$em" ?>" required>

      <label for="phoneno"><b>Phone No </b></label>
      <input type="text" placeholder="Enter Phone No" name="phone" value="<?php echo "$ph" ?>" required>
      
      <label for="degree"><b>Degree</b></label>
      <input type="text" placeholder="Enter Degree" name="degree" value="<?php echo "$dg" ?>" required>

      <label for="Photo"><b>Add Photo</b></label><br>
      <input type="file" name="uploadfile" value="<?php echo "$uf" ?>" required> <br><br>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" value="Update">Update Details</button>
      </div>
    </div>
  </form>
<?php

  if($_GET['submit'])
  {
    $rollno = $_GET['rollno'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $degree = $_GET['degree'];
    $uploadfile = $_GET['uploadfile'];

    $query = "UPDATE thnikdb SET name='$name', email='$email', phone='$phone', degree='$degree', uploadfile='$uploadfile' WHERE rollno='$rollno' ";

    $d = mysqli_query($con,$query);
    if($d)
    {
      echo "Record updated successfully.";
    }
    else
    {
       echo "Record not updated";
    }
  }

?>

</body>
