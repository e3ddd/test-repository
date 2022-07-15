<?php

  $data = file('data/users.csv');

  asort($data);

  foreach ($data as $value) {
   echo $value;
   echo "<br>";
  }



