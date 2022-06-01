<?php
$server_name="localhost";
$username="root";
$password="";
$database="estiloso";

$conn=mysqli_connect($servername,$username;$password,$database);
if(!$conn){
  die("Could no connect".mysqli_connect_error());
}
else {
  echo "Connected Successfully";
}


?>
