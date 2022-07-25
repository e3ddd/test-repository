<?php
    if (($file = fopen("data/users.csv", "r")) !== false) 
    { 
      $num = 0;
       while (($data = fgetcsv($file, 1000, ",")) !== false) 
      {
        $num++; 
        include "templates/showList.php";
      }
        include "templates/sortButtons.php";
    }  
        fclose($file);