<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/font.css">
  </head>
  <body>
<?php include('includes/header.php'); ?>
<div class="container">
  <div class="reg">
   <form name="Login" action="action_register.php" method="post">
     <span>حساب کاربری خود را بسازید</span>
   	 <input type="text" name="username" placeholder="نام کاربری">
   	 <input type="password" name="pass" placeholder="رمز عبور">
  	 <input type="password" name="rpass" placeholder="تکرار رمز عبور">
     <input type="submit" value="ورود" class="reg-sub" id="sub">
   </form>
  </div>
</div>
<?php
include('includes/footer.php');
?>
</body>
</html>
