<?php

    @include 'config.php';
    session_start();
    $email = "";
    $name = "";
    $errors = array();

    if($_SESSION['info'] == false){
        header('location: login.php');  
    }

    if(isset($_POST['submit'])){
        header('location: login.php');  
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
    <div class="wrapper active">
        <div class="container active">
            <div class="content bg-aqua">
                <div class="img-container">
                    <img src="images/Secure.svg" alt="signup-pic">
                </div>
                <div class="form-container">
                    <form action="" method="POST" autocomplete="">
                        <h3 class="text-center">Succes</h3>
                        <?php
                            if (isset($_SESSION['info'])) {
                                echo '<span class="info-msg">'.$_SESSION['info'].'</span>';
                            };
                        ?>
                        <input type="submit" name="submit" value="Log-In" class="form-btn">    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/form.js"></script>
</body>
</html>