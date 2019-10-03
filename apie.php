<!DOCTYPE html>
<html>
<head>
	<title>2 Framework paskaita</title>

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
			<h1 class="white-text center-align">Apie mus</h1>
			<!-- <p class="white-text center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p> -->
		</div>


      <div class="parallax">
      <img alt= "lektuvas" src="images/lektuvas.jpg">
    </div>
  </div>


  <div class="row">

   <div class="col s12 m6 l3 center-align">
     <img class="responsive-img circle" src="https://picsum.photos/100">
     <h3 class="center-align">Ilja</h3>
     <p class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>

     <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Ilja</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Uždaryti</a>
      </div>
    </div>
    <button data-target="modal1" class="waves-effect waves-light btn modal-trigger">Susipažinkime</button>
  </div>


  <div class="col s12 m6 l3 center-align">
   <img class="responsive-img circle" src="https://picsum.photos/100">
   <h3 class="center-align">Nikita</h3>
   <p class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
   <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Nikita</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Uždaryti</a>
    </div>
  </div>
  <button data-target="modal2" class="waves-effect waves-light btn modal-trigger">Susipažinkime</button>
</div>

<div class="col s12 m6 l3 center-align">
 <img class="responsive-img circle" src="https://picsum.photos/100">
 <h3 class="center-align">Žymantas</h3>
 <p class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
 <div id="modal3" class="modal">
  <div class="modal-content">
    <h4>Žymantas</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Uždaryti</a>
  </div>
</div>
<button data-target="modal3" class="waves-effect waves-light btn modal-trigger">Susipažinkime</button>
</div>


<div class="col s12 m6 l3 center-align">
  <img class="responsive-img circle" src="https://picsum.photos/100">
  <h3 class="center-align">Juta</h3>
  <p class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
  <div id="modal4" class="modal">
    <div class="modal-content">
      <h4>Juta</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a "href="#!" class="modal-close waves-effect waves-green btn-flat">Uždaryti</a>
    </div>
  </div>
  <button data-target="modal4" class="waves-effect waves-light btn modal-trigger">Susipažinkime</button>
</div>
</div>

