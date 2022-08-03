<?php
     echo "<form action=\"userEdit.php\" method=\"POST\"";
     echo "<tr>";
     echo "<td>" . "<input type=\"radio\" name=\"num\" value=\"$num\" checked>" . "</td>";
     echo "<td>" . "<input type=\"text\" name=\"received_email\" value=\"$email\">" . "</td>";
     echo "<td>" . "<input type=\"text\" name=\"pass\" value=\"$pass\">" . "</td>";
     echo "<td>" . "<input type=\"submit\" name=\"edit\" value=\"Edit\">" . "</td>";
     echo "<td>" . "<input type=\"submit\" name=\"delete\" value=\"Delete\">" . "</td>";
     echo "</tr>";
     echo "</form>";
   