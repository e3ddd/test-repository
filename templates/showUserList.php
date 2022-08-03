<?php
if($_REQUEST['ascending_sort'])
{
    for($i=0;$i<=count(sortAscending()) ;$i++)
    {
        include "templates/showList.php";
        $email  = sortAscending()[$i];
        $pass = showUserPass()[$i];
    }
    include "templates/sortButtons.php";
}

if($_REQUEST['descending_sort'])
{
    for($i=0;$i<=count(sortDescending()) ;$i++)
    {
        include "templates/showList.php";
        $email  = sortDescending()[$i];
        $pass = showUserPass()[$i];
    }
    include "templates/sortButtons.php";
}

if($_REQUEST['current_list'])
{
    for($i=0;$i<=count(showUserEmail()) ;$i++)
    {
        include "templates/showList.php";
        $email  = showUserEmail()[$i];
        $pass = showUserPass()[$i];
    }
    include "templates/sortButtons.php";
}