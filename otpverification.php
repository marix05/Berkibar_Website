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
        $otp_code = mysqli_real_escape_string($koneksi, $_POST['otp']);
        $check_code = "SELECT * FROM user_form WHERE code = $otp_code";
        $code_res = mysqli_query($koneksi, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE user_form SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($koneksi, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: login.php');
                exit();
            }else{
                $errors['otp-error'] = "Gagal dalam mengupdate kode!";
            }
        }else{
            $errors['otp-error'] = "Kode salah!";
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
    <title>Email Verification</title>
</head>
<body>
    <div class="wrapper active">
        <div class="container active">
            <div class="content bg-aqua">
                <div class="img-container">
                    <img src="images/Secure.svg" alt="signup-pic">
                </div>
                <div class="form-container">
                    <form action="otpverification.php" method="POST" autocomplete="">
                        <h3 class="text-center">Email Verification</h3>
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
                                <i class='bx bxs-key' ></i>
                            </div> 
                            <div class="div">
                                <h5>Kode OTP</h5>
                                <input type="number" name="otp" required placeholder="" class="input">
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="form-btn">    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/form.js"></script>
</body>
</html>