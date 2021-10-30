<?php

include('db.php');

if (isset($_POST['username']) && isset($_POST['post_title']) && isset($_POST['post_context']))
{
    // Secure Coding
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $post_title = mysqli_real_escape_string($db_connect, $_POST['post_title']);
    $post_context = mysqli_real_escape_string($db_connect, $_POST['post_context']);
    
    // Error Checking
    if (empty($username))
    {
        header("location: post_user_view.php?error=ERROR: Please enter username.");
        exit();
    }
    else if (empty($post_title))
    {
        header("location: post_user_view.php?error=ERROR: Please enter title.");
        exit();
    }
    else if (empty($post_context))
    {
        header("location: post_user_view.php?error=ERROR: Please enter context.");
        exit();
    }
    else
    {
        // Check if username exists
        $sql_check_username = "SELECT * FROM users where username = '$username'";
        $order = mysqli_query($db_connect, $sql_check_username);
        
        if (mysqli_num_rows($order) <= 0)
        {
            header("location: post_user_view.php?error=ERROR: Username does NOT exist. Please check your username.");
            exit();
        }

        else
        {
            $sql_save = "insert into posts(username, title, context) values('$username', '$post_title', '$post_context')";
            $result = mysqli_query($db_connect, $sql_save);
            
            if ($result)
            {
                header("location: post_user_view.php?success=Your post uploaded successfully!");
                exit();
            }
            else
            {
                header("location: post_user_view.php?error=Sorry, we cannot upload your post. Please try again later.");
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