<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>
<body>
        <form method="POST" action="../controller/regCheck.php">
            <fieldset>
            Username:    <input type="text" name="username" /> <br>
            Email:       <input type="email" name="email" /> <br>
            Password:    <input type="password" name="password" /> <br>
                         <input type="submit" name="submit" value="Submit" /> 
            </fieldset>
        </form>
</body>
</html>