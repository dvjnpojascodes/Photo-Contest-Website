<?php
session_start();

$serverName= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbName= "photocontest";


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}