<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query= "INSERT INTO user (name, email, password) 
    
       values('$name','$email','$password')" ;

    $query_run= mysqli_query($con, $query);
    if($query_run){
        // echo 'data stored';

        header('location:list.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" >
</head>
<body>
    
<h1>php crud</h1>

<form method="post">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>