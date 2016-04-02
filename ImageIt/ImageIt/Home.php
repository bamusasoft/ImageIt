<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../Style/MasterStyle.css" />
</head>
<body>
    <div id="logo">
        <img src="../logo/logo.jpg" alt="Image It" width="75" height="50">
    </div>
    <div id="header">
        <div id="menu">
            <a class="menuItem" href="Home.php">Home</a>
            <a class="menuItem" href="Posts.php">Posts</a>
            <a class="menuItem" href="About.php">About</a>
        </div>
        <div id="signin">
            <a href="SignIn.php">Sign In </a>
        </div>
    </div>
    <div id="content">
       <form method="post" action="../Php/PostImage.php" enctype="multipart/form-data">
           <label title="subject">Subject</label>
           <input type="text" name="subject" /><br />
           <label title="image">Select Image</label>
           <input type="file" name="imageToUpload" id="imageToUpload"/> <br />
           <input type="submit" value="Upload Image" name="submit" />
       </form>
        
    </div>
    <div id="latestposts">
        
    </div>
</body>
</html>
