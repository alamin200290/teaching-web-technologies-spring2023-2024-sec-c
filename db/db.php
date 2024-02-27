<?php 

    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($con){
    //     echo "success!";
    // }else{
    //     echo "DB error";
    // }

    // $sql = "insert into users values('', 'alamin', 'alamin@aiub.edu', '123')";
    // if(mysqli_query($con, $sql)){
    //     echo "Inserted!";
    // }else{
    //     echo "SQL Error!";
    // }

    $sql ="select * from users";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }





?>