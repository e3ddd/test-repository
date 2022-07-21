<?php

// $arr = [];
// if (($file = fopen("data/users.csv", "r")) !== false) 
// {
//     while (($data = fgetcsv($file, 1000, ",")) !== false) 
//     {
//       array_push($arr, $data);
//     }  

//     fclose($file);
// }

// sort($arr);

// var_dump($arr);

// foreach ($arr as $value) {
//    foreach($value as $item)
//    {
//     echo $item . "<br>";
//    }
// }


function sortAscending()
{
  $arr = [];
  if (($file = fopen("data/users.csv", "r")) !== false) 
  {
      while (($data = fgetcsv($file, 1000, ",")) !== false) 
      {
        array_push($arr, $data);
      }  

      fclose($file);
  }
  
  sort($arr);
   
  return $arr;
}
var_dump(sortAscending());

