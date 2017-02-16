<?php include('../lib/database.php'); ?>
<?php include('header.php'); ob_start();?>
<div class="my_container">
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <h2>Sual Əlavə Edin</h2>
      <form action="" method="post">
        <label for="que_number">Sualın nömrəsi</label>
        <input type="text" name="que_number" value=""class="form-control">

        <label for="que_desc" style="margin-top:15px">Sualın mətni</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80" class="form-control"></textarea>
        <script>
              // Replace the <textarea id="editor1"> with a CKEditor
              // instance, using default configuration.
              CKEDITOR.replace('editor1');
          </script>
        <label for="answer1" style="margin-top:15px">A Variantı</label>
        <input type="text" name="answer1" value=""class="form-control">

        <label for="answer2" style="margin-top:15px">B Variantı</label>
        <input type="text" name="answer2" value=""class="form-control">

        <label for="answer3" style="margin-top:15px">C Variantı</label>
        <input type="text" name="answer3" value=""class="form-control">

        <label for="answer4" style="margin-top:15px">D Variantı</label>
        <input type="text" name="answer4" value=""class="form-control">

        <label for="true_answer" style="margin-top:15px">Düzgün Cavab</label>
        <!-- <input type="text" name="true_answer" value=""class="form-control"> -->
        <select class="form-control" name="true_answer">
          <option>Düzgün cavabı seçin</option>
          <option value="1">A Variantı</option>
          <option value="2">B Variantı</option>
          <option value="3">C Variantı</option>
          <option value="4">D Variantı</option>
        </select>
        <input type="submit" name="submit" value="Əlavə Et" class="btn btn-success" style="margin-top:15px;margin-bottom:20px">
      </form>
    </div>
  </div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
  $que_number  = $_POST['que_number'];
  $que_desc    = $_POST['editor1'];
  $answer1     = $_POST['answer1'];
  $answer2     = $_POST['answer2'];
  $answer3     = $_POST['answer3'];
  $answer4     = $_POST['answer4'];
  $true_answer = $_POST['true_answer'];

  $sql = "INSERT INTO questions (que_number,que_desc,answer1,answer2,answer3,answer4,true_answer)
  VALUES (:que_number,:que_desc,:answer1,:answer2,:answer3,:answer4,:true_answer)";
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':que_number', $que_number, PDO::PARAM_STR);
  $stmt->bindParam(':que_desc', $que_desc, PDO::PARAM_STR);
  $stmt->bindParam(':answer1', $answer1, PDO::PARAM_STR);
  $stmt->bindParam(':answer2', $answer2, PDO::PARAM_STR);
  $stmt->bindParam(':answer3', $answer3, PDO::PARAM_STR);
  $stmt->bindParam(':answer4', $answer4, PDO::PARAM_STR);
  $stmt->bindParam(':true_answer', $true_answer, PDO::PARAM_STR);
  $stmt->execute();
  header("Location:questions.php");
}
 ?>
<?php include('footer.php'); ?>
