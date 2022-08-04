<?php

    @include 'config.php';
    session_start();
    $email = "";
    $name = "";
    $errors = array();

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);

        $check_email = "SELECT * FROM user_form WHERE email='$email'";
        $run_sql = mysqli_query($koneksi, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE user_form SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($koneksi, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: msntchl@gmail.com"; 
                if(mail($email, $subject, $message, $sender)){
                    $info = "Telah mengiri kode otp ke - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: otpreset.php');
                    exit();
                }
                else{
                    $errors['otp-error'] = "Gagal ketika mengirim kode!";
                }
            }
            else{
                $errors['db-error'] = "Terjadi kesalahan!";
            }
        }
        else{
            $errors['email'] = "Email tidak terdaftar!";
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
                    <form action="forgot.php" method="POST" autocomplete="">
                        <h3 class="text-center">Forgot Password</h3>
                        <?php
                            if(count($errors) > 0){
                                foreach($errors as $error){
                                    echo '<span class="error-msg">'.$error.'</span>';
                                };
                            };
                        ?>
                        <div class="input-div">
                            <div class="i">
                                <i class='bx bxs-user'></i>
                            </div> 
                            <div class="div">
                                <h5>Email</h5>
                                <input type="email" name="email"  value="<?php echo $email?>" required placeholder="" class="input">
                            </div>
                        </div>
                        <input type="submit" name="submit" value="submit" class="form-btn">  
                        <p><a href="login.php">back?</a></p>    
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