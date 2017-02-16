<?php include '../lib/database.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" media="screen" title="no title">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <style media="screen">
      label,h2{color:#fff;}
      .my_container{margin-top:100px;}
      .back{min-height: 600px;background-color: #006064;}
      @font-face {
     font-family: 'myfont';
     src: url("../fonts/Roboto-Bold.eot");
     src: local("Roboto-Bold"),
     url("..assets/fonts/Roboto-Bold.woff") format("woff"),
     url("..assets/fonts/Roboto-Bold.ttf") format("truetype"),
     url("..assets/fonts/Roboto-Bold.svg") format("svg");
     font-weight: normal;
     font-style: normal; }
    body{font-family: 'myfont'!important;}
    </style>
  </head>
  <body>
<div class="back">
    <div class="container">
      <div class="my_container" style="">


      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Login Form</h2>
          <form action="" method="post">
            <label for="admin_name">Name</label>
            <input type="text" name="admin_name" placeholder="Enter Your Name" class="form-control">

            <label for="password" style="margin-top:20px">Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" class="form-control">

            <input type="submit" name="submit" value="Login" class="btn btn-primary" style="margin-top:20px">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
  if(isset($_POST['submit'])){
    $admin_name = $_POST['admin_name'];
    $password   = $_POST['password'];
    $result = $conn->query('SELECT admin_name,password FROM admins');
    while(  $row = $result->fetch(PDO::FETCH_ASSOC)) {

    if ($admin_name == $row['admin_name'] && $password == $row['password']) {
      $_SESSION['admin_name'] = $admin_name;
      header('Location: welcome.php');
    }
}

  }


 ?>
