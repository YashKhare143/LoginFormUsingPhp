<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
    
</head>
<body>
<?php require 'Templates/_welcomeTemplate.php'?>
<?php require 'Templates/_navbar.php'?>

</body>
</html>