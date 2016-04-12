<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <?php include("header.php") ?>
    <fieldset style="width:30%"> <legend>Sign in</legend>
        <form method="post" action="user.php">
            User name <br />
            <input type="text" name="username" size="40" /><br />
            Password <br />
            <input type="password" name="password" size="40" /><br />
            <input id="button" type="submit" name="submit" value="Sign in" />
            New? <a href="registration.php">Register</a>
        </form>
    </fieldset>
    <?php
    if(isset($_GET["msg"]) && $_GET["msg"] == 'failed')
        {
            echo "User name or password is wrong";
        }
        
        ?>
</body>
</html>
