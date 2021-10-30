<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Posts</title>

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

    /* Post Submission Form */
    .post_page_template
    {
        position: absolute;
        width: 40%;
        height: 80%;
        left: 30%;
        top: 10%;
        
        background: #FFFFFF;
        
        border-radius: 15%;
    }

    /* Post Page Title */
    .post 
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
        top: 10%;
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

    /* Username */
    .username_input
    {
        position: absolute;
        width: 37%;
        height: 6%;
        left: 10%;
        top: 19%;
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

    /* Post Title*/
    .post_title_input
    {
        position: absolute;
        width: 80%;
        height: 6%;
        left: 10%;
        top: 27%;
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

    /* Post Context */
    .post_context_input
    {
        position: absolute;
        width: 80%;
        height: 50%;
        left: 10%;
        top: 36%;
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
        top: 92%;
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

    </style>

</head>

<body>

    <div class="post_page_template">

        <p class="post" align-margin="center">Submit a New Post</p>

        <form action="post_server.php" method="post">

            <?php if(isset($_GET['error'])) { ?>
            <p class="error_message"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <?php if(isset($_GET['success'])) { ?>
            <p class="success_message"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            
            <input class="username_input" type="text" placeholder="Username" name="username">
            <input class="post_title_input" type="text" placeholder="Title" name="post_title">
            <input class="post_context_input" type="text" placeholder="Enter Context Here" name="post_context">
            
            <button class="submit" type="submit" name="submit">SUBMIT</button>
        
        </form>

</body>

</html>