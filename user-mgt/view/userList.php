<?php
    session_start();
    $users = [
        ['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'],
        ['id'=>2, 'name'=>'xyz', 'email'=>'xyz@aiub.edu'],
        ['id'=>3, 'name'=>'pqr', 'email'=>'pqr@aiub.edu'],
        ['id'=>4, 'name'=>'abc', 'email'=>'abc@aiub.edu'],
    ];

    $_SESSION['users'] = $users;
?>

<html lang="en">
<head>
    <title>List of User</title>
</head>
<body>
    <h2> List of User</h2>

    <a href="home.php"> Back </a> |
    <a href="../controller/logout.php"> Logout </a> <br><br>

        <table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>ACTION</td>
            </tr>
        <?php for($i=0; $i<count($users); $i++){ ?>            
            <tr>
                <td> <?php echo $users[$i]['id']; ?> </td>
                <td><?php echo $users[$i]['name']; ?>  </td>
                <td><?php echo $users[$i]['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $users[$i]['id']?>"> EDIT </a> | 
                    <a href="delete.php"> DELETE </a> 
                </td>
            </tr>
        
        <?php  } ?>
        </table>
</body>
</html>