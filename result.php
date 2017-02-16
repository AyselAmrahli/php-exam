<?php include 'lib/database.php'; ?>
<?php include '_sections/header.php'; ?>
<?php  $id       = $_SESSION['id'];
        if(isset($_SESSION['exam_date'])){
       $dateTime = $_SESSION['exam_date'];
          }

 $result    = $conn->query("SELECT * FROM student_answer WHERE student_id='$id' AND exam_time ='$dateTime'");
  $resultArray   = [];
  $resultArray2  = [];
  $varNull       = 0;
      while($row = $result->fetch(PDO::FETCH_ASSOC)){
        if($row['true_answer'] == $row['your_answer']){
          array_push($resultArray ,$row['your_answer']);
          // var_dump($row);
        }
        if($row['your_answer'] != NULL) {
          array_push($resultArray2 ,$row['your_answer']);
        }
        if($row['your_answer'] == NULL){
          $varNull++;
        }
      }
?><style media="screen">
  p{display: inline;font-size: 45px;margin-left: 15px;}
  h1{margin-bottom:20px;font-size: 60px;}
  label{font-size:20px;width:160px;color:#283593;}
</style>
<div class="container">
  <div class="row">
    <h1>İmtahan Nəticəsi</h1>
    <div class="well">
      <img src="assets/images/<?php echo $_SESSION['student_img'];?>"
      class="img-thumbnail" alt="Cinque Terre" width="304" height="236" style="float:right;">
      <dl class="dl-horizontal">
        <label>Ad:</label>
          <p><?php echo $_SESSION['student_name']; ?></p>
      </dl>
      <dl class="dl-horizontal">
        <label>Soyad:</label>
          <p><?php echo $_SESSION['student_surname']; ?></p>
      </dl>
      <dl class="dl-horizontal">
        <label>Düzgün cavablar:</label>
          <p><?php echo count($resultArray); ?></p>
      </dl>
      <dl class="dl-horizontal">
        <label>Səhv cavablar:</label>
          <p><?php echo count($resultArray2)-count($resultArray); ?></p>
      </dl>
      <dl class="dl-horizontal">
        <label>Cavablamadı:</label>
          <p><?php echo $varNull; ?></p>
      </dl>
      <dl class="dl-horizontal">
        <label>Nəticə:</label>
<?php if(count($resultArray)>=6) { ?>
            <p style="color:#00796b">Uğurlu</p>
 <?php }else{ ?>
            <p style="color:#c62828">Uğursuz</p>
        </dl>
<?php } ?>
    </div>
  </div>
</div>
<?php include '_sections/footer.php'; ?>