<ul class="collapsible popout center-align">


  <li>


    <div class="collapsible-header"><i class="material-icons">business_center</i>Karjera</div>

    <div class="collapsible-body">
      <b><h style="color:orange">DĖMESIO!</b></h><br>
      Ieškome dar vieno ar net dviejų šeimos narių!<br>
      Jei Tu esi savimi pasitinkintis, ambicingas, atsakingas ir turi puikius bendravimo įgūdžius, tuomet kviečiame Tave prisijungti prie mūsų veržlios komandos!<br>
      <b><h style="color:orange">DARBO POBŪDIS:</b></h><br>
      Bendravimas su klientais, kurie ieško kokybiško poilsio;<br>
      Nepriekaištingas kiekvieno kliento aptarnavimas;<br>
      Atsakomybė už asmeninių pardavimų augimą;<br>
      Sutarčių sudarymas.<br>
      <b><h style="color:orange">KOKIO KOLEGOS IEŠKOME?</b></h><br>
      Tokio, kuris vertina gerą savo bei organizacijos vardą;<br>
      Yra motyvuotas;<br>
      Turi puikius teksto rašymo įgūdžius;<br>
      Yra tikras optimistas!<br>
      Reiklus ne tik sau, bet ir kitiems;<br>
      Turi puikų humoro jausmą;<br>
      Yra beprotiškai atsakingas.<br>
      Svarbiausia ne tik tai, ką Tu moki, bet ir Tavo asmenybė!<br>
      <b><h style="color:orange">KODĖL VERTA RINKTIS MUS?</b></h><br>
      Nuoširdus ir draugiškas kolektyvas<br>
      Vertinama iniciatyva<br>
      Stabilus bei nuo Tavo rezultatų didėjantis atlyginimas<br>
      Nemokamos kelionės<br>
      Suteiksi KLIENTUI galimybę keliauti pigiau!<br>
      <b><h style="color:orange">RAŠYK:</b> </h>
      <a href="mailto:negausitutodarbo@flydom.lt?subject=Gyvenimo aprašymas vadybininko pozicijai užimti">negausitutodarbo@flydom.lt</a>
      <br><br><br>


      <div>
        <h9 style="color:orange" class="center-align"><b>ARBA UŽPILDYK ŠIĄ FORMĄ</b> </h9>
        <form class="col s12" >
          <div class="row">
           <div class="input-field col s4">
            <i class="material-icons prefix">account_circle</i>
            <input name=vardas id="icon_prefix" type="text" class="validate" value="kazaks">
            <label for="icon_prefix">Tavo vardas</label>


          </div>

          <div class="input-field col s4">
            <i class="material-icons prefix">email</i>
            <input name="emailas" id="icon_email" type="email" class="validate" value="kazaks@kjsd.lt">
            <label for="icon_email">El pašto adresas</label>
          </div>

          <div class="input-field col s4">
            <i class="material-icons prefix">phone</i>
            <input name="numberis" id="icon_telephone" type="tel" class="validate" value="34545555">
            <label for="icon_telephone">Telefono numeris</label>
          </div>


          <div class="row center-align">
            <div class="input-field col s6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea name="laiskas" id="icon_prefix2" class="materialize-textarea">hhjasjdh</textarea>
              <label for="icon_prefix2">Motyvacinis laiškas</label>
            </div>
          </div>
          <div>
            <button class="btn waves-effect waves-light" type="submit" name="action" id="submit" for="submit">Siųsti

              <i class="material-icons right">send</i>
            </button>
          </div>
               

                        <?php

                        if (isset($_GET['vardas'])) {

                         $msg=$_GET['vardas']." ".$_GET['emailas']." ".$_GET['numberis']." ".$_GET['laiskas'];
                         print_r($_GET);
                        // $_GET['vardas'] 
                         print_r($_GET['vardas'] );

                         mail('jbutvilaitei@gmail.com', 'test', $msg);

                       }

                        ?>  
                     </div>
                   </form>
                 </div>
               </div>
  </li> 

             <li>

              <div class="collapsible-header"><i class="material-icons">place</i>Vizija, misija ir kita</div>
              <div class="collapsible-body">

                <b><h style="color:orange">Apie mus</b></h><br>
                  MB Flydom – tai į kliento poreikius orientuota specialistų komanda, turinti didelę patirtį turizmo bei aptarnavimo srityse. Įmonė buvo įkurta 2018 metais, tad drąsiai gali vadintis viena seniausių turizmo agentūrų Lietuvoje. Kartu su pagrindinėmis savo paslaugomis klientams suteikiame pridėtinę vertę, sutaupytą laiką bei ramybę.<br><br>

                  <b><h style="color:orange">Misija</b></h><br>
                    Padėti klientui efektyviai organizuoti jo keliones.<br><br>

                    <b><h style="color:orange">Specialistai</b></h><br>
                      Stengiamės dirbti tik su savo srities profesionalais. Visi darbuotojai turi rezervavimo sistemų mokymų, klientų aptarnavimo mokymų ir kitus sertifikatus, įrodančius jų profesionalumą. Dalis darbuotojų patirties sėmėsi tarptautinėse įmonėse ir dalyvaudami įvairiose užsienio bei Lietuvos projektuose. Visą savo sukauptą patirtį ir profesionalumą toliau sėkmingai vysto turizmo versle.<br><br>

                      <b><h style="color:orange">Vizija</b></h><br>
                        Pirmaujanti ir profesionaliausia kelionių agentūra Lietuvoje.
              </div>
             </li>
</ul>
                 <br>

                  <img class="materialboxed responsive-img" src="https://picsum.photos/2000/1000">


<?php 

	include "footer.php";
?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>