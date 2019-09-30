<!DOCTYPE html>
<html>
<head>
	<title>Framework paskaita</title>

	<?php 

		include "head-setting.php"
	?>

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
		<h1 class="orange darken-4 blue-text text-lighten-4">Antraštė</h1>


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

<?php 

	include "footer.php";
?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>