
<?php include('server.php') ?>
<?php
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #333;
    }

    .container {
      width: 100%;
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
    }

    h1, h2, h3, h4, h5, h6 {
      margin-bottom: 10px;
      font-weight: bold;
    }

    h2 {
      text-align: center;
      font-size: 28px;
      color: #555;
    }

    form {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-size: 16px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #4CAF50;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #3e8e41;
    }

    p {
      margin-top: 20px;
      text-align: center;
    }

    a {
      color: #4CAF50;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Login</h2>
    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label for="username">ID</label>
        <input type="text" name="username" id="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
        Not yet a member? <a href="register.php">Sign up</a>
      </p>
    </form>
  </div>

</body>
</html>