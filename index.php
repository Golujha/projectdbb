
<?php
    
  // Include database file
  include 'users.php';
  
  $userObj = new Users();
  
  // Delete record
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $userObj->deleteRecord($deleteId);
  }
       
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PROJECTDBB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
</head>
<body>
  
<div class="card text-center" style="padding:15px;">
  <h4>PROJECTDBB</h4>
</div><br><br> 
  
<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              Your Registration added successfully
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              Your Registration updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              Record deleted successfully
            </div>";
    }
  ?>
  <h2>View Records
    <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
  </h2>
  <table class="table table-bordered table-striped" id="usersTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $users = $userObj->displayData(); 
          foreach ($users as $rs) {
        ?>
        <tr>
          <td><?php echo $rs['id'] ?></td>
          <td><?php echo $rs['name'] ?></td>
          <td><?php echo $rs['email'] ?></td>
          <td><?php echo $rs['username'] ?></td>
          <td>
            <a href="edit.php?editId=<?php echo $rs['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a> 
            <a href="index.php?deleteId=<?php echo $rs['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#usersTable').DataTable();
} );
</script>
</body>
</html>