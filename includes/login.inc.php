<?php

if(isset($_POST["submit"])){
    $useremail = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($useremail, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    } 

    loginUser($conn, $useremail, $pwd);
} else {
    header("location: ../login.php");

}