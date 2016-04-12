<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Posts</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div class="maincontent">
        <?php
        require_once('connection.php');
        $query = "Select * from posts";
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

        <img src="<?php echo $row["ImageUrl"]; ?>" width="75" height="80" />
        <br />
        <a href="post.php?id=<?php echo $row["Id"]?>">
            <?php echo $row["Title"]; ?>
        </a>
        <hr />
        <?php
        }
        mysqli_close($connection);
        ?>
    </div>
</body>
</html>
