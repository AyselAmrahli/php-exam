<?php include 'lib/database.php' ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <style media="screen">
      label,h2{color:#fff;}
      .my_container{margin-top:100px;}
      .back{min-height: 650px;background-color: #006064;}
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
    label{margin-top:15px;}
    </style>
  </head>
  <body>
<div class="back">
    <div class="container">
      <div class="my_container" style="">


      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>İmtahana başlamaq üçün Giriş edin</h2>
          <form action="" method="post">
            <label for="student_name">Ad</label>
            <input type="text" name="student_name" placeholder="Enter Your Name" class="form-control">

            <label for="student_surname">Soyad</label>
            <input type="text" name="student_surname" placeholder="Enter Your Surname" class="form-control">

            <label for="group_number">Qrup</label>
            <input type="text" name="group_number" placeholder="Enter Your Group Name" class="form-control">

            <label for="password" style="margin-top:20px">Şifrə</label>
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
    $student_name = $_POST['student_name'];
    $student_surname = $_POST['student_surname'];
    $group_number = $_POST['group_number'];
    $password   = $_POST['password'];
    $result = $conn->query('SELECT * FROM students');
    // var_dump($result);

   while(  $row = $result->fetch(PDO::FETCH_ASSOC)) {
     if ($student_name == $row['student_name'] && $student_surname == $row['student_surname']
     && $group_number == $row['group_number'] && $password == $row['password']) {

       $_SESSION['id']              = $row['id'];
       $_SESSION['student_name']    = $student_name;
       $_SESSION['student_surname'] = $student_surname;
       $_SESSION['student_img']     = $row['student_img'];
       header('Location: profile.php');
     }else{

     }

   }





  }else{
    // header('Location:login.php');
  }


 ?>
