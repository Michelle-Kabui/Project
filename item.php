<?php

require("connect.php");


$sql1 = "SELECT * FROM Categories";
$all_ctgr1 = mysqli_query($conn, $sql1);


$sql2 = "SELECT * FROM Subcategories";
$all_ctgr2 = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Products</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="item.css?v=<?php echo time() ?>">
  <meta charset="UTF-I 8">
  <meta nam="viewport" content="width=device-width, inital-scale=1">
</head>

<body>
  <img src="Unknown.png" class="image">
  <h1 class="special"> ESTILOSO </h1>
  <div class="products">
    <h1> Products </h1>

    <form action="item_register.php" method="post" enctype="multipart/form-data">
      <p>Product Name:</p>
      <input type="text" name="product_name" placeholder="product_name">
      <p>Product Description:</p>
      <input type="text" name="product_description" placeholder="product_description">
      <p>Product Image:</p>
      <input type="file" name="product_image" placeholder="product_image">
      <p>Unit Price:</p>
      <input type="number" name="unit_price" placeholder="unit_price">
      <p>Available Quantity:</p>
      <input type="number" name="available_quantity" placeholder="available_quantity">
      <p>Category:</p>
      <select name="category_id" id="CategoryID"><br>
        <?php
        while ($category = mysqli_fetch_assoc($all_ctgr1)) :;
        ?>
          <option value="<?php echo $category["category_id"]; ?>">
            <?php
            echo $category["category_name"];
            ?>

          </option>
        <?php
        endwhile;
        ?>
      </select>
      <p>Subcategory:</p>
      <select name="subcategory_name" id="subCategoryname"><br>
        <?php
        while ($subcategory = mysqli_fetch_assoc($all_ctgr2)) :;
        ?>
          <option value="<?php echo $subcategory["subcategory_name"]; ?>">
            <?php
            echo $subcategory["subcategory_name"];
            ?>

          </option>
        <?php
        endwhile;
        ?>

      </select>

      <button type="submit">add</button>
    </form>
  </div>

  <footer>
    <hr class="extra">
    <div class="terms"><a href="#">Terms and Conditions</a></div><br>
    <div class="account"><a href="#">My account</a></div><br>
    <div class="more"> For more information: Call:0716636272<br>Email: estil-oso.gmail.com<br></div>
    <div class="facebook">Facebook:<br>Estil fashions</div>
    <div class="instagram">Instagram:<br> Estil.fashion</div>

  </footer>
</body>

</html>