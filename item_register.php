<?php

require("connect.php");

$product_name = $_POST["product_name"];
$product_description = $_POST["product_description"];
$unit_price = $_POST["unit_price"];
$available_quantity = $_POST["available_quantity"];
$subcategory_name = $_POST["subcategory_name"];

// bellow piece of code works like the one's above, it gets the details of the image once the form is submitted
$product_image = $_FILES['product_image']['name'];

//bellow is code where whatever image you upload is stored locally in your server

//what i mean is that all the work we are doing in php html and css files are all included in the xampp server by default....
// hence why your php files are able to display content

//that is styled (if linked to css that is) so the code below will be copied from wherever you have it in your device and stored in the xampp server hence no need to copy down
//the photos into the folder called uploads


//*****NB******
//always make sure that the uploads folder is in the same location as this item_register at all times!!!!
$destination = "uploads/" . basename($_FILES['product_image']['name']);


$sql = "INSERT INTO `product`( `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `subcategory_name`) 
VALUES ('$product_name','$product_description','$product_image','$unit_price','$available_quantity','$subcategory_name')";

if (mysqli_query($conn, $sql)) {
  move_uploaded_file($_FILES['product_image']['tmp_name'], $destination);
  //this part will do the copying of the file into the destination folder that we have declaed above
  echo "New record created successfully";
} else {
  echo "There is an error". mysqli_error($conn) ."<br><br>";
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item Register:</title>
</head>
<body>
  <br>
  <div class="link">
    <a href="view-items.php">Viewing your items</a>
  </div>
  <br>
</body>
</html>