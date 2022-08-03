<?php
function userExists($email)
{   
    $result = false;
    if (($file = fopen("data/newUsers.csv", "r")) !== false) 
    {
        while (($data = fgetcsv($file, 1000, ",")) !== false) 
        {
                if($email == $data[0])
                {   
                   $result = true;
                   break;
                }  
        }
        fclose($file);
        return $result;
   }
}       
    
function edit($email, $pass, $userNum)
{ 
  $user = [$email, $pass];
  $num = 0;
  if (($file = fopen("data/users.csv", "r")) !== false) 
  {
    $newFile = fopen("data/newUsers.csv", "a+");
      while (($data = fgetcsv($file, 1000, ",")) !== false) 
      {
        $num++;
        if($num == $userNum)
        {
          continue;
        }
        fputcsv($newFile, $data);
      }
      fputcsv($newFile, $user);
      fclose($newFile);
      fclose($file);
      return true;
 }
}    

function delete($email)
{
  if (($file = fopen("data/users.csv", "r")) !== false) 
  {
    $newFile = fopen("data/newUsers.csv", "a+");
      while (($data = fgetcsv($file, 1000, ",")) !== false) 
      {
        if($email === $data[0])
        {
          continue;
        }
        fputcsv($newFile, $data);
      }
      fclose($newFile);
      fclose($file);
      return true;
 }
}


function editUser($email, $pass, $userNum)
{
  if(userExists($email) === true)
  {
    return "E-mail exist !";
  }
  else 
  {
    if(edit($email, $pass, $userNum) === true)
    {
      copy("data/newUsers.csv", "data/users.csv");
      unlink("data/newUsers.csv");
      
      return true;
    }
  }
}

function deleteUser($email)
{
  if(delete($email) === true)
  {
    copy("data/newUsers.csv", "data/users.csv");
    unlink("data/newUsers.csv");
    return true;
  }
}

function sortAscending() : array
{
  $arr = [];
  if (($file = fopen("data/users.csv", "r")) !== false) 
  {
      while (($data = fgetcsv($file, 1000, ",")) !== false) 
      {
        $arr[] = $data[0];
      }  

      fclose($file);
  }
  
  sort($arr);
   
  return $arr;
}

function sortDescending() : array
{
  $arr = [];
  if (($file = fopen("data/users.csv", "r")) !== false)
  {
      while (($data = fgetcsv($file, 1000, ",")) !== false)
      {
        $arr[] = $data[0];
      }

      fclose($file);
  }

  rsort($arr);

  return $arr;
}

function showUserEmail() : array
{
   $email = [];
    if (($file = fopen("data/users.csv", "r")) !== false)
    {
        while (($data = fgetcsv($file, 1000, ",")) !== false)
        {
            $email[] = $data[0];
        }
        fclose($file);
    }

    return $email;
}


function showUserPass() : array
{
    $pass = [];
    if (($file = fopen("data/users.csv", "r")) !== false)
    {
        while (($data = fgetcsv($file, 1000, ",")) !== false)
        {
            $pass[] = $data[1];
        }
        fclose($file);
    }
    return $pass;
}

    if($_REQUEST['edit'])
    {
     editUser($_POST['received_email'], $_POST['pass'],  $_POST['num']);
    }

    if($_REQUEST['delete'])
    {    
     deleteUser($_POST['received_email']);
    }  
