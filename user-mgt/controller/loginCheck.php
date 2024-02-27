<?php 
    session_start();
    $username  =  $_REQUEST['username'];
    $password  =  $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username or password!";
    }else if ($username == $password){
        //$_SESSION['flag'] = "true";
        $_SESSION['username'] = $username;
        setcookie('flag', 'true', time()+3600, '/');
        header('location: ../view/home.php');
    }else{
        echo "invalid user!";
    }
?>