<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Farkas Naomi, Juhász Ferenc"/>
	<meta name="keywords" content="cica, cicák, macska, macskák, örökbefogadás, menhely">
	<title>Cica örökbefogadás</title>
	<link rel="stylesheet" type="text/css" href="css/catfinder.css" />
	<link rel="icon" href="img/icon.jpg"/>

</head>
<body>
<header>
	<nav>
    <ul>
      <li><a href="index.php">Főoldal</a></li>
      <li class="active"><a href="galeria.php">Cicakereső</a></li>
      <li><a href="adoptguest.php">Örökbefogadás</a></li>
        <li><a href="adoptadmin.php">Örökbeadás</a></li>
    <?php if (isset($_SESSION["user"])) { ?>

      <li><a href="logout.php">Kijelentkezés</a></li>
    <?php } else { ?>
      <li><a href="contact.php">Kapcsolat</a></li>
      <li><a href="login.php">Bejelentkezés</a></li>
    <?php } ?>
    </ul>
  </nav>
</header>
<main>
	<div class="kepek">

		<div class="gallery magical">
		    <img src="img/cat495.jpg" alt="Géza">
		  	<div class="code">Gizmó, 123472</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat4520.jpg" alt="Praliné">
		  	<div class="code">Praliné, 123470</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat1235.jpg" alt="Cirmi">
		  	<div class="code">Cirmi, 123456</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat1625.jpg" alt="Oscar">
		  	<div class="code">Oscar, 123457</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat2848.jpg" alt="Lucifer">
		  	<div class="code">Lucifer, 123461</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat3240.jpg" alt="Sanyi">
		  	<div class="code">Sanyi, 123462</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat4114.jpg" alt="Lizi">
		  	<div class="code">Lizi, 123463</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat4252.jpg" alt="Süti">
		  	<div class="code">Süti, 123464</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat4464.jpg" alt="Puding">
		  	<div class="code">Puding, 123465</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat2520.jpg" alt="Hedvig">
		  	<div class="code">Hedvig, 123467</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat2789.jpg" alt="Manó">
		  	<div class="code">Manó, 123468</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat495.jpg" alt="Ribizli">
		  	<div class="code">Ribizli, 123469</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat2852.jpg" alt="Zserbó">
		  	<div class="code">Zserbó, 123471</div>
		</div>

		<div class="gallery magical">
		    <img src="img/cat1775.jpg" alt="Géza">
		  	<div class="code">Géza, 123472</div>
		</div>


		<div class="gallery magical">
		    <img src="img/cat4309.jpg" alt="Géza">
		  	<div class="code">Luca, 123472</div>
		</div>

		<div class="gallery magical">
		    <img src="img/dcat657.jpg" alt="Démon">
		  	<div class="code">Démon, 123473</div>
		</div>

		<div class="gallery magical">
		    <img src="img/bcat743.jpg" alt="Bence">
		  	<div class="code">Bence, 123474</div>
		</div>
	</div>



	<div class="content">
		<h2>Cicák</h2>
		<table class="table">
			<thead>
		<tr>
			<th id="catid">A cica kódja</th>
			<th id="catname">Neve</th>
			<th id="catvacc">Ilyen oltásokat kapott</th>
			<th id="catsick">Betegségei</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td headers="catid">123454</td>
			<td headers="catname">Gizmó</td>
			<td headers="catvacc">Macskaleukózis ellen, veszettség ellen</td>
			<td headers="catsick">Depresszió</td>
		</tr>
		<tr>
			<td headers="catid">123455</td>
			<td headers="catname">Luca</td>
			<td headers="catvacc">Macskaleukózis ellen, veszettség ellen</td>
			<td headers="catsick">-</td>
		</tr>

		<tr>
			<td headers="catid">123456</td>
			<td headers="catname">Cirmi</td>
			<td headers="catvacc">Macskaleukózis ellen, veszettség ellen</td>
			<td headers="catsick">-</td>
		</tr>

		<tr>
			<td headers="catid">123457</td>
			<td headers="catname">Oscar</td>
			<td headers="catvacc">Macskaleukózis ellen, kombinált oltás</td>
			<td headers="catsick">-</td>
		</tr>

		<tr>
			<td headers="catid">123458</td>
			<td headers="catname">Bajusz</td>
			<td headers="catvacc">Kombinált oltás, FIP elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123459</td>
			<td headers="catname">Pisze</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123460</td>
			<td headers="catname">Pocak</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
			<tr>
			<td headers="catid">123461</td>
			<td headers="catname">Lucifer</td>
			<td headers="catvacc">Macskaleukózis ellen, veszettség ellen</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123462</td>
			<td headers="catname">Sanyi</td>
			<td headers="catvacc">Macskaleukózis ellen, kombinált oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123463</td>
			<td headers="catname">Lizi</td>
			<td headers="catvacc">Kombinált oltás, FIP elleni oltás</td>
			<td headers="catsick">Sántít a bal hátsó lábára</td>
		</tr>
		<tr>
			<td headers="catid">123464</td>
			<td headers="catname">Suti</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123465</td>
			<td headers="catname">Puding</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123466</td>
			<td headers="catname">Zeller</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123467</td>
			<td headers="catname">Hedvig</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123468</td>
			<td headers="catname">Manó</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123469</td>
			<td headers="catname">Ribizli</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123470</td>
			<td headers="catname">Praliné</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123471</td>
			<td headers="catname">Zserbó</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		<tr>
			<td headers="catid">123472</td>
			<td headers="catname">Géza</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">Süket a jobb fülére</td>
		</tr>
			<tr>
			<td headers="catid">123473</td>
			<td headers="catname">Démon</td>
			<td headers="catvacc">Kombinált oltás</td>
			<td headers="catsick">-</td>
		</tr>
			<tr>
			<td headers="catid">123474</td>
			<td headers="catname">Bence</td>
			<td headers="catvacc">Kombinált oltás, veszettség elleni oltás</td>
			<td headers="catsick">-</td>
		</tr>
		</tbody>
		</table>
	</div>
</main>
<aside>
	<h6>Álltalunk ajánlott szakember elérhetősége</h6>
	<p><a href="https://www.kisallat-ambulancia.hu/">Szakember</a> </p>
</aside>

<footer>
	<p><b>Készítette</b></p>
	<p> Juhász Ferenc, Farkas Naomi</p>
</footer>
</body>
</html>