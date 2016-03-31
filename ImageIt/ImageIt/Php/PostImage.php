<?php
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
           echo "file is an image - ". $check["mime"] . ".";
           $uploadOk = 1;
       }
    }
    else
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

?>