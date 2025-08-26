<?php
    session_start();
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if($username == "" || $password == ""){
        echo "please type username/password first!";
    }else{
        if($username == $password){
            //echo "valid user!";
            //$_SESSION['status'] = true; 
            setcookie('status', true, time()+3000, '/');
            $_SESSION['username'] = $username; 
            header('location: ../view/home.php');
            //echo "<a href='home.php'>Go Home </a>";
        }else{
            header('location: ../view/login.php?error=invalid_user');
        }
    }

?>