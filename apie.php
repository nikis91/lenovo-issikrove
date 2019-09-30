<!DOCTYPE html>
<html>
<head>
	<title>Framework paskaita</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">


	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "rugsejis19";

	// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
		if (!$conn) {
			echo "nepavyko";
			die("Connection failed: " . mysqli_connect_error());
		}

		mysqli_set_charset($conn, "utf8");

	?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

	<?php 

		include "header.php";
	?>

	<div class="parallax-container valign-wrapper virsus">
		<div>
			<h1 class = "center-align" >Das Auto</h1>
			<p class = "center-align"> Lorem ipsum dolor sit amet.</p>
		</div>
		<div class="parallax"><img src="https://picsum.photos/1920/1080">
		</div>
	</div>

	<div class="container">
		<h1 class="orange darken-4 blue-text text-lighten-4">Apie puslapis</h1>


	<?php
		

		// echo "Pavyko!";
		// echo "<br><br>";

		$sql = "SELECT * FROM barai";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {

			echo "<table border='1'>";


    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				
				// print_r($row);

				// echo $row["name"] . " - " . $row["rating"];
				// echo "<br>";

				echo "<tr>";
					echo "<td>" . $row["id"] . "</td>";
    				echo "<td>" . $row["name"] . "</td>";
    				echo "<td>" . $row["address"] . "</td>";
    				echo "<td>" . $row["rating"] . "</td>";
    			echo "</tr>";

			}

			echo "</table>";

		} else {
			echo "0 results";
		}

		mysqli_close($conn);
	?>


		<div class="row">

			<div class="col s12 m12 l4 center-align">
				<img class="responsive-img" src="https://picsum.photos/200">
				<h3 class="center-align">Block title</h3>
				<p class="center-align">Lorem ipsum dolor sit amet, consectetur.</p>
			</div>
			<div class="col s12 m6 l4 center-align">
				<img class="responsive-img" src="https://picsum.photos/200">
				<h3 class="center-align">Block title</h3>
				<p class="center-align">Lorem ipsum dolor sit amet, consectetur.</p>
			</div>
			<div class="col s12 m6 l4 center-align">
				<img class="responsive-img" src="https://picsum.photos/200">
				<h3 class="center-align">Block title</h3>
				<p class="center-align">Lorem ipsum dolor sit amet, consectetur.</p>
			</div>
		</div>

		<img class="materialboxed responsive-img" src="https://picsum.photos/2000/1000">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>

	<footer class="page-footer orange">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>