<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <div id="header">
        <?php include("../php/header.php") ?>
    </div>

    <div id="warpper">
        <div id="content">
            <fieldset class="maincontent" style="width:30%">
                <legend>Sign in</legend>
                <form method="post" action="user.php">
                    Email
                    <br />
                    <input type="text" name="username" size="40" required />
                    <br />
                    Password
                    <br />
                    <input type="password" name="password" size="40" required />
                    <br />
                    <input id="button" type="submit" name="submit" value="Sign in" />
                    New?
                    <a href="registration.php">Register</a>
                </form>
            </fieldset>
            <?php
            if(isset($_GET["msg"]) && $_GET["msg"] == 'failed')
            {
                echo "User name or password is wrong";
            }

            ?>
        </div>
        <div id="footer">
            <?php include("footer.php");?>
        </div>
    </div>
</body>
</html>
