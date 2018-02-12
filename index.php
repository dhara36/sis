<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/common.js"></script>
</head>
<body>

<div class="container">
  <h2>SIS Login</h2>
  <form class=" col-md-6" action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

<?php
if(!empty($_POST)){
    
    if($_POST['email'] == 'abc@gmail.com' && $_POST['pwd'] == '123'){
        header("Location: home.php"); 
        exit();
    }    
    else{
        echo "Invalid Login details.";
    }    
}
?>