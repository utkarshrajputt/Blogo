<?php

include '../components/connect.php';

session_start();


if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $name = filter_var($name);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass);

   $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
   $select_admin->execute([$name, $pass]);

   if ($select_admin->rowCount() > 0) {
      $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
      $_SESSION['admin_id'] = $fetch_admin_id['id'];
      header('location:dashboard.php');
   } else {
      $message[] = 'Incorrect Username or Password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="icon" type="image/x-icon" href="../uploaded_img/blogger.ico">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>

<body style="padding-left: 0 !important;">

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }
   ?>


   <header class="adminh">

      <a href="../home.php" class="logo" style="font-weight:bolder;font-size:4rem;color:rgb(85,26,139);">Blogo.</a>

      <a href="dashboard.php" class="logo">Welcome<span> Author</span></a>

   </header>

   <!-- admin login form section starts  -->

   <section class="form-container">

      <form action="" method="POST">
         <h3>login now</h3>
         <!-- <p>default username = <span>admin</span> & password = <span>111</span></p> -->
         <input type="text" name="name" maxlength="20" required placeholder="enter your username" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="pass" maxlength="20" required placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="submit" value="login" name="submit" class="btn">
         <p>Don't have an account? <a href="admin_reg.php">Register now</a></p><br>
         <a href="../home.php" class="logo" style="font-weight:bolder;font-size:4rem;">Blogo.</a>
      </form>
      

   </section>

   <!-- admin login form section ends -->

</body>

</html>