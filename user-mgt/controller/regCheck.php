<?php 
    require_once('../model/userModel.php');
    
    $username  =  $_REQUEST['username'];
    $password  =  $_REQUEST['password'];
    $email  =  $_REQUEST['email'];

    if($username == "" || $password == "" || $email == ""){
        echo "null username or password or email";
    }else{

        $user = ['username'=> $username, 'email'=> $email, 'password'=>$password];
        $status = createUser($user);
        if($status){
            header('location: ../view/login.php');
        }else{
            echo "DB error please try again!";
        }

    }
?>