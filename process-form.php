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

$sql = "INSERT INTO lovedoes (eth_address, email)
        VALUES(?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss",
                $eth_address,
                $email);

mysqli_stmt_execute($stmt);

echo "Record saved.";
