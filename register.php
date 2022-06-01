
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="register.css">
<meta charset="UTF-I 8">
</head>
<body>
  <img src ="Unknown.png" class="image" >
  <h1 class= "special"> ESTILOSO </h1>
<h3>Kindly fill in the form to start your fashion experience with us</h3>
  <div class="registration-form">
    <h1> Registration Form</h1>

    <form action = "process_register.php" method="post">
      <p>Full Name:</p>
      <input type="text" name="fullname" placeholder ="Full Name">
      <p>Username:</p>
      <input type="text" name="username" placeholder="Username">
      <p>Email:</p>
      <input type ="email" name="email" placeholder="Email">
      <i class='fa fa-envelope'></i>
      <p>Password:</p>
      <input type="password" name="password" placeholder="Password">
      <i class='fa fa-lock'></i>
      <button type="submit">Register</button>
      <div class="agree">
      <input id="checkbox" type="checkbox" />
      <label for="checkbox"> I agree to the <a href="#">Terms and Conditions</a>.</label>
     </div>
    </form>

</body>
</html>
