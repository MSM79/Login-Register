<?php include('includes/header.php'); ?>
   <div class="container">
   <div class="msm">
<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $rpass = $_POST['rpass'];
  $email = $_POST['email'];
  $in = 0;

  if (empty($fname)) {
    exit("فیلد خالی را پر کنید");
  }
  if (empty($lname)) {
    exit("فیلد خالی را پر کنید");
  }
  if (empty($username)) {
    exit("فیلد خالی را پر کنید");
  }
  if (empty($pass)) {
    exit("فیلد خالی را پر کنید");
  }
  if (empty($rpass)) {
    exit("فیلد خالی را پر کنید");
  }
  if (empty($email)) {
    exit("فیلد خالی را پر کنید");
  }
  if ($pass != $rpass) {
  exit("کلمه عبور با هم مشابه نیست");
  }
  if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
    exit("ایمیل اشتباه است");
  }
?>
</div>
<div class="info">
<h2>اطلاعات کاربر</h2>
<?php
  if ($in === 0) {
    echo ("<span>نام : " . $fname . "</span>");
    echo ("<span>نام خانوداگی : " . $lname . "</span>");
    echo ("<span>نام کاربری : " . $username . "</span>");
    echo ("<span>رمز عبور: " . $pass . "</span>");
    echo ("<span>ایمیل : " . $email . "</span>");
  }
?>
</div>
<?php include('includes/footer.php'); ?>
