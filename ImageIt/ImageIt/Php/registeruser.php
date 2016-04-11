<?php

include_once("connection.php");
$userName= $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$stmt = mysqli_prepare($connection, "INSERT INTO users (UserName, Password, Email) VALUES (?, ?, ?)");

mysqli_stmt_bind_param($stmt, "sss", $userName, $password, $email);

$result = mysqli_stmt_execute($stmt);

if($result)
{
    $lastUserId = mysqli_insert_id($connection);
    session_start();
    session_regenerate_id();
    $_SESSION['SESS_MEMBER_ID'] = $lastUserId;
    $_SESSION['SESS_USER']= $userName;
    session_write_close();
}
mysqli_stmt_close($stmt);
mysqli_close($connection);
header("location: ../home.php");
exit();

?>