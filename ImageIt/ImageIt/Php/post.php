<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Post</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <?php
    
    $postId= (int) $_GET["id"];
    if(!isset($postId))
        {
            exit();
        }
    $query = "Select * from posts where Id = $postId";
    require_once('connection.php');
    $result = mysql_query($query);
    if($result)
        {
            if(mysql_num_rows($result) > 0)
                {
                    $post = mysql_fetch_assoc($result);
                    $postId= (int) $post["Id"];
                    $postComments = null;
                    if(isset($postId))
                       {
                         $selectComment = "Select * from comments Where PostId = $postId";
                         $commentsResult = mysql_query($selectComment);
                         $postComments = mysql_fetch_assoc($commentsResult);

                         
                        }
                    $imageUrl = $post["ImageUrl"];
                    $title = $post["Title"]
                      ?>
                    <img src = "<?php echo $imageUrl ?>" width = "250" height = "150" > 
                    <h3> <?php echo $title ?> </h3>
                    <span>Comments</span>
                    <?php 
                        foreach($postComments as $comment)
                            {
                            
                        ?>
                        <p> <?php $comment["Comment"]?></p>
                        <?php
                            }
                }
            }
        ?>
    <form method="post" action="addcomment.php">
        <input type="hidden" name="postId" value="<?php echo $postId?>" />
        <textarea rows="4" cols="50" name="comment" id="comment">
        </textarea>
        <input type="submit" name="submit" value="Add" />
    </form>

</body>
</html>
