<?php include 'header.php'; ?>
<?php include '../lib/database.php'; ?>
<?php $result = $conn->query("SELECT * FROM students ORDER BY id"); ?>
<style media="screen">
  body{background-color:#e0f7fa;}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <h2>Tələbələrin Siyahısı</h2>
      <table class="table table-striped" style="margin-top:15px;">
          <thead>
            <tr>
              <th>#</th>
              <th>Ad</th>
              <th>Soyad</th>
              <th>Qrup</th>
            </tr>
          </thead>
          <tbody>
            <?php  while($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['student_name']; ?></td>
              <td><?php echo $row['student_surname']; ?></td>
              <td><?php echo $row['group_number']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
      </table>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
