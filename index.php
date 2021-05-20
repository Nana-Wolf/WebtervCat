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
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="icon" href="img/icon.jpg"/>

</head>
<body>
<header>
	<nav>
    <ul>
      <li class="active"><a href="index.php">Főoldal</a></li>
      <li><a href="galeria.php">Cicakereső</a></li>
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
	<br><br>
	<h1>Cica örökbefogadás</h1>

	<video id="video1" controls>
 		<source src="video/KittyCuteness.mp4" type="video/mp4"/>
  		Sajnálom, a böngészője nem támogatja a videóállományt.
	</video>


	<video id="video2" controls>
		<source src="video/KittySleep.mp4" type="video/mp4"/>
		Sajnálom, a böngészője nem támogatja a videóállományt.
	</video>

<aside>
	<h6>Álltalunk ajánlott szakember elérhetősége</h6>
	<p><a href="https://www.kisallat-ambulancia.hu/">Szakember</a> </p>
</aside>
</main>

<footer>
	<p><b>Készítette</b></p>
	<p> Juhász Ferenc, Farkas Naomi</p>
</footer>

</body>
</html>