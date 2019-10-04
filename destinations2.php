<!DOCTYPE html>
<html>
<head>
	<title>Paryžius</title>

	<?php 

		include "head-settings.php";
	?>

</head>
<body>

	<?php 

		include "header.php";
	?>

	<div class="parallax-container valign-wrapper virsus">
		<div>
			<h1 class = "center-align">Paryžius</h1>
			<p class = "center-align">Prancūzijos sostinė</p>
		</div>
		<div class="parallax"><img src="destinations/paryzius.jpg">
		</div>
	</div>

	<div class="container">

		<h2 class="grey darken-4 blue-text text-lighten-4">Pragyvenimo kaštai</h1>




	<?php
		

		// echo "Pavyko!";
		// echo "<br><br>";

		$sql = "SELECT * FROM pragyvenimas";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {

			echo "<table border='1'>";


    // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				
				// print_r($row);

				// echo $row["Produkto pavaidinimas"] . " - " . $row["Kaina"];
				// echo "<br>";

				echo "<tr>";
					echo "<td>" . $row["ID"] . "</td>";
    				echo "<td>" . $row["Produkto pavadinimas"] . "</td>";
    				echo "<td>" . $row["Kiekis"] . "</td>";
    				echo "<td>" . $row["Kaina"] . "</td>";
    			echo "</tr>";

			}

			echo "</table>";

		} else {
			echo "0 results";
		}

		mysqli_close($conn);
	?>

	</div>


		<br><br><br>


		

		

		<div class="container">
			<h2 class="grey darken-4 blue-text text-lighten-4">Lankytini objektai</h1>


				<div class="row">

					<a href="destinations/eifelis.jpg" data-fancybox data-caption="Eifelio bokštas (pranc. Tour Eiffel) – vienas iš Paryžiaus simbolių, pastatytas 1887–1889 m., kaip laikinas statinys, Paryžiuje, šalia Senos upės kranto.">
						<img src="destinations/eifelis.jpg" />
					</a>

					<a href="destinations/louvre.jpg" data-fancybox data-caption="Luvras (pranc. Palais du Louvre) – buvę Prancūzijos karalių rūmai Paryžiaus centre tarp dešiniojo Senos kranto ir Rue de Rivoli.">
						<img src="destinations/louvre.jpg" />
					</a>

					<a href="destinations/eliziejus.jpg" data-fancybox data-caption="Eliziejaus laukai (pranc. Champs-Élysées) – prestižinė Paryžiaus alėja.">
						<img src="destinations/eliziejus.jpg" />
					</a>
				</div>
		</div>


			<!-- <div class="col s12 m12 l4 center-align">
				<img class="materialboxed responsive-img" src="destinations/eifelis.jpg">
				<h3 class="center-align">Eifelio bokštas</h3>
				<p class="center-align" style="color:white">Eifelio bokštas (pranc. Tour Eiffel) – vienas iš Paryžiaus simbolių, pastatytas 1887–1889 m., kaip laikinas statinys, Paryžiuje, šalia Senos upės kranto. Bokštas buvo statomas 1889 m. rengtai Pasaulinei parodai ir iki 1931 m. buvo aukščiausias pasaulio statinys (301 metras). Statinys priklauso Paryžiaus miestui.</p>
			</div>
			<div class="col s12 m12 l4 center-align">
				<img class="materialboxed responsive-img" src="destinations/louvre.jpg">
				<h3 class="center-align">Luvras</h3>
				<p class="center-align" style="color:white">Luvras (pranc. Palais du Louvre) – buvę Prancūzijos karalių rūmai Paryžiaus centre tarp dešiniojo Senos kranto ir Rue de Rivoli. Šiuo metu vienas žymiausių pasaulio muziejų.</p>
			</div>
			<div class="col s12 m12 l4 center-align">
				<img class="materialboxed responsive-img" src="destinations/eliziejus.jpg">
				<h3 class="center-align">Eliziejaus laukų alėja</h3>
				<p class="center-align" style="color:white">Eliziejaus laukai (pranc. Champs-Élysées) – prestižinė Paryžiaus alėja. Eliziejaus laukai yra penkta brangiausia gatvė pasaulyje prekybinių patalpų nuomos atžvilgiu. Tokius duomenis pateikia tarptautiniai nekilnojamojo turto rinkos analitikai „Cushman & Wakefield“.</p>
			</div> -->
		


		

<?php 

	include "footer.php";
?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>