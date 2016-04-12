<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Post</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <?php
    include("header.php");
    $postId= (int) $_GET["id"];
    if(!isset($postId))
        {
            exit();
        }
    require_once('connection.php');
    $query = "Select * from posts where Id = $postId";
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die(mysqli_error($connection));
    }
    if($result)
        {
            if(mysqli_num_rows($result) > 0)
                {
                    $post = mysqli_fetch_assoc($result);
                    $postId= (int) $post["Id"];
                    $postComments = null;
                    if(isset($postId))
                       {
                         $selectComment = "Select * from comments Where PostId = $postId";
                         $commentsResult = mysqli_query($connection, $selectComment);
                        }
                    $imageUrl = $post["ImageUrl"];
                    $title = $post["Title"]
                      ?>
                    <img src = "<?php echo $imageUrl ?>" width = "250" height = "150" > 
                    <h3> <?php echo $title ?> </h3>
                   <hr />
                    <h2>Comments</h2>
                    <?php 
                        while($row = mysqli_fetch_assoc($commentsResult))
                            {
                            
                        ?>
                        <p> <?php echo $row["Comment"]?></p>
                        <hr />
                        <?php
                            }
                }
            }
        ?>
    <?php mysqli_close($connection); ?>
    <form method="post" action="addcomment.php">
        <input type="hidden" name="postId" value="<?php echo $postId?>" />
        <textarea rows="4" cols="50" name="comment" id="comment">
        </textarea>
        <input type="submit" name="submit" value="Add" />
    </form>

</body>
</html>
