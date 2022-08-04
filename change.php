<?php

    @include 'config.php';
    session_start();
    $email = "";
    $name = "";
    $errors = array();

    $email = $_SESSION['email'];
    if($email == false){
    header('location: login.php');
    }

    if(isset($_POST['submit'])){
        $_SESSION['info'] = "";
        $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
        $cpass = mysqli_real_escape_string($koneksi, $_POST['cpassword']);
        if($pass !== $cpass){
            $errors['password'] = "Password tidak sama!";
        }
        else{
            $code = 0;
            $email = $_SESSION['email'];
            $update_pass = "UPDATE user_form SET code = $code, password = '$cpass' WHERE email = '$email'";
            $run_query = mysqli_query($koneksi, $update_pass);
            if($run_query){
                $info = "Password anda berhasil diubah.";
                $_SESSION['info'] = $info;
                header('location: changed.php');
            }else{
                $errors['db-error'] = "Gagal mengubah password anda!";
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Forgot Password</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="content bg-spink">
                <div class="form-container">
                    <form action="change.php" method="POST" autocomplete="off">
                        <h3 class="text-center">New Password</h3>
                        <?php
                            if (isset($_SESSION['info'])) {
                                echo '<span class="info-msg">'.$_SESSION['info'].'</span>';
                            };

                            if(count($errors) > 0){
                                foreach($errors as $error){
                                    echo '<span class="error-msg">'.$error.'</span>';
                                };
                            };
                        ?>
                        <div class="input-div">
                            <div class="i">
                                <i class='bx bxs-lock' ></i>
                            </div> 
                            <div class="div">
                                <h5>Password</h5>
                                <input type="password" name="password" required placeholder="" class="input">
                            </div>
                        </div>
                        <div class="input-div">
                            <div class="i">
                                <i class='bx bxs-key' ></i>
                            </div> 
                            <div class="div">
                                <h5>C-Password</h5>
                                <input type="password" name="cpassword" required placeholder="" class="input">
                            </div>
                        </div>
                        <input type="submit" name="submit" value="submit" class="form-btn">    
                    </form>
                </div>

                <div class="img-container">
                    <img src="images/Security.svg" alt="login-pic">
                </div>
            </div>
        </div>      
    </div>
    <script src="js/form.js"></script>
</body>
</html>