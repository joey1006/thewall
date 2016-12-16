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
<?php include'include/nav.php'; ?><a href="gallery.php"><button type="button" class="button">Gallery</button></a></div>
<?php
    $result = $mysqli->query("SELECT * FROM pictures");

    while($pictures = $result->fetch_assoc()){
    
    echo '<img class="pictures" src="uploads/'.$pictures['name'].'">';
    }
     ?>
</body>
</html>