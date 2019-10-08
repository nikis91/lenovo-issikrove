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
<!--       <a class="btn waves-effect white black-text darken-text-2" href="destinations.php">More</a> -->
    </div>
    <div class="carousel-item black-text parallax" style="background-image: url(destinations/vilnius.jpg);" href="#one!">
     <h2>Lietuva</h2>
      <p class="black-text">Vilnius</p>
       <a class="btn waves-effect white black-text darken-text-2" href="destinations.php">More</a>
    </div>
    <div class="carousel-item amber black-text" style="background-image: url(destinations/paryzius.jpg);" href="#two!">
      <h2>Prancūzija</h2>
      <p class="black-text">Parzyžius</p>
       <a class="btn waves-effect white black-text darken-text-2" href="destinations2.php">More</a>
    </div>
    </div>
  </div>

    <h2>Gallery</h2>

<div class="slickas">
  <div><img class="materialboxed" src="https://picsum.photos/1920/1080"></div>
  <div><img class="materialboxed" src="https://picsum.photos/seed/1/1920/1080"></div>
  <div><img class="materialboxed" src="https://picsum.photos/seed/2/1920/1080"></div>
   <div><img class="materialboxed" src="https://picsum.photos/seed/3/1920/1080"></div>
  <div><img class="materialboxed" src="https://picsum.photos/seed/4/1920/1080"></div>
  <div><img class="materialboxed" src="https://picsum.photos/seed/5/1920/1080"></div>
</div>


  	<h2 style="color: white;" class= antraste>More places to see</h2> 	
	<div class="blokai">
		<div class="blokas">
			<img style="border-radius: 20%; border-style: solid;"  src="https://picsum.photos/seed/21/1920/1080">
			<h3>Antraste</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. <a href="https://www.google.com" target="blank">Learn more</a></p>


		</div>
		<div class="blokas">
			<img style="border-radius: 20%; border-style: solid;" src="https://picsum.photos/seed/27/1920/1080">
			<h3>Antraste</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. <a href="https://www.google.com" target="blank">Learn more</a></p></p>
		</div>
		<div class="blokas">
			<img style="border-radius: 20%; border-style: solid;" src="https://picsum.photos/seed/22/1920/1080">
			<h3>Antraste</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. <a href="https://www.google.com" target="blank">Learn more</a></p></p>
		</div>
	</div>

		<h1 style="color: black; text-align: center;">We also offer</h1>


<div class="container1">
<h3 style="font-style: oblique; text-align: center; padding-top: 30px;" >Antraste</h3>
<div class="row">

      <div class="col s4">
      	<i class="medium material-icons">accessibility</i>
      	<h5 style="color: red; padding-top: 10px; text-align: center;">ANTRASTE</h5>
      	<h5 style="text-align: center;">Antraste</h5>
      	<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua.
      	</p>
        <!-- PromoH Content 1 goes here -->
      </div>
      <div class="col s4">
      	<i class="medium material-icons">call</i>
      	<h5 style="color: red; padding-top: 10px; text-align: center;">ANTRASTE</h5>
      	<h5 style="text-align: center;">Antraste</h5>
      	<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua.
      	</p>
        <!-- Promo Content 2 goes here -->
      </div>
      <div class="col s4">
      	<i class="medium material-icons">thumb_up</i>
      	<h5 style="color: red; padding-top: 10px; text-align: center;">ANTRASTE</h5>
      	<h5 style="text-align: center;">Antraste</h5>
      	<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua.
      	</p>

      <!-- Promo Content 3 goes here -->
      </div>
<a href="https://www.google.com" target="blank" onMouseOver="this.style.color='red'" onMouseOut="this.style.color=''"><h2 style="text-align: center; padding-bottom: 50px; text-decoration-line: underline;">Antraste</h2></a>


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