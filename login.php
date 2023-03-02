<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- THIS IS FOR FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css" type="text/css">
    <link rel="stylesheet" href="css/signup.css" type="text/css">
    <title>Login</title>
</head>
<body>

<?php include 'navigation.php'?>

    
<section class="signup-form">
    <h2>Login</h2>

    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]== "passwordsdontmatch"){
            echo "<p>Password Doesn't Match! </p>";
        } elseif ($_GET["error"]== "wronglogin"){
            echo "<p>Incorrect username or password.</p>";
        } 
    }
    ?>

    <!-- inc = Script that php will run, and user can't see -->
    <form action="includes/login.inc.php" method="post" >
        <input type="text" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="pwd" placeholder="Enter Your Password" id="password" required>
        <button type="submit" name="submit" class="signup"> Login </button>
    </form>

    <p style="color: black;">Don't have an account? &nbsp; <span> <a href="signup.php" style="color: #b90505; cursor: pointer;">Sign Up</a></span></p>
</section>
</div>


<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>

 

