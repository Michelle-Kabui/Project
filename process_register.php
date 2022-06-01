<?php

require("connect.php");
print_r($_POST);
$sql= "INSERT INTO Register(fullname,username,email,password)
       VALUES ('$fullname','$username','$email','$password')";
?>
