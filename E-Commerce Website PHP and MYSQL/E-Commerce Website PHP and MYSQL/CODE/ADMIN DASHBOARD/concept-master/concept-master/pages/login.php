<?php

$error=0;
session_start();

$connection = mysqli_connect("localhost","root","","project4_ecommerce");
if(!$connection){
    die("cannot connect to server");
}


if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email) && !empty($password)){
        
            $query="SELECT * FROM admins WHERE admin_email ='$email';";
            $result=mysqli_query($connection, $query);

            $row=mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) != 0){
                if($password==$row['admin_password']){
                    if($row['admin_role']=="admin"){
                        $_SESSION['admin']=$row['admin_id'];
                        header("location:http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/manage_customers.php");
                    }
                    else{
                        $_SESSION['admin']=$row['admin_id'];
                        $_SESSION['super_admin']=$row['admin_id'];
                        header("location:http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/manage_admin.php");
                    }

        }
        else{
                $error= "Wrong Password";
            }
        }

            elseif(mysqli_num_rows($result) == 0){

                $query="SELECT * FROM customers WHERE customer_email ='$email';";
            $result=mysqli_query($connection, $query);
            // print_r ($result);
            // die();
            $row=mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) != 0){
                if($password==$row['customer_password']){
                    $_SESSION['customer']=$row['customer_id'];
                    header("location:http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/index.php");

                }   
            }
            else{
                $error= "user not found";
            }

            }
            
            else{
                $error= "User not found" ;
            }
    

}
else{
    $error= "Email and Password are required";
}//empty ends here
}//isset ends here



?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <?php if(!empty($error)){
                 echo "<div class='alert alert-danger' role='alert'> $error </div>";} ?>

           
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" name="email" placeholder="Email Address" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0 row ">
                <div class="col-3"></div>
                <div class="card-footer-item card-footer-item-bordered col-6">
                    <a href="registration.php" class="footer-link">Create An Account</a></div>
                
            </div>
            <div class="col-3"></div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>