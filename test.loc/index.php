<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Test Site</title>
</head>
<body> 
    <div class="form">
    <form action="form.php" method="POST">
    <h1>REGISTRATION FORM</h1>
    <p>Your Email </p><input type="text" name="email">
    <p>Your Password </p><input type="text" name="password">
    <input type="submit" name="submitReg" value="Register">
    </form>
    </div>

    <div class="form">
    <form action="form.php?search" method="GET">
    <h1>SEARCH FORM</h1>
    <p>Search User </p><input type="text" name="search">
    <input type="submit" name="submitSearch" value="Search">
    </form>
    </div>
</body>
</html>

