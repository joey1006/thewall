<?php
    require_once 'config/config.php';
    require_once 'library/database.php';
?>
<?php

//move file to server
$file= $_FILES['image']['tmp_name'];
//var_dump($file= $_FILES['image']);

$destination= 'uploads/'.$_FILES['image']['name'];
$filename= $_FILES['image']['name'];
//$description= $_POST['description'];
//$tags= $_POST['tags'];

if(move_uploaded_file($file, $destination)){
    if($_POST['title'] == ''){
        
    $title= $filename;
    
    $sql = "INSERT INTO pictures (name, description) VALUES ('$filename','$description')";
    $results = $mysqli->query($sql);
    

    $result = $mysqli->query("SELECT * FROM pictures");
    while($pictures=$result->fetch_assoc()){
    
    
    echo "<script>window.location = 'gallery-user.php'</script>";
    }}else{
    $title= $_POST['title'];
        
    $sql = "INSERT INTO pictures (name, description) VALUES ('$filename','$description')";
    $results = $mysqli->query($sql);
    

    $result = $mysqli->query("SELECT * FROM pictures");
    while($pictures=$result->fetch_assoc()){
    
    
    echo "<script>window.location = 'gallery-user.php'</script>";
    }
    }}
else {
    echo 'Error with uploading '.$filename;
};

?>