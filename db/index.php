<?php

    //mysql_connect();
   $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

//    if($con){
//     echo "success";
//    }else{
//     echo "Error";
//    }

    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    //print_r($result);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
    // $row1 = mysqli_fetch_assoc($result);
    // print_r($row1);

    // for($i=0;$i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }
    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }
    $sql = "insert into users values(null,'aiub', 'aiub', 'aiub@aiub.edu')";
    if(mysqli_query($con, $sql)){
        echo "Success";
    }else{
        echo "Error";
    }

    mysqli_close($con);
?>