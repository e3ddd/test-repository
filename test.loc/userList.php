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
    <form action="userEdit.php" method="POST">
    <table>
    <caption>USERS LIST</caption>
    <?php
      include "showUserList.php";
    ?>
    </table>
    </form>
    </div>
</body>
</html>

