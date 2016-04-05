<?php
$postId = $_GET["postId"];

if(!isset($postId))
{
    header("location: ../php/post.php");
    exit();

}
require_once("connection.php");
$comment = $_GET["comment"];
$createdAt= date("Y-m-d");
$insertComment = "Insert into comments values('$postId', $comment, $createdAt)";
mysql_query($insertComment);
header("location: ../php/post.php")
?>