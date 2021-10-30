<?php

include('db.php');

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_confirm']))
{
    // Secure Coding
    $firstname = mysqli_real_escape_string($db_connect, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db_connect, $_POST['lastname']);
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($db_connect, $_POST['password_confirm']);
    $calender_url = mysqli_real_escape_string($db_connect, $_POST['calender_url']);

    // Error Checking
    if (empty($firstname))
    {
        header("location: register_user_view.php?error=ERROR: Please enter your first name.");
        exit();
    }
    else if (empty($lastname))
    {
        header("location: register_user_view.php?error=ERROR: Please enter your last name.");
        exit();
    }
    else if (empty($username))
    {
        header("location: register_user_view.php?error=ERROR: Please enter username.");
        exit();
    }
    else if (empty($password))
    {
        header("location: register_user_view.php?error=ERROR: Please enter password.");
        exit();
    }
    else if (empty($password_confirm))
    {
        header("location: register_user_view.php?error=ERROR: Please re-enter password.");
        exit();
    }
    else if ($password !== $password_confirm)
    {
        header("location: register_user_view.php?error=ERROR: Password does NOT match.");
        exit();
    }
    else
    {
        // Secure Coding
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Check validity
        $sql_check_same = "SELECT * FROM users where username = '$username'";
        $order = mysqli_query($db_connect, $sql_check_same);
        
        if (mysqli_num_rows($order) > 0)
        {
            header("location: register_user_view.php?error=ERROR: Username is already taken. Please try another.");
            exit();
        }

        else
        {
            if (empty($calender_url))
            {
                $sql_save = "insert into users(firstname, lastname, username, password) values('$firstname', '$lastname', '$username', '$password')";
            }
            else
            {
                $sql_save = "insert into users(firstname, lastname, username, password, calender_url) values('$firstname', '$lastname', '$username', '$password', '$calender_url')";
            }
            
            $result = mysqli_query($db_connect, $sql_save);
            
            if ($result)
            {
                header("location: register_user_view.php?success=Account created successfully! Please log in.");
            }
            else
            {
                header("location: register_user_view.php?error=Sorry, we cannot create an account for you at this time. Please try again later.");
                exit();
            }
        }
    }
}

else
{
    header("location: register_user_view.php?error=ERROR: An unknown error occured.");
    exit();
}
?>