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
    if (($file = fopen("data/users.csv", "r")) !== false) 
    { 
      $num = 0;
       while (($data = fgetcsv($file, 1000, ",")) !== false) 
      {
        $num++;
        echo "<form action=\"userEdit.php\" method=\"POST\"";
        echo "<tr>";
        echo "<td>" . "<p>" . "<input type=\"radio\" name=\"num\" value=\"$num\" checked>" . "</p>" . "</td>";
        echo "<td>" . "<p>" . "<input type=\"text\" name=\"received_email\" value=\"$data[0]\">" . "</p>" . "</td>";
        echo "<td>" . "<p>" . "<input type=\"text\" name=\"pass\" value=\"$data[1]\">" . "</p>" . "</td>";
        echo "<td>" . "<input type=\"submit\" name=\"edit\" value=\"Edit\">" . "</td>";
        echo "<td>" . "<input type=\"submit\" name=\"delete\" value=\"Delete\">" . "</td>";
        echo "</tr>";
        echo "</form>";
      }
      echo "<input type=\"submit\" name=\"descending_sort\" value=\"Descending Sort\">";
      echo "<br>";
      echo "<input type=\"submit\" name=\"ascending_sort\" value=\"Ascending Sort\">";
    }  
    fclose($file);
    ?>
    </table>
    </form>
    </div>
</body>
</html>

