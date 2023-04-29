<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>ClassroomEmpty?</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		* {
			box-sizing: border-box;
		}

		body {
			background-color: #FFFFFF;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			color: #333333;
			font-size: 16px;
			line-height: 1.5;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 10px;
			background-color: white;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			text-align: center;
		}

		.logo {
			text-align: center;
			margin-bottom: 50px;
		}

		.logo img {
			max-width: 100%;
			height: auto;
		}

		.form-group {
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		input[type="text"], input[type="time"] {
			display: block;
			width: 100%;
			padding: 10px;
			font-size: 16px;
			line-height: 1.5;
			border-radius: 5px;
			border: 1px solid #CCCCCC;
		}

		input[type="submit"] {
			background-color: #2196F3;
			color: #FFFFFF;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.2s ease;
		}

		input[type="submit"]:hover {
			background-color: #0D8BDD;
		}

		.header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 20px;
			background-color: #333333;
			color: #FFFFFF;
		}

		.header a {
			color: #FFFFFF;
			text-decoration: none;
			font-size: 16px;
			font-weight: bold;
			padding: 5px 10px;
			border-radius: 5px;
			transition: background-color 0.2s ease;
		}

		.header a:hover {
			background-color: #666666;
		}
	</style>
</head>
<body>
	<header class="header">
		<a href="homepage.php">Home</a>
		<a href="login.php">Logout</a>
	</header>
	<div class="container">
		<div class="logo">
			<img src="freeclass.jpg" alt="Is the Classroom Empty?">
		</div>
		<form action="classroom.php" method="POST">
			<div class="form-group">
				<label for="room-number">Room Number</label>
				<input type="text" id="room-number" name="room-number" required>
			</div>
			<div class="form-group">
				<label for="time">Time</label>
				<input type="text" id="time" name="time">
			</div>
			<button type="submit" class="btn" name="room_check">Check</button>
		</form>
	</div>
</body>
</html>
