<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
    html {
      height:10%;
    }

    body {
      background-color: #FCDADA;
      font-family: 'Ubuntu', sans-serif;
      margin-bottom: 50%;
    }


    .main {
      background-color: #FFFFFF;
      width: 50%;
      margin-top: 10%;
      margin-left: 25%;
      border-radius: 1.5em;
      margin-bottom: 500%;
      height:300px;
    }

    @media(max-width:599px) {
      .main {
        height:100px;
      }
    }

    @media(min-width:600 max-width:700px) {
      .main {
        height:200px;
      }
    }
    @media(min-width:701px) {
      .main {
        height:430px;
      }
    }

    .sign {
      padding-top: 5%;
      color: #FA5D56;
      font-family: 'Ubuntu', sans-serif;
      font-weight: bold;
      font-size: 130%;
    }

    .un {
      width: 76%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 100%;
      letter-spacing: 40%;
      background: rgba(136, 126, 126, 0.04);
      padding: 2.5% 1%;
      border: none;
      border-radius: 4%;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-bottom: 10%;
      margin-left: 12%;
      text-align: center;
      margin-bottom: 4%;
      font-family: 'Ubuntu', sans-serif;
    }

    form.form1 {
      padding-top: 3%;
    }

    .pass {
      width: 76%;
      color: rgb(38, 50, 56);
      font-weight: 700;
      font-size: 100%;
      letter-spacing: 40%;
      background: rgba(136, 126, 126, 0.04);
      padding: 2.5% 1%;
      border: none;
      border-radius: 4%;
      outline: none;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.02);
      margin-left: 12%;
      text-align: center;
      margin-bottom: 8%;
      font-family: 'Ubuntu', sans-serif;
    }



    .submit {
      cursor: pointer;
      position: relative;
      left:3%;
      bottom:-20%;
      border-radius: 5em;
      color: #fff;
      background: linear-gradient(to right, #E74C3C, #E57165);
      border: 0;
      padding-left: 11%;
      padding-right: 11%;
      padding-bottom: 2%;
      padding-top: 2%;
      font-family: 'Ubuntu', sans-serif;
      margin-top: 10%;
      margin-left: 32%;
      margin-right: 30%;
      font-size: 100%;
      box-shadow: 0 0 20% 1% rgba(0, 0, 0, 0.04);
    }

    .submit:hover {
      box-shadow: 0 2% 4% 0 rgba(0, 0, 0, 0.50);
    }

    .forgot {
      position: relative;
      text-shadow: 0% 0% 3% rgba(117, 117, 117, 0.12);
      color: #F99090;
      padding-top: 2%;
      margin-bottom: 30%;
      margin-left: 0%;
    }

    .submit a {
      color: white;
      text-decoration: none;
    }

    a {
      text-shadow: 0% 0% 3% rgba(117, 117, 117, 0.12);
      color: #F99090;
      text-decoration: none
    }

  </style>

</head>

<body>
    <div class="main">
        <p class="sign" align="center">Sign in</p>

        <form class="form1" action="login_server.php" method="post">

            <?php if(isset($_GET['error'])) { ?>
            <p><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['success'])) { ?>
            <p><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <input class="un" type="text" align="center" placeholder="Username" name="username">
            <input class="pass" type="password" align="center" placeholder="Password" name="password">
            
            <a class="submit" align="center" href="first.html">Sign In</a>
        
            <p class="forgot" align="center"><a href="register_user_view.php">Don't have an account yet? Signup here!</p>
        </form>
    </div>
</body>
</html>