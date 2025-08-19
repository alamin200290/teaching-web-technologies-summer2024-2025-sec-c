<?php

    print_r($_ENV);
    //print_r($_SERVER);
    //print_r($_GET);
    //var_dump($_GET);
    //$data = explode("alamin-123-test", '-');

    $username = trim($_REQUEST['username']);
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "please type username/password first!";
    }else{
        if($username == $password){
            echo "valid user!";
        }else{
            echo "invalid user";
        }
    }





?>