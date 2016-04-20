<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <?php include("php/header.php"); ?>
        </div>
        

        <div id="content">
            <form method="post" action="../Php/postimage.php" enctype="multipart/form-data">
                Subject <br />
                <input type="text" name="subject" size="40" placeholder="Enter short descriptive subject" required/><br />
                Select Image <br /> 
                <input type="file" name="imageToUpload" id="imageToUpload" size="40" required /> <br /> 
                <input type="submit" value="Upload Image" name="submit" />
            </form>

            <div class="extracontent">
                <h2>Latest posts</h2><br />
                <?php include("php/latestposts.php"); ?>
            </div>
        </div>
        <div id="footer">
            <?php include("php/footer.php");?>
        </div>
    </div>
</body>
</html>
