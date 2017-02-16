<?php include '../lib/database.php'; ?>
<?php include 'header.php'; ob_start();?>

<div class="my_container" style="min-height:600px;">
 <div class="container">
   <div class="row">
     <div class="col-md-7 col-md-offset-2">
       <h2>Yeni Tələbə</h2>
       <form  action="" method="post" enctype="multipart/form-data">
         <label for="student_name" style="margin-top:15px">Ad</label>
         <input type="text" name="student_name" value="" class="form-control">

         <label for="student_surname" style="margin-top:15px">Soyad</label>
         <input type="text" name="student_surname" value="" class="form-control">

         <label for="group_number" style="margin-top:15px">Qrup</label>
         <input type="text" name="group_number" value="" class="form-control">

         <label for="student_img" style="margin-top:15px">Şəkil</label>
         <input type="file" name="student_img" value="" class="form-control">

         <label for="password" style="margin-top:15px">Şifrə</label>
         <input type="text" name="password" value="" class="form-control">

         <input type="submit" name="submit" value="Əlavə Edin" class="btn btn-success" style="margin-top:15px">
       </form>
     </div>
   </div>
 </div>
</div>
<?php include 'footer.php'; ?>
<?php
if(isset($_POST['submit'])){
  //File upload
$dir           = "../assets/images/";
$file          = $dir . basename($_FILES["student_img"]["name"]);
$file_name     = basename($_FILES["student_img"]["name"]);
$imageFileType = pathinfo($file,PATHINFO_EXTENSION);

if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
    move_uploaded_file($_FILES["student_img"]["tmp_name"], $file);
}

  $student_name    = $_POST['student_name'];
  $student_surname = $_POST['student_surname'];
  $group_number    = $_POST['group_number'];
  $student_img     = $file_name;
  $password        = $_POST['password'];

  $sql = "INSERT INTO students (student_name,student_surname,group_number,student_img,password)
  VALUES (:student_name,:student_surname,:group_number,:student_img,:password)";
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':student_name', $student_name, PDO::PARAM_STR);
  $stmt->bindParam(':student_surname', $student_surname, PDO::PARAM_STR);
  $stmt->bindParam(':group_number', $group_number, PDO::PARAM_STR);
  $stmt->bindParam(':student_img', $student_img, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);

  $stmt->execute();
  header('Location:students.php');
}
?>
