<?php session_start(); ?>
<?php

if(isset($_SESSION['student_name'])){
  // continue;
}else{
  header('Location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  </head>
  <style media="screen">
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
  <body>
    <nav class="navbar navbar-inverse" style="background-color:#006064;margin-bottom:0px;border-color:transparent;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-size:25px;">ADNSU</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">İmtahana Başla<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['student_name']." ".$_SESSION['student_surname']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Çıxış</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
