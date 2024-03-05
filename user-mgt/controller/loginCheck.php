<?php 
    //include('../model/db.php');
    //include_once ('../model/db.php');
    //require ('../model/db.php');
    require_once ('../model/userModel.php');
    session_start();
    $username  =  $_REQUEST['username'];
    $password  =  $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username or password!";
    }else{
        
        $status = login($username, $password);
        if($status){
            $_SESSION['username'] = $username;
            setcookie('flag', 'true', time()+3600, '/');
            header('location: ../view/home.php');
        }else{
            echo "invalid user!";
        }
    }
?>