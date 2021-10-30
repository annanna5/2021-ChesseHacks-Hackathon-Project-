<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sign Up</title>

    <style>
    
    /* Main body style */
    body 
    {
      background-color: #FCDADA;
      font-family: 'Ubuntu', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Sign Up Form */
    .signup_template
    {
        position: absolute;
        width: 40%;
        height: 80%;
        left: 30%;
        top: 10%;
        
        background: #FFFFFF;
        
        border-radius: 15%;
    }

    /* Sign Up Title */
    .sign 
    {
        position: absolute;
        top: -2%;
        left: 10%;
        color: #FA5D56;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 200%;
    }

    /* Error Message */
    .error_message
    {
        position: absolute;
        top: 11%;
        left: 10%;
        color: #DC143C;
        font-weight: bold;
        font-family: 'Ubuntu', sans-serif;
        font-size: 85%;
    }

    /* Success Message */
    .success_message
    {
        position: absolute;
        top: 11%;
        left: 10%;
        color: #89CFF0;
        font-weight: bold;
        font-family: 'Ubuntu', sans-serif;
        font-size: 85%;
    }

    /* First Name */
    .first_name_input
    {
        position: absolute;
        width: 50%;
        height: 7%;
        left: 26%;
        top: 20%;
        color: rgb(38, 50, 56);
        font-size: 85%;
        letter-spacing: 2px;
        background: #F2F2F2;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

    /* Last Name */
    .last_name_input
    {
        position: absolute;
        width: 50%;
        height: 7%;
        left: 26%;
        top: 30%;
        color: rgb(38, 50, 56);
        font-size: 85%;
        letter-spacing: 2px;
        background: #F2F2F2;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

    /* Username */
    .username_input
    {
        position: absolute;
        width: 50%;
        height: 7%;
        left: 26%;
        top: 40%;
        color: rgb(38, 50, 56);
        font-size: 85%;
        letter-spacing: 2px;
        background: #F2F2F2;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

    /* Password */
    .password_input
    {
        position: absolute;
        width: 50%;
        height: 7%;
        left: 26%;
        top: 50%;
        color: rgb(38, 50, 56);
        font-size: 85%;
        letter-spacing: 2px;
        background: #F2F2F2;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

    /* Password Confirm */
    .password_confirm_input
    {
        position: absolute;
        width: 50%;
        height: 7%;
        left: 26%;
        top: 60%;
        color: rgb(38, 50, 56);
        font-size: 85%;
        letter-spacing: 2px;
        background: #F2F2F2;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

    /* Calender URL */
    .calender_url_input
    {
        position: absolute;
        width: 50%;
        height: 7%;
        left: 26%;
        top: 70%;
        color: rgb(38, 50, 56);
        font-size: 85%;
        letter-spacing: 2px;
        background: #F2F2F2;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

    /* Submit Button */
    .submit 
    {
        cursor: pointer;
        position: absolute;

        width: 30%;
        height: 7%;
        left: 50%;
        top: 83.5%;
        transform: translate(-50%, -50%);
        letter-spacing: 3px;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #E74C3C, #E57165);
        border: 0;
        font-family: 'Ubuntu', sans-serif;
        font-size: 90%;
    }

    .submit:hover 
    {
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.50);
    }

    /* Back to login page */
    .login 
    {
        position: absolute;
        top: 90%;
        left: 24%;
        color: #F99090;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        letter-spacing: 1px;
        font-size: 80%;
    }

    </style>

</head>

<body>

    <div class="signup_template">

        <p class="sign" align-margin="center">Sign Up</p>

        <form action="register_server.php" method="post">

            <?php if(isset($_GET['error'])) { ?>
            <p class="error_message"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <?php if(isset($_GET['success'])) { ?>
            <p class="success_message"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <input class="first_name_input" type="text" placeholder="First name" name="firstname">
            <input class="last_name_input" type="text" placeholder="Last name" name="lastname">
            <input class="username_input" type="text" placeholder="Username" name="username">
            <input class="password_input" type="password" placeholder="Password" name="password">
            <input class="password_confirm_input" type="password" placeholder="Confirm Password" name="password_confirm">
            <input class="calender_url_input" type="text" placeholder="Calender URL (optional)" name="calender_url">

            <button class="submit" type="submit" name="submit">SUBMIT</button>
        
            <a href="login_user_view.php" class="login">Already have an account? Login here!</a>
        
        </form>

</body>

</html>