<?php

$connection = mysqli_connect("localhost","root","","project4_ecommerce");
if(!$connection){
    die("cannot connect to server");
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && 
    !empty($_POST['repassword']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['check'])){

        if( preg_match("/^[a-zA-Z-' ]*$/" , $name) && filter_var($email, FILTER_VALIDATE_EMAIL) && 
        preg_match( "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/",$_POST['password'] ) && ($_POST['password'] == $_POST['repassword'])
        && preg_match( "/^([009627]{6})([7-9]{1})([0-9]{7})/",$_POST['phone'] )&& preg_match("/^[0-9a-zA-Z-_ ', ]+/", $_POST['address'])){
            
            //when inputs meet all regexes
            $query="SELECT * FROM customers WHERE customer_email ='$email';";
            $result=mysqli_query($connection, $query);

            $row=mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) == 0){

                $query   = "INSERT INTO customers (customer_name, customer_email, customer_phone, customer_password, customer_address) 
                VALUES ('$name' , '$email' ,'$phone' , '$password' , '$address' );";
        
                mysqli_query($connection, $query);
            }
            else{
                $error= "Email already exists";
            }


        }
        else{//for regex line 10
            $error= "follow the regex";
        }
    }
    else{//for empty line 7
        $error= "All fields are required";

    }
    
}//for isset submit


?>




<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registration Form</h3>
                <p>Please enter your user information.</p>

            </div>
            <div class="card-body">
            <?php if(!empty($error)){
                 echo "<div class='alert alert-danger' role='alert'> $error </div>";} ?>
                

                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1"  name="password" type="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" name="repassword"  type="password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required=""  name="phone" placeholder="Phone No.">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required=""  name="address" placeholder="Address">
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary"  name="submit" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="check" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>