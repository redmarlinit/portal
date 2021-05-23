<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | </title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
    
</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="./logo.png" alt="logo">
                    </div>
                    <h6 class="mb-4 text-muted">Sign in to your account</h6>
                   
                    <form action="login_validate.php" method="POST">
                        <div class="form-group">
                            <input name="n1" type="text" class="form-control" placeholder="Email/Mobile" required>
                        </div>
                        <div class="form-group">
                            <input name="n2" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                                           </div>
                        </div>
                        <input type="submit" class="btn btn-primary shadow-2 mb-4" name="submit" value="Login">
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.php">Reset</a></p>

                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.min.js"></script>

</body>
</html>

<?php
if (isset($_POST["submit"]))
   {
session_start();//session starts here
include_once'db.php';


 $n1=$_POST['n1'];
     $n2=$_POST['n2'];
	 

 echo $sql = "SELECT * from admin_reg where email='$n1' or mobile='$n1'  and password='$n2' ";



$result = mysqli_query($conn, $sql);
$rows = array(); 

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    //  $rows[] = $row;
       
    
          
 echo  $uid=  $row['id'];
      $name=  $row['name'];
  $type=  $row['type'];
      
       $_SESSION['uid']=$uid;
         $_SESSION['name']=$name;
 
    }
 echo  $uid;

              //echo "<script>window.open('index.php','_self')</script>";
             // header("Location: index.php"); 
             // header("Location:login1.php");//use for the redirection to some page
             header("Location: http://www.geeksforgeeks.org"); 
  
       } else {
    
 
     echo "<script>alert('User or password is incorrect!')</script>";
              echo "<script>window.open('login.php','_self')</script>";
}
}
?>