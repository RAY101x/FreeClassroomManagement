<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Courses</title>
	<style>
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

		input {
			display: block;
			margin: 5px auto;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
			width: 70%;
			font-size: 16px;
		}

		button {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			margin: 10px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

		button:hover {
			background-color: #3e8e41;
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
		
		.homepage-link {
			text-decoration: none;
			font-size: 20px;
			font-weight: bold;
			color: #333;
			margin-left: 20px;
		}
		
		.logout-btn {
			background-color: #f44336;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			margin-right: 20px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}
		
		.logout-btn:hover {
			background-color: #d32f2f;
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
		<img src="exam.jpg" alt="ClassroomEmpty?">
	</div>
	<div>
		<h1>Add Courses</h1>
		<p>Please enter the number of courses you would like to add:</p>
		<form action="" method="post">
			<input type="number" name="num_courses" placeholder="Enter number of courses">
			<button type="submit" name="submit_num_courses">Submit</button>
		</form>

		<?php 
		if (isset($_POST['submit_num_courses'])) {
			$num_courses = $_POST['num_courses'];
			echo '<form action="" method="post">';
			for ($i = 1; $i <= $num_courses; $i++) {
				echo '<input type="text" name="course_name_' . $i . '" placeholder="Enter course name ' . $i . '">';
			}
			echo '<button type="submit" name="submit_courses">Add Courses</button>';
			echo '</form>';
		}
		if (isset($_POST['submit_courses'])) {
			$course_name = $_POST['course_name_'];
		  
			// Query the database for the selected course's information
			$sql = "SELECT course_name, exam_date, exam_time, exam_room FROM courses WHERE course_name='$course_name'";
			$result = $db->query($sql);
		  
			// Output the selected course's information
			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
				echo '<h2>' . $row["course_name"] . '</h2>';
				echo '<p>Exam Date: ' . $row["exam_date"] . '</p>';
				echo '<p>Exam Time: ' . $row["exam_time"] . '</p>';
				echo '<p>Exam Room: ' . $row["exam_room"] . '</p>';
			  }
			} else {
			  echo '<p>No information found for selected course.</p>';
			}
		  }
		?>

	</div>
</div>
</body>
</html>
	