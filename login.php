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
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="Login">
</form>
<?php
        
        if (isset($_POST['submit'])){ 
        
        $username = $_POST['username'];
	    $password = $_POST['password'];


        if ($username != '' && $password != '')
		{
			$result = $mysqli->query("SELECT * FROM users 
									WHERE username = '".$username."' AND password = '".$password."'");	
			$user_match_count = $result->num_rows;
	
			if ($user_match_count == 1)
			{
                $result = $mysqli->query("SELECT * FROM users 
									WHERE username = '".$username."'");	
			$user_match_count = $result->num_rows;
                
                $user_row = $result->fetch_assoc();
				$_SESSION['username'] = $user_row['username'];
                echo "<script>window.location = 'user.php'</script>";
                }}
			else
			{
                echo "Wrong username or password";
            }}
?>
</body>   
</html>