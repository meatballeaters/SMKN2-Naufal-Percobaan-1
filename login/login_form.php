<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = ($_POST['password']);
   $select = "SELECT * FROM user_form WHERE username = '$username' && password = '$password'";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      if($row['role'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('location:../index.php');
      }else if($row['role'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         header('location:../index.php');
      }
   }else{
      $error[] = 'incorrect email or password!';
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
   <form action="" method="post">
      <h3>login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="username" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register</a></p>
   </form>
</div>
</body>
</html>