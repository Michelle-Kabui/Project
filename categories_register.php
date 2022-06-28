<?php

require("connect.php");

print_r($_POST);
$category_id=$_POST["category_id"];
$categorey_name=$_POST["categorey_name"];



$sql= "INSERT INTO estiloso.categories(category_id,category_name)
       VALUES ('$category_id','$categorey_name')";

  echo $sql;

  if(mysqli_query($conn,$sql))
  {
      echo "New record created successfully";
  }
  else
   {
   echo "There is an error<br><br>" ;
 }


?>
