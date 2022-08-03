<?php


function regUser($email, $pass) : bool
{
    
    if(!empty($email) && !empty($pass))
    {
        $data = [$email, $pass];
        
        $file = fopen('data/users.csv', 'a+');

        fputcsv($file, $data);

        fclose($file);
    }
    return true;
}

function userExists($search)
{   
    $result = false;
    if (($file = fopen("data/users.csv", "r")) !== false) 
    {
        while (($data = fgetcsv($file, 1000, ",")) !== false) 
        {
                if($search == $data[0])
                {   
                   $result = true;
                   break;
                }  
        }
        fclose($file);
        return $result;
    }             
}    

function userRegError($pass) : string
{
    if(empty($pass))
    {
        return "Enter your password !";
    }
    else
    {
        return "Your e-mail taken !";
    }
}

function userSearchError($search) : string
{   
    if(empty($search))
    {
        return "Enter e-mail to search !";
    }
    else
    {
        return "E-mail didn't found !";
    }
}

function showUser($search)
{
    if (($file = fopen("data/users.csv", "r")) !== false) 
    {
        while (($data = fgetcsv($file, 1000, ",")) !== false) 
        {
                if($search == $data[0])
                {   
                    fclose($file);
                    return $data[0] . "<br>" . $data[1];
                }  
        }
    }      
    fclose($file);
}

function emptyEmailOrPass($email, $pass)
{
    if(empty($email) || empty($pass))
    {
        if(empty($email)) 
        {
             $errors['emailError'] = 'E-mail required !';
        }
        if(!empty($errors)) 
        { 
            return "Brrrr! " . implode(", ", $errors); 
        }
    } 
}

function regForm($email, $pass)
{   
    if(empty($email))
    {
        return emptyEmailOrPass($email, $pass);
    }

    if(userExists($email) === false && !empty($pass))
    {
        regUser($email, $pass);
    }
    else
    {
        return userRegError($pass);
    }
}

function searchForm($search)
{   
    if(userExists($search) === false)
    {
      return userSearchError($search);
    }      
     else
    {
      return showUser($search);
    } 
}


    if($_REQUEST['submitReg'])
    {
        echo regForm($_POST['email'], $_POST['password']);
    }

    if($_REQUEST['submitSearch'])
    {
        echo searchForm($_GET['search']);
    }





 


