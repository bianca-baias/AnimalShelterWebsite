<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "animal_shelter";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword);

if (!$conn)
{
    die("Connection failed".mysqli_connect_error());
}

/* mysqli_select_db($db,"loginutil"); */
mysqli_select_db($conn, $dbName);
session_start();

