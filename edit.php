<?php
    
  // Include database file
  include 'users.php';
  
  $userObj = new Users();
  
  // Edit record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $rs = $userObj->displyaRecordById($editId);
  }
  
  // Update Record
  if(isset($_POST['update'])) {
    $userObj->updateRecord($_POST);
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
</head>
<body>
  
<div class="card text-center" style="padding:15px;">
  <h4>PROJECTDBB</h4>
</div><br> 
  
<div class="container">
  <form action="edit.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="uname" value="<?php echo $rs['name']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" name="uemail" value="<?php echo $rs['email']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="upname" value="<?php echo $rs['username']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $rs['id']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>
</body>
</html>