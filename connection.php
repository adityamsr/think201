<?php
$con = mysqli_connect("localhost","root","","think");
if($con)
{
	echo "";
}
else{
	die("Not connected because".mysqli_connect_error());
}
?>