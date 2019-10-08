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
		<img class = "paveikslas2" src="https://picsum.photos/400/100">
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

  <h2>Užsakymo forma</h2>
  <p class="center-align">UŽPILDYKITE FORMĄ - PASAULIS LAUKIA JŪSŲ!!!</p>

	<div class="row">
      <div class="col s6">

      	VILNIUS

        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Įveskite vardą" id="first_name" type="text" class="validate">
          <label for="first_name">Vardas</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Įveskite norimą šalį" id="salis" type="text" class="validate">
          <label for="password">Šalis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">El. paštas</label>
        </div>
      </div>
      <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Pasirinkite veiksmą</option>
      <option value="1">Padaryti užsakymą</option>
      <option value="2">Užsiregistruoti konsultacijai</option>
      <option value="3">Palikti atsiliepimą</option>
    </select>
    <label>Pasirinkite veiksmą:</label>
  </div>
  <a class="waves-effect waves-light btn color blue">Išsiųsti</a>
    </form>
  </div>



      </div>
      <div class="col s6">

     	 KAUNAS

       <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Įveskite vardą" id="first_name" type="text" class="validate">
          <label for="first_name">Vardas</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Įveskite norimą šalį" id="salis" type="text" class="validate">
          <label for="password">Šalis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">El. paštas</label>
        </div>
      </div>
      <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Pasirinkite veiksmą</option>
      <option value="1">Padaryti užsakymą</option>
      <option value="2">Užsiregistruoti konsultacijai</option>
      <option value="3">Palikti atsiliepimą</option>
    </select>
      <label>Pasirinkite veiksmą:</label>
      </div>
      <a class="waves-effect waves-light btn color blue">Išsiųsti</a>
    </form>
  </div>

      </div>
  </div>


		
</div>











<?php 

	include "footer.php";
?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>