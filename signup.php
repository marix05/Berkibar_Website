<?php

    @include 'config.php';
    session_start();
    $email = "";
    $name = "";
    $errors_sign = array();

    if(isset($_POST['submit-signup'])){
        $name = mysqli_real_escape_string($koneksi, $_POST['name']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
        $cpass = mysqli_real_escape_string($koneksi, $_POST['cpassword']);
        $adminpass = $_POST['adminpass'];
        $user_type = $_POST['user_type'];

        $email_check = "SELECT * FROM user_form WHERE email = '$email'";
        $res = mysqli_query($koneksi, $email_check);
        if(mysqli_num_rows($res) > 0){
            $errors_sign['email'] = "Email telah terdaftar!";
        }
        else{
            if($pass !== $cpass){
                $errors_sign['password'] = "Password tidak identik!";
            }  
            else{
                if($user_type == 'admin'){
                    if ($adminpass == 'adminpage') {
                        if(count($errors_sign) === 0){
                            $encpass = password_hash($password, PASSWORD_BCRYPT);
                            $code = rand(999999, 111111);
                            $status = "notverified";
                            $insert_data = "INSERT INTO user_form (name, email, password, user_type, code, status)
                                            values('$name', '$email', '$cpass', '$user_type','$code', '$status')";
                            $data_check = mysqli_query($koneksi, $insert_data);
                            if($data_check){
                                $subject = "Email Verification Code";
                                $message = "Your verification code is $code";
                                $sender = "From: mrxsendmail@gmail.com";
                                if(mail($email, $subject, $message, $sender)){
                                    $info = "Telah mengirim kode otp ke - $email";
                                    $_SESSION['info'] = $info;
                                    $_SESSION['email'] = $email;
                                    $_SESSION['password'] = $password;
                                    header('location: otpverification.php');
                                    exit();
                                }else{
                                    $errors_sign['otp-error'] = "Gagal ketika mengirimkan kode!";
                                }
                            }else{
                                $errors_sign['db-error'] = "Terjadi kesalahan!";
                            }
                        }
                    }
                    else {
                        $errors_sign['admin'] = "Password admin salah!";
                    }
                }
                elseif ($user_type == 'user'){
                    if(count($errors_sign) === 0){
                        $encpass = password_hash($password, PASSWORD_BCRYPT);
                        $code = rand(999999, 111111);
                        $status = "notverified";
                        $insert_data = "INSERT INTO user_form (name, email, password, user_type, code, status)
                                        values('$name', '$email', '$cpass', '$user_type','$code', '$status')";
                        $data_check = mysqli_query($koneksi, $insert_data);
                        if($data_check){
                            $subject = "Email Verification Code";
                            $message = "Your verification code is $code";
                            $sender = "From: mrxsendmail@gmail.com";
                            if(mail($email, $subject, $message, $sender)){
                                $info = "Telah mengirim kode otp ke - $email";
                                $_SESSION['info'] = $info;
                                $_SESSION['email'] = $email;
                                $_SESSION['password'] = $password;
                                header('location: otpverification.php');
                                exit();
                            }else{
                                $errors_sign['otp-error'] = "Gagal ketika mengirimkan kode!";
                            }
                        }else{
                            $errors_sign['db-error'] = "Terjadi kesalahan!";
                        }
                    }
                }
            }  
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Welcome</title>
</head>
<body>
    <div class="wrapper active">
        <div class="container active">
            <div class="content bg-aqua">
                <div class="img-container">
                    <img src="images/Vision.svg" alt="signup-pic">
                </div>
                <div class="form-container">
                    <form action="signup.php" method="post">
                        <h3>Sign-Up</h3>
                        <?php
                            if(isset($errors_sign)){
                                foreach($errors_sign as $error){
                                    echo '<span class="error-msg">'.$error.'</span>';
                                };
                            };
                        ?>
                        <div class="input-div">
                            <div class="i">
                                <i class='bx bxs-user'></i>
                            </div> 
                            <div class="div">
                                <h5>Full Name</h5>
                                <input type="text" name="name" required placeholder="" class="input">
                            </div>
                        </div>
                        <div class="input-div">
                            <div class="i">
                                <i class='bx bx-envelope' ></i>
                            </div> 
                            <div class="div">
                                <h5>Email</h5>
                                <input type="email" name="email" required placeholder="" class="input">
                            </div>
                        </div>
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
                                <i class='bx bxs-lock' ></i>
                            </div> 
                            <div class="div">
                                <h5>C-Password</h5>
                                <input type="password" name="cpassword" required placeholder="" class="input">
                            </div>
                        </div>
                        <div class="input-div">
                            <div class="i">
                                <i class='bx bx-link' ></i>
                            </div> 
                            <div class="div">
                                <h5>User Type</h5>
                                <select name="user_type" class="input admin">
                                    <option></option>
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-hide" id="input_apass">
                            <div class="i">
                                <i class='bx bx-key' ></i>
                            </div> 
                            <div class="div">
                                <h5>Admin Password</h5>
                                <input type="text" name="adminpass" placeholder="" class="input">
                            </div>
                        </div>
                        <input type="submit" name="submit-signup" value="register now" class="form-btn">
                        <p>Sudah memiliki? <a href="login.php"><span class="btn-login">Log-In</span></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/form.js"></script>
</body>
</html>

