<?php 
    session_start();
    $id = $_GET['id'];
    $users = $_SESSION['users'];
?>

<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
        <form method="POST" action="updateUser.php">
            <fieldset>
            ID:         <input type="text" name="id" value="<?=$id?>" /> <br>
            Username:   <input type="text" name="username" value="" /> <br>
            Email:      <input type="email" name="password" value="" /> <br>
                         <input type="submit" name="update" value="Update" /> 
            </fieldset>
        </form>
</body>
</html>