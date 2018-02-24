<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
 	include('header.php');
 	?>
  <div class="container">
    <div class="reg">
     <form name="register" action="action_register.php" method="post">
       <span>حساب کاربری خود را بسازید</span>
     	 <input type="text" name="fname" placeholder="نام">
     	 <input type="text" name="lname" placeholder="نام خانوداگی">
     	 <input type="text" name="username" placeholder="نام کاربری">
     	 <input type="password" name="pass" placeholder="رمز عبور">
  		 <input type="password" name="rpass" placeholder="تکرار رمز عبور">
       <input type="email" name="email" placeholder="ایمیل">
       <input type="submit" value="ثبت نام" class="reg-sub" id="sub" onclick="val()">
     </form>
   </div>
     </div>
      <script>
      function val() {
        alert("ثبت نام با موفقیت انجام شد");
      }
     </script>
  </body>
</html>
