
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Full-width inputs */
    input[type=text],
    input[type=password] {
      width: 100%;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid #e5e5e5;
      background: transparent;
      outline: none;
      height: 40px;
      color: rgb(0, 0, 0);
      font-size: 16px;
    }

    body {
      width: 100%;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #ff7b00;
      font-family: "roboto", sans-serif;
    }

    /* Set a style for all buttons */

    .button {
      width: 200px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      background: #383838;
      color: #fff;
      border-radius: 25px;
      text-transform: capitalize;
      border: none;
      cursor: pointer;
      display: block;
      margin: 20px auto;

      box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -moz-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -webkit-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -o-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -ms-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
    }

    .button:hover {
      background: rgb(41, 37, 37);
      transition-duration: 0.5s;
    }


    /* Add padding to containers */
    .container {
      width: 100%;
      max-width: 450px;
      background: rgb(255, 255, 255);
      border-radius: 20px;
      display: flex;
      flex-direction: column;
      align-items: left;
      padding: 40px 50px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    /* The "Forgot password" text */
    span.psw {
      float: right;
      padding-top: 16px;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="Index.php" method="post">

      <p>Username</p>
      <input type="text" placeholder="Enter username" name="uname" required>

      <p>Password</p>
      <input type="password" placeholder="Enter password" name="pass" required>

      <input class="button" type="submit" value="Login">



  </div>




  </div>
  </form>
</body>

</html>
