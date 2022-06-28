<?php

require("connect.php");

$subcategory_name=$_POST["subcategory_name"];
$category_id=$_POST["category_id"];


$sql = "INSERT INTO `subcategories`(`subcategory_name`, `category_id`) VALUES ('$subcategory_name','$category_id')";

                if(mysqli_query($conn,$sql))
                {
                    echo "New record created successfully";
                }
                else
                 {
                 echo "There is an error<br><br>" ;
               }



?>
