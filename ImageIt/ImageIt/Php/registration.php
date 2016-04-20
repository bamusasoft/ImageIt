<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<script>
function validateForm() {
    var x = document.forms["registeration"]["password"].value;
    if (x == null || x.length < 6) {
        alert("Error:Password must be at least 6 Chracters ");
        return false;
    }
}
</script>
<body>
    <?php include("header.php")?>
    <div id="wrapper">
    <div id="content">
    <fieldset class="maintcontent" style="width:30%">
        <legend>Sign in</legend>
        <form name="registeration" class="form-control" onsubmit="return validateForm()" method="post" action="registeruser.php">
            Full Name <br />
            <input type="text" name="username" size="40"  required/><br />
            Email <br />
            <input type="text" name="email" size="40" required /><br />
            Password <br />
            <input type="password" name="password" size="40"  required/><br />
            <input id="button" type="submit" name="submit" value="Register" />

        </form>
    </fieldset>
        </div>
        <div id="footer">
            <?php include("footer.php")?>
        </div>
           </div>

</body>
</html>