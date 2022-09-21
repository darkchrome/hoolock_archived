<?php

print_r($_POST);

$eth_address = $_POST["eth_address"];
$email = $_POST["email"];

$host = "sql3.freemysqlhosting.net";
$dbname = "lovedoes";
$username = "sql3521396";
$password = "QRlbps9ezL";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ()mysqli_connect_errno()) {
    die("Connection error: " .mysqli_connect_error());
}

echo "Connection successful.";
