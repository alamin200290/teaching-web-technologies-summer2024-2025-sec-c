<?php
    session_start();
    //include('../model/db.php');
    //include_once('../model/db.php');
    //require('../model/db.php');
    require_once('../model/userModel.php');
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if($username == "" || $password == ""){
        echo "please type username/password first!";
    }else{
        $user = ['username'=> $username, 'password'=>$password];
        $status = login($user);

        if($status){
            setcookie('status', true, time()+3000, '/');
            $_SESSION['username'] = $username; 
            header('location: ../view/home.php');
            //echo "<a href='home.php'>Go Home </a>";
        }else{
            header('location: ../view/login.php?error=invalid_user');
        }
    }

?>