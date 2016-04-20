<?php
session_start();
$currentUser = $_SESSION["SESS_USER"];
if(!isset($currentUser) || !empty($currentUser)){
    header("location: ../Php/login.php");
    exit();
}
$target_dir = "../Images/";

$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$uploadOk= 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//Check if image file an actual image of fake image;
if (isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if($check !==false){
       $r= move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);
       if($r == true)
       {
           //echo "file is an image - ". $check["mime"] . ".";
           require_once("connection.php");
           $uploadOk = 1;
           $title = $_POST["subject"];
           $userId= (int) $_SESSION['SESS_MEMBER_ID'];
           $createdAt = (string) date("Y-m-d H:i:s");
           $insertPost = "INSERT INTO posts (Title, ImageUrl, CreatedAt, UserId) Values('$title', '$target_file', '$createdAt', $userId)";
           $result = mysqli_query($connection, $insertPost);
          
           //if(!$result) //For debug purpose
          //{
          //   $er = mysql_error($connection);

          //}
           $postId = mysqli_insert_id($connection);
           mysqli_close($connection);
           header("location: post.php?id=" . $postId );
           exit();

       }
    }
    else
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

?>