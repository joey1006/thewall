<?php
    require_once 'config/config.php';
    require_once 'library/database.php';
?>
<html>
<head>
<?php include'fonts/fonts.php'; ?>
<?php include'include/head.php'; ?>
</head> 
<body>
<?php include'include/nav.php'; ?><a href="gallery-user.php"><button type="button" class="button">Gallery</button></a><a href="index.php"><button type="button" class="button">logout</button></a></div>
<p>Gallery</p>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" multiple="multiple"><br>
    <input class="z-depth-5" type="text" name="title" placeholder="title"><br>
    <input class="z-depth-5" type="text" name="description" placeholder="description"><br>
    <input class="z-depth-5" type="text" name="tags" placeholder="tags"><br>
    <input class="z-depth-5" type="submit" value="Upload">
</form>
<?php
    $result = $mysqli->query("SELECT * FROM pictures");

    while($pictures = $result->fetch_assoc()){
    
    echo '<img class="pictures" src="uploads/'.$pictures['name'].'">';
    }
     ?>
</body>
</html>