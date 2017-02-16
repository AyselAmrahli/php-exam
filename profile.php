<?php include '_sections/header.php'; ?>
<?php include 'lib/database.php'; ?>

<?php  $id=$_SESSION['id'];?>
<?php $result = $conn->query("SELECT * FROM students WHERE id='$id'");
      $row = $result->fetch(PDO::FETCH_ASSOC);
?>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <h2>Tələbə Haqqında</h2>
      <div class="thumbnail" style="margin-top:50px;">
      <img src="assets/images/<?php echo $row['student_img']; ?>" alt="..." style="width:190px;height:190px;margin-left:0px;">
      <div class="caption">
        <h3><?php echo $row['student_name']." ".$row['student_surname']; ?></h3>
        <p><?php  echo $row['group_number']; ?></p>
      </div>
    </div>
    </div>
  </div>
</div>






<?php include '_sections/footer.php'; ?>
