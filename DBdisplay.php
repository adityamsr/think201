<?php

include("connection.php");
error_reporting(0);

// $con = mysqli_connect("localhost","root","","think");
mysqli_select_db($con,'think');
$q = "select * from thnikdb";
$data = mysqli_query($con, $q);
$num = mysqli_num_rows($data);

if ($num !=0)
{

	?>

	<html>
	<head>
       <link rel="stylesheet" href="think201css.css">
    </head>
    <body>
    	<center>
    		<form action="" method="POST">
    			<input type="text" name="rollno" placeholder="Enter your Roll No"/><br/>
    			<input type="submit" name="search" value="Search">
    		</form>	
    	</center>
	<table id="tableone">
		<tr>
			<th>Roll No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Degree</th>
			<th>Photo</th>
		</tr>
	    <hr>

   <?php

// This is search operation
  if(isset($_POST['search']))
   {
   	$rollno= $_POST['rollno'];
     
    $query = "select * from thnikdb where rollno='$rollno' ";
    $query_run = mysqli_query($con, $query);

     while ($row = mysqli_fetch_array($query_run))
  {
  	?>
  	<form action="" method ="POST">
  	  <input type="text" name="rollno" value="<?php echo $row['rollno'] ?>" /> <br>
  	  <input type="text" name="name" value="<?php echo $row['name'] ?>" /> <br>
  	  <input type="text" name="email" value="<?php echo $row['email'] ?>" /> <br>
  	  <input type="text" name="phone" value="<?php echo $row['phone'] ?>" /> <br>
  	  <input type="text" name="degree" value="<?php echo $row['degree'] ?>" /> <br>
  	  <input type="text" name="uploadfile" value="<?php echo $row['uploadfile'] ?>" /> <br>
  	</form><hr>
  	<?php
 }
}



// in this section entire details of students is displayed
  while ($result = mysqli_fetch_assoc($data))
  {
  	echo "<tr>
			<td>".$result['rollno']."</td>
			<td>".$result['name']."</td>
			<td>".$result['email']."</td>
			<td>".$result['phone']."</td>
			<td>".$result['degree']."</td>
			<td>".$result['uploadfile']."</td>
		</tr>";
  }
}
else
{
	echo"Record Not Found";
}

?>
</table>
</body>
</html>