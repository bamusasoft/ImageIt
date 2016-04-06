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
$insertComment = "Insert into comments values($postId, $comment, $createdAt)";

mysql_query($insertComment);
header("location: post.php?id = " .$postId);
?>