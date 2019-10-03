<!DOCTYPE html>
<html>
<head>
	<title>Flydom</title>

	<?php 

		include "head-settings.php";
	?>

</head>
<body>

	<?php 

		include "header.php";
	?>


  <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white black-text darken-text-2" href="">More</a>
    </div>
    <div class="carousel-item white-text parallax" style="background-image: url(https://picsum.photos/1921/1080);" href="#one!">
     <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" style="background-image: url(https://picsum.photos/1920/1080);" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    </div>
  </div>

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
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>