<?php

    //sleep(5);
    $user = $_REQUEST['data'];
    //$data = json_decode($user);

    $user = ['id'=> 1, 'username'=> 'alamin', 'email'=> 'alamin@aiub.edu'];
    $data = json_encode($user);
    echo $data;
?>