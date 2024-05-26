
<?php
include "includes/conn.php";
session_start();
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password1 = $_POST['password1']; 
    $query = mysqli_query($conn,"INSERT INTO users (email, username, country,phone, password, password1)
              VALUES ('$email', '$username', '$country','$phone','$password', '$password1')");
    if ($query) {
        echo "<script>alert('You have Successfully Registered.');</script>";  		
        echo "<script>window.location.href='login.php'</script>";	
    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	 	
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Metastreak - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<<?php include 'includes/navbar.php' ?>
<body class="bg-gradient-primary">
    
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="../assets/img/logo.png" alt="" style="width: 60%;margin-top:50px;margin-left:50px;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Metastreak | Login</h1>
                                    </div>
                                    <form class="user" action="#" method="POST">
                                    <div class="form-group">
                                            <input type="username" name="username" class="form-control form-control-user" placeholder="Enter Your Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="country" name="country" class="form-control form-control-user" placeholder="Enter Your country...">
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" name="phone" class="form-control form-control-user" placeholder="Enter Your Phone Number...">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password1" name="password1" class="form-control form-control-user" placeholder="Confirm Password" required>
                                        </div>
                                       
                                        </div>
                                        <button name="register" class="btn btn-primary btn-user"> Register</button>
                                    </form>
                                    <p>Already have an account? <a href="register.php">Login NOW</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

