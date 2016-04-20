<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--<head>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>-->
<body>
    <?php

    require_once('connection.php');
    $query = "SELECT * FROM imageit.posts ORDER BY CreatedAt DESC LIMIT 3";
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die(mysqli_error($connection));
    }

    ?>

    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <div class="allposts">
    <img src="<?php echo $row["ImageUrl"]; ?>" alt="Posted Image" width="75" height="80" />
    <br />
    <a href="php/post.php?id=<?php echo $row["Id"];?>">
        <?php echo $row["Title"];?>
    </a>
        </div>
    <div id="allpostsseparator"></div>
    <?php
    }
    ?>
    <?php mysqli_close($connection); ?>

</body>
</html>
