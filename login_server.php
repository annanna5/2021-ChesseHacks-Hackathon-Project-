<?php

include('db.php');

if (isset($_POST['username']) && isset($_POST['password']))
{
    // Secure Coding
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);
    
    if (empty($username))
    {
        header("location: login_user_view.php?error=Please enter username.");
        exit();
    }
    else if (empty($password))
    {
        header("location: login_user_view.php?error=Please enter password.");
        exit();
    }
    else
    {
        $sql_check = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($db_connect, $sql_check);

        if (mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            $hash = $row['password'];

            if (password_verify($password, $hash))
            {
                header("location: first.html");
                exit();
            }
            else
            {
                header("location: login_user_view.php?error=Login failed. Please check your password.");
                exit();
            }
        }
        else
        {
            header("location: login_user_view.php?error=Login failed. Please check your username.");
            exit();
        }
    }
}

else
{
    header("location: register_user_view.php?error=An unknown error occured.");
    exit();
}

?>