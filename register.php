<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
    input[type="email"],
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
    <h2>Register</h2>
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label for="username">ID</label>
        <input type="text" name="username" id="username" value="<?php echo $username; ?>" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <label for="password_1">Password</label>
        <input type="password" name="password_1" id="password_1" required>
      </div>
      <div class="input-group">
        <label for="password_2">Confirm password</label>
        <input type="password" name="password_2" id="password_2" required>

	  </div>
  <div class="input-group">
    <label>Confirm password</label>
    <input type="password" name="password_2">
  </div>
  <div class="input-group">
    <button type="submit" class="btn" name="reg_user">Register</button>
  </div>
  <p>
    Already a member? <a href="login.php">Sign in</a>
  </p>
</form>
</div>
</body>
</html>
