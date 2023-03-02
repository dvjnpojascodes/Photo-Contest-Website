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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Sign Up</title>
</head>
<body>

<?php include 'navigation.php'?>

    
<section class="signup-form">
    <h2>Create An Account</h2>

    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]== "passwordsdontmatch"){
            echo "<p>Password Doesn't Match! </p>";
        } elseif ($_GET["error"]== "accountalreadyexist"){
            echo "<p>This Account Exist Already.</p>";
        } elseif ($_GET["error"]== "stmtfailed"){
            echo "<p>Ooops! Something went wrong, try again!</p>";
        } elseif ($_GET["error"]== "none"){
            echo "<p>You've Signed Up! Try loggin in.";
        }
    }
    ?>

    <!-- inc = Script that php will run, and user can't see -->
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Enter Your Fullname" required>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="pwd" placeholder="Enter Your Password" id="password" required>

        <input type="password" name="pwdrepeat" placeholder="Confirm Your Password" id="password"required>
       


        <button type="submit" name="submit" class="signup"> Sign Up </button>
    </form>

    <p style="color: black;">Already Have an Account? &nbsp; <span> <a href="login.php" style="color: #b90505; cursor: pointer;">Log In</a></span></p>
</section>

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

</body>
</html>

 

