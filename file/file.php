<?php

    if(isset($_POST['submit'])){
    
        $src = $_FILES['myfile']['tmp_name'];
        $ext = explode('.', $_FILES['myfile']['name']);
        $name = time().".".$ext[1];
        $des = 'upload/'.$name;
        //echo $des;

        if(move_uploaded_file($src, $des)){
            echo "success";
        }else{
            echo "Error";
        }
    }
?>