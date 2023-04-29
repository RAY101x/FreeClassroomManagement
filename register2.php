<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <style>
    /* styles for header */
    .header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
    }
    
    /* styles for input fields */
    .input-group {
      margin: 10px 0px;
    }
    
    .input-group label {
      display: block;
      margin-bottom: 5px;
    }
    
    .input-group input {
      height: 30px;
      width: 100%;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    
    /* styles for button */
    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    
    /* styles for link */
    p a {
      color: blue;
      text-decoration: none;
    }
    
    p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

      <div class="input-group">
  	  <label>Upload imgage</label>
  	<input type="file" id="img" name="img" accept="image/*">
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
