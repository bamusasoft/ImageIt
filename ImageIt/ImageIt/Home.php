<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<?php
session_start();
$user = $_SESSION['SESS_USER'];
    ?>
<body>
    <div id="logo">
        <img src="../logo/logo.jpg" alt="Image It" width="75" height="50" />
    </div>
    <div id="header">
        <div id="menu">
            <a class="menuItem" href="home.php">Home</a>
            <a class="menuItem" href="posts.php">Posts</a>
            <a class="menuItem" href="about.php">About</a>
        </div>
        <?php
            if(!isset($user))
              {
                  echo '<div id="signin">
                    <a href="../Php/Login.php">Sign In </a>
                    </div>
                    ';
              }
              else
              {
                  echo '<div id="signin">
                    <a href="../Php/Login.php">log out </a>
                 </div>
                    ';
              }

        ?>
    </div>

    <div id="content">
        <form method="post" action="../Php/postimage.php" enctype="multipart/form-data">
            <label title="subject">Subject</label>
            <input type="text" name="subject" />
            <br />
            <label title="image">Select Image</label>
            <input type="file" name="imageToUpload" id="imageToUpload" />
            <br />
            <input type="submit" value="Upload Image" name="submit" />
        </form>
    </div>

    <div id="latestPosts"></div>
</body>
</html>
