
<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php?error=badrequest');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
        <h1>welcome home! <?=$_SESSION['username']?></h1> 
        <a href='logout.php'>logout </a>
</body>
</html>