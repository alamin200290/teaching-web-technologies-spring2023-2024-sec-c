<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
</head>
<body>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <fieldset>
                <input type="file" name="myfile" />
                <input type="submit" name="submit" value="Submit" /> 
            </fieldset>
        </form>
</body>
</html>