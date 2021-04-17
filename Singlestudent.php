 <?php

include("connection.php");
error_reporting(0);

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
  <table id="tableone">
    <tr>
      <th>Roll No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Degree</th>
      <th>Photo</th>
      <th>Update</th>
    </tr>
  

   <?php

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
      <td><a href='/Update.php?rn=$result[rollno]&nm=$result[name]&em=$result[email]&ph=$result[phone]&dg=$result[degree]&uf=$result[uploadfile]'>Edit</a></td>
    </tr>";
  }
}
else
{
  echo"Record Not Found";
}

// echo $result['id']." ".$result['name']." ".$result['email']." ".$result['phone']." ".$result['degree']." ".$result['uploadfile']."</br>";
?>
</table>
</body>
</html>