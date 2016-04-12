<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>

<body>
    <?php
    session_start();
    $user = $_SESSION['SESS_USER'];
    ?>
    <div id="header">
        <img src="../logo/logo.png" alt="Image It" width="75" height="80" />
 
    <div id="menu">
            <a class="menuItem" href="../home.php">Home</a>
            <a class="menuItem" href="../php/allposts.php">Posts</a>
            <a class="menuItem" href="about.php">About</a>
        <?php
        if(!isset($user))
        {
            echo '<div class="signin">
                    <a href="../Php/Login.php">Sign In </a>
                    </div>
                    ';
        }
        else
        {
            echo '<div class="signin">
                    <a href="../Php/logout.php">log out </a>
                 </div>
                    ';
        }

        ?>
    </div>
    </div>
</body>
</html>
