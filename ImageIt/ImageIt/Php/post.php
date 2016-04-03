<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Post</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <?php
    $postId= $_Get["Id"];
    if(!isset($postID))
        {
            exit();
        }
    $query = "Select * from posts where Id = '$postId'";
    require_once('connection.php');
    $result = mysql_query($query);
    if($result)
        {
            if(mysql_num_rows($result) > 0)
                {
                    $post = mysql_fetch_assoc($result);
                    $postId= $post["Id"];
                    $postComments = null;
                    if(isset($postId))
                       {
                         $selectComment = "Select * from Comments Where PostId = '$postId'";
                         $commentsResult = mysql_query($query);
                         $postComments = mysql_fetch_assoc($commentsResult);

                         
                        }
                    $imageUrl = $post["ImageUrl"];
                    $title = $post["Title"] ?>
                    <img src = "<?php $imageUrl; ?> width = "75" height = "75" > 
                    <h3><?php $title ?> </h3>
                    <?php 
                        foreach($postComments as $comment)
                            {
                            
                        ?>
                        <p> <?php $comment["Comment"]?></p>
                        <?php
                            }
                        ?>
                

                }
        }
    

</body>
</html>
