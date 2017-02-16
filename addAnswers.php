<?php include 'lib/database.php';
  session_start();
  ob_start();

if(isset($_POST['done'])){
  $date_time   = new DateTime();
  $exam_time   = date_format($date_time,'Y-m-d H:i:00');
  $_SESSION['exam_date'] = $exam_time;

  for ($j=1; $j<11 ; $j++) {
    if(!isset($_POST['question'.$j.''])){
      $_POST['question'.$j.''] = NULL;
    }
  }

  $question    = [];
  $question[0] = $_POST['question1'];
  $question[1] = $_POST['question2'];
  $question[2] = $_POST['question3'];
  $question[3] = $_POST['question4'];
  $question[4] = $_POST['question5'];
  $question[5] = $_POST['question6'];
  $question[6] = $_POST['question7'];
  $question[7] = $_POST['question8'];
  $question[8] = $_POST['question9'];
  $question[9] = $_POST['question10'];



  $student_id  = $_SESSION['id'];
  $que_desc_array = $_SESSION['que_desc'];
  $true_answ_array = $_SESSION['true_answer'];

  for ($i=0; $i<10; $i++) {

    $sql = "INSERT INTO student_answer (student_id,que_desc,true_answer,your_answer,exam_time)
    VALUES (:student_id,:que_desc,:true_answer,:your_answer,:exam_time)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':student_id',$student_id, PDO::PARAM_STR);
    $stmt->bindParam(':que_desc',$que_desc_array[$i], PDO::PARAM_STR);
    $stmt->bindParam(':true_answer',$true_answ_array[$i], PDO::PARAM_STR);
    $stmt->bindParam(':your_answer',$question[$i], PDO::PARAM_STR);
    $stmt->bindParam(':exam_time',$exam_time, PDO::PARAM_STR);

    $stmt->execute();

  }
  header('Location:result.php');
}
?>
