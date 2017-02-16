<?php include 'lib/database.php'; ?>
<?php include '_sections/header.php'; ob_start(); ?>
<?php $result = $conn->query("SELECT * FROM questions ORDER BY rand() LIMIT 10"); ?>
<style media="screen">
  .ques_container{margin-bottom:25px;}
  span{font-size: 16px;margin-left: 8px;}
  p{display:inline;}
  body{background-color: #fff3e0;}
  hr{border-color:#424242 ;background-color:#424242 ;color:#424242 ;}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-1">
<?php $question_number = 1;
      $que_desc_array  = [];
      $true_answ_array = [];
?>
  <form action="addAnswers.php" method="POST">
<?php  while($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
<?php array_push($que_desc_array,$row['que_desc']);
      array_push($true_answ_array,$row['true_answer']);
?>
      <div class="ques_container">
          <h3><?php echo $question_number.". ".$row['que_desc']; ?></h3>
          <input type="radio" name="question<?php echo $question_number;?>" value="1"><span><?php echo $row['answer1']; ?></span><br>
          <input type="radio" name="question<?php echo $question_number;?>" value="2"><span><?php echo $row['answer2']; ?></span><br>
          <input type="radio" name="question<?php echo $question_number;?>" value="3"><span><?php echo $row['answer3']; ?></span><br>
          <input type="radio" name="question<?php echo $question_number;?>" value="4"><span><?php echo $row['answer4']; ?></span><br>
<?php $question_number++; ?>
  </div>
<hr>
<?php }
    $_SESSION['que_desc'] = $que_desc_array;
    $_SESSION['true_answer'] = $true_answ_array;
?>

      <input type="submit" name="done" value="imtahanı bitirin"
      class="btn btn-lg btn-success" style="margin-top:20px;margin-bottom:30px;float:right">
  </form>
  </div>
  </div>
</div>
<?php include '_sections/footer.php'; ?>
