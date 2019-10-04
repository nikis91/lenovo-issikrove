<!DOCTYPE html>
<html>
<head>
	<title>Framework paskaita</title>
	
	<?php 

		include "head-settings.php";
	?>

</head>
<body>
	
	<?php 

		include "header.php";
	?>
	

<div class = "container">
	<div class = "skaidre">
		<img class = "paveikslas" src="https://picsum.photos/400/200">
			<div class = "tekstas">
				<h1>Keliaukite su mumis!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
	</div>

	
	<div class = "skaidre2">
		<img class = "paveikslas" src="https://picsum.photos/400/100">
			<div class = "tekstas2">
				<h2>Mūsų padaliniai</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
	</div>

	 <!-- <div class="row">
      <div class="col s6">

      	6-columns (one-half)

      </div>
      <div class="col s6">

     	 6-columns (one-half)

      </div>
    </div> -->

  

<h2>Užsakymo forma</h2>
<p class="center-align">UŽPILDYKITE FORMĄ - PASAULIS LAUKIA JŪSŲ!!!</p>

<div class="container2">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Vardas</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="vardas" placeholder="Įveskite vardą..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">El. paštas (ne paštetas)</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="pastas" placeholder="Įveskite el. paštą..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Pasirinkite veiksmą</label>
      </div>
      <div class="col-75">
        <select id="veiksmas" name="veiksmas">
          <option value="uzsakyti">Padaryti užsakymą</option>
          <option value="konsultacija">Užsiregistruoti konsultacijai</option>
          <option value="atsiliepimas">Palikti atsiliepimą</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
	


		
</div>











<?php 

	include "footer.php";
?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>