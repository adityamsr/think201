<?php
include("connection.php");
error_reporting(0);

         $rollno = $_GET['rollno'];
         $name = $_GET['name']; 
         $email = $_GET['email']; 
         $phone = $_GET['phone'];
         $degree = $_GET['degree'];
         $filename = $_FILES["uploadfile"] ["name"];
         $tempname = $_FILES["uploadfile"] ["tmp_name"];
         $folder = "student/".$filename;
         move_uploaded_file($tempname, $folder);

        $query= "INSERT INTO thnikdb VALUES ('$rollno', '$name', '$email', '$phone', '$degree', '$folder')";

$data = mysqli_query($con,$query);
if(data){
  echo"Your Record Has Been Inserted In DB"; 
}
else{
  echo"Not Inserted In DB"; 
}
?>





