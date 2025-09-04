<?php
    session_start();
    require_once('../model/userModel.php');
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    $email = trim($_REQUEST['email']);

    if($username == "" || $password == ""){
        echo "please type username/password first!";
    }else{
        $user = ['username'=> $username, 'password'=>$password, 'email'=> $email];
        $status = addUser($user);
        if($status){
           header('location: ../view/login.php');
        }else{
            header('location: ../view/signup.php?error=regerror');
        }
    }

?>