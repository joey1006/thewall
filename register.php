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
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="password" name="passwordRep" placeholder="repeat password"><br>
    <input type="submit" name="submit" value="Register">
</form>
<?php 
        if (isset($_POST['submit'])) 
{
	$username = htmlspecialchars($_POST['username']);
	$password1 = $_POST['password'];
	$password2 = $_POST['passwordRep'];
	
	$sql = "SELECT * FROM users (username) VALUES ('$username')";

        if($username == '' && $password1 == ''){
        echo "Empty fields";
        }else{
        if ($password1 == $password2)
		{
			$sql = "INSERT INTO `users` (`username`, `password`)
				VALUES ('".$username."', '".$password1."');";
            
            $result = $mysqli->query($sql);

            echo "Account created";
		}
		else echo "Passwords do not match";
        }}
?>  
</body>
</html>