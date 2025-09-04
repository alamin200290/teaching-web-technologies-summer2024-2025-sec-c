
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="post" action="../controller/signupCheck.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Signup</legend>
            username: <input type="text" name="username" value=""/> <br> 
            password: <input type="password" name="password" value=""/> <br>
            email: <input type="email" name="email" value=""/> <br>
                <input type="submit" name="submit" value="Submit"/>
                 <a href='login.php'>login</a>
        </fieldset>
    </form>
    <p><?php if(isset($err1)){echo $err1;} ?> </p>
    <p><?php if(isset($err2)){echo $err2;} ?> </p>
</body>
</html>