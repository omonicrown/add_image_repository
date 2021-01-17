<?php
//all the variables defined here are accessible in all the files that include this one
$db= new mysqli('localhost','root','','pictures_upload')or die("Could not connect to mysql".mysqli_error($con));

?>