<?php
require_once('connection.php');
$errmsg_arr = array();
$errFlag = false;
$userName = $_POST['username'];
$password = $_POST['password'];
$query =  "SELECT * FROM users where UserName = ? AND Password = ?" ;
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, "ss", $userName, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$usersArray = mysqli_fetch_array($result,MYSQL_ASSOC);
$resultCount = count($usersArray);
if($resultCount > 0)
{
        session_start();
        session_regenerate_id();
        $_SESSION['SESS_MEMBER_ID'] = $usersArray["Id"];
        $_SESSION['SESS_USER']= $usersArray["UserName"];
        session_write_close();
        header("location: ../home.php");
        exit();
}

else
{
    header("location: login.php?msg=failed");
    exit();
}



?>