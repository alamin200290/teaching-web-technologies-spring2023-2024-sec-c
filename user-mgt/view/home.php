<?php 
    session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome Home! <?php echo $_SESSION['username'];?></h1>
    <a href="userList.php"> User List </a> |
    <a href="createUser.php"> New User </a> |
    <a href="../controller/logout.php"> Logout </a>
</body>
</html>