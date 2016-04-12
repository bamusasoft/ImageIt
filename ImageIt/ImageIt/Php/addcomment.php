<?php
$postId = (int) $_POST["postId"];

if(!isset($postId))
{
    header("location: ../php/post.php");
    exit();

}
require_once("connection.php");
$comment = $_POST["comment"];
$createdAt= date("Y-m-d H:i:s");
$insertStatm = "INSERT INTO comments (PostId, Comment, CreatedAt) VALUES(?, ?, ?)";
$stmt =mysqli_prepare($connection, $insertStatm);
mysqli_stmt_bind_param($stmt, "sss", $postId, $comment, $createdAt);
$result = mysqli_stmt_execute($stmt);

header("location: post.php?id=".$postId);
?>