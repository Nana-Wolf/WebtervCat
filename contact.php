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
	<link rel="stylesheet" type="text/css" href="css/all.css"/>
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
	<link rel="icon" href="img/icon.jpg"/>
</head>
<body>
<header>
	<nav>
    <ul>
      <li><a href="index.php">Főoldal</a></li>
      <li><a href="galeria.php">Cicakereső</a></li>
      <li><a href="adoptguest.php">Örökbefogadás</a></li>
        <li><a href="adoptadmin.php">Örökbeadás</a></li>
    <?php if (isset($_SESSION["user"])) { ?>
      <li><a href="logout.php">Kijelentkezés</a></li>
    <?php } else { ?>
      <li class="active"a><a href="contact.php">Kapcsolat</a></li>
      <li><a href="login.php">Bejelentkezés</a></li>
    <?php } ?>
    </ul>
  </nav>
</header>
<main>
	<div class="content">
		<h2>
			<u>Hogy fogadjon örökbe macskát?</u>
		</h2>
		<p>
			Akár egy felnőtt macska, akár egy apró cukiság tetszett meg, a teendői a következők:
			<strong>Írjon a <em>peldacicaemail@gmail.com</em>-ra egy levelet. A levélnek tartalmaznia kell a <mark>nevét, telefonszámát, lakóhelyét</mark> és egy rövid <i>indoklást</i>, hogy miért lenne ön megfelelő gazdi.</strong>
		</p>
	</div>

	<div class="gallery">
		<img src="img/cat4520.jpg" alt="Praliné képe">
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