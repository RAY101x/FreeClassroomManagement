<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<style>
        
		body {
            background-color: #FFFFFF;
			margin: 0;
			padding: 0;
			font-family: Arial, Helvetica, sans-serif;
			background-image: url('bg.jpg');
			background-size: cover;
			background-position: center;
			color: #fff;
			text-align: center;
		}

		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: calc(100vh - 60px);
		}

        
		.options {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			width: 80%;
			max-width: 600px;
			padding: 20px;
			background-color: #616161;
			border-radius: 10px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
		}


		
        h1 {
            margin-top: 30px;
            margin-bottom: 50px;
            font-size: 2.5rem;
            transition: color 1s ease-in-out;
        }
		.option {
			width: 100%;
			margin: 10px;
			padding: 20px;
			text-align: center;
			background-color: #5f9ea0;
			color: #fff;
			font-size: 1.5rem;
			border-radius: 10px;
			transition: all 0.3s ease;
			cursor: pointer;
		}

		.option:hover {
			transform: translateY(-5px);
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
		}

		.logout {
			position: absolute;
			top: 20px;
			right: 20px;
			padding: 10px 20px;
			background-color: #5f9ea0;
			color: #fff;
			border-radius: 10px;
			transition: all 0.3s ease;
			cursor: pointer;
			z-index: 1;
		}

		.logout:hover {
			transform: translateY(-5px);
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
		}


		
        
	</style>

</head>
<body>
	<div class="border"></div>
	<a href="login.php" class="logout">Logout</a>
	<h1 id="welcome-text">Welcome!</h1>
	<div class="container">
		<div class="options">
			<h2>Select an option:</h2>
			<div class="option" onclick="location.href='classroom.php';">
				Free Classroom
			</div>
			<div class="option" onclick="location.href='routine.php';">
				Exam Routine
			</div>
		</div>
	</div>
    <script>
    // Change color of welcome text to changing rgb
    let welcomeText = document.getElementById("welcome-text");
    let intervalId = setInterval(function() {
        let r = Math.floor(Math.random() * 256);
        let g = Math.floor(Math.random() * 256);
        let b = Math.floor(Math.random() * 256);
        let color = "rgb(" + r + "," + g + "," + b + ")";
        welcomeText.style.color = color;
    }, 1000);

</script>
</body>
</html>
