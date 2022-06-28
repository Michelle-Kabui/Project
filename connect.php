<?php
$server_name="localhost";
$username="root";
$password="";
$database="estiloso";

$conn=mysqli_connect("localhost","root","",$database);
if(!$conn){
  die("Could not connect".mysqli_connect_error());
}


?>
