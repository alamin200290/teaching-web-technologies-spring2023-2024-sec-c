<?php 

    session_start();
    session_destroy();
    header('location: ../view/login.php');
    setcookie('flag', 'true', time()-10, '/');

?>