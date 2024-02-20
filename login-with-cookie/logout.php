<?php 

    session_start();
    session_destroy();
    header('location: login.php');
    setcookie('flag', 'true', time()-10, '/');

?>