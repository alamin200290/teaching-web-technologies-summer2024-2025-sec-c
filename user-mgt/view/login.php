
<?php
    //session_start();
    //print_r($_SESSION);
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == "invalid_user"){
            $err1= "please type valid username/password!";
        }elseif($error == "badrequest"){
            $err2= "please login first!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="../controller/loginCheck.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Signin</legend>
            username: <input type="text" name="username" value=""/> <br> 
            password: <input type="password" name="password" value=""/> <br>
                <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
    <p><?php if(isset($err1)){echo $err1;} ?> </p>
    <p><?php if(isset($err2)){echo $err2;} ?> </p>
</body>
</html>