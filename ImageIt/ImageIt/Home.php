<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <div id="menu">
    <?php include("php/header.php"); ?>
    </div>
    <div class="maincontent">
        <form  method="post" action="../Php/postimage.php" enctype="multipart/form-data">
             Subject <br />
            <input type="text" name="subject" size="40" placeholder="Enter short descriptive subject"/><br />
             Select Image <br />
            <input type="file" name="imageToUpload" id="imageToUpload" size="40"/><br />
            <input type="submit" value="Upload Image" name="submit" />
        </form>
    </div>
    <div class="extracontent">
        <h2>Latest posts</h2><br />
        <?php //include("php/latestposts.php"); ?>
    </div>

</body>
</html>
