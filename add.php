<?php
  
  // Include database file
  include 'users.php';
  
  $userObj = new Users();
  
  // Insert Record 
  if(isset($_POST['submit'])) {
    $userObj->insertData($_POST);
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
  <form action="add.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password" required="">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>
</body>
</html>