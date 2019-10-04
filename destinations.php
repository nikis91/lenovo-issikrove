<!DOCTYPE html>
<html>
<head>
	<title>Vilnius</title>

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
			<h1 class= "center-align" style="color: white">Vilnius</h1>
			<p class = "center-align" style="color: white">Lietuvos sostinė</p>
		</div>
		<div class="parallax"><img src="destinations/vilnius.jpg">
		</div>
	</div>

	<div class="container">
		
		<h2 class="grey darken-4 blue-text text-lighten-4">Pragyvenimo kaštai</h1>

	
	

 <?php
		

		// echo "Pavyko!";
		// echo "<br><br>";

		$sql = "SELECT * FROM pragyvenimas2";
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

			<!-- <div class="row"> -->

			<div class="col s12 m12 l4 center-align materialboxed responsive-img">
				<img class="responsive-img" src="destinations/gediminas.jpg">
				<h3 class="center-align">Gedimino pilis</h3>
				<p class="center-align" style="color:black">Vilniaus aukštutinė pilis – gotikinė pilis Vilniuje, kurios liekanos stūkso Gedimino kalno aikštelėje. Papėdėje buvo LDK kunigaikščio Vytauto Didžiojo rezidencija, dabar – atstatyti Valdovų rūmai. Iš pagarbos Vilniaus įkūrėjui LDK kunigaikščiui Gediminui pilis pavadinta jo vardu. Pilis priklauso Vilniaus pilių rezervatui.</p>
			</div>
			<div class="col s12 m12 l4 center-align materialboxed responsive-img">
				<img class="responsive-img" src="destinations/katedra.jpg">
				<h3 class="center-align">Vilniaus Katedra</h3>
				<p class="center-align" style="color:black">Vilniaus Šv. vyskupo Stanislovo ir Šv. Vladislovo arkikatedra bazilika (arba tiesiog Vilniaus katedra)[1] stovi Vilniaus senamiestyje, pilių teritorijoje. Arkivyskupijos ir dekanato centras. Bažnyčioje yra Šv. Kazimiero koplyčia. Prie katedros stovi varpinės bokštas (57 m aukščio).</p>
			</div>
			<div class="col s12 m12 l4 center-align materialboxed responsive-img">
				<img class="responsive-img" src="destinations/kryzius.jpg">
				<h3 class="center-align">Trys Kryžiai</h3>
				<p class="center-align" style="color:black">Trys Kryžiai – paminklas Vilniaus mieste, ant Kreivojo kalno (aukštis nuo papėdės 64-65 m ir 75-76 m virš Vilnelės lygio). Priklauso Vilniaus pilių valstybiniam kultūriniam rezervatui. Pastatytas pagal Antano Vivulskio projektą, paminklą sudaro sujungti trys balti gelžbetoniniai kryžiai.</p>
			</div>
			<!-- </div> -->
		</div>





		
	




<?php 

	include "footer.php";
?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>