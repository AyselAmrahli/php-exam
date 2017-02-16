<?php include '../lib/database.php' ?>
<?php include 'header.php' ?>

<div class="my_container" style="min-height:600px;">
 <div class="container">
   <div class="row">
     <div class="col-md-7 col-md-offset-2">
       <h2>Yeni Admin</h2>
       <form  action="" method="post" enctype="multipart/form-data">
         <label for="admin_name" style="margin-top:15px">Istifadəçi adı</label>
         <input type="text" name="admin_name" value="" class="form-control">

         <label for="password" style="margin-top:15px">Şifrə</label>
         <input type="text" name="password" value="" class="form-control">

         <input type="submit" name="submit" value="Əlavə Edin" class="btn btn-success" style="margin-top:15px">
       </form>
     </div>
   </div>
 </div>
</div>


<?php include 'footer.php' ?>
<?php
if(isset($_POST['submit'])){

  $admin_name = $_POST['admin_name'];
  $password   = $_POST['password'];

  $sql = "INSERT INTO admins (admin_name,password)
  VALUES (:admin_name,:password)";
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':admin_name', $admin_name, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);
  // var_dump($result);
  $stmt->execute();
  // $row = $result->fetch(PDO::FETCH_ASSOC);

  header('Location:welcome.php');


}else{
  // header('Location:login.php');
}
