<?php include 'header.php'; ?>
<?php include '../lib/database.php'; ?>
<?php $result = $conn->query("SELECT * FROM questions ORDER BY que_number"); ?>
<style media="screen">
  body{background-color:#e0f7fa;}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <h2>Sualların Siyahısı</h2>
      <table class="table table-striped" style="margin-top:15px;">
          <thead>
            <tr>
              <th>Sual nömrəsi</th>
              <th>Sualın mətni</th>
              <th>A Variantı</th>
              <th>B Variantı</th>
              <th>C Variantı</th>
              <th>D Variantı</th>
              <th>Düzgün cavab</th>
            </tr>
          </thead>
          <tbody>
            <?php  while($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
              <td><?php echo $row['que_number']; ?></td>
              <td><?php echo $row['que_desc']; ?></td>
              <td><?php echo $row['answer1']; ?></td>
              <td><?php echo $row['answer2']; ?></td>
              <td><?php echo $row['answer3']; ?></td>
              <td><?php echo $row['answer4']; ?></td>
              <td><?php echo $row['true_answer']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
