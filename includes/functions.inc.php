<?php

function emptyInputSignup($name, $email, $pwd, $pwdrepeat) {
    $result = "";

    if(empty($name) || empty($email) || empty($pwd)){
        $result = true;
    } else{
        $result = false;
    } return $result;
}

function invalidEmail($email){
    $result = "";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else{  
        $result = false;
    } return $result;
}

function pwdMatch($pwd, $pwdrepeat){
    $result = "";

    if ($pwd !== $pwdrepeat){
        $result = true;
    } else{  
        $result = false;
    } return $result;
}

function emailExist($conn, $email){
    $sql = "SELECT * FROM users WHERE userEmail= ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData =mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else {
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $pwd){
    $sql = "INSERT INTO users (userName, userEmail, userPassword) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}


// LOGIN FUNCTIONS

function emptyInputLogin($email, $pwd){
    $result = "";

    if(empty($email) || empty($pwd)){
        $result = true;
    } else{
        $result = false;
    } return $result;
}

function loginUser($conn, $email, $pwd){
    $emailExists = emailExist($conn, $email);
    
    if($emailExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["userPassword"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if($checkpwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkpwd === true){ //locking the user to homepage when logged in
        session_start();

        $_SESSION["userId"] = $emailExists["userId"];
        $_SESSION["userEmail"] = $emailExists["userEmail"];
        header("location: ../homepage.php");
        exit();
    } 
}



