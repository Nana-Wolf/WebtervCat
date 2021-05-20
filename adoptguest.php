<?php
    session_start();
  include "kozos.php";
  $hibak = [];

  if (isset($_POST["submit"])) {
    if (!isset($_POST["name"]) || trim($_POST["name"]) === "")
      $hibak[] = "A név megadása kötelező!";

    if (!isset($_POST["birthdate"]) || trim($_POST["birthdate"]) === "")
      $hibak[] = "A születési nap megadása kötelező!";

    if (!isset($_POST["city"]) || trim($_POST["city"]) === "")
      $hibak[] = "Az város megadása kötelező!";

    if (!isset($_POST["street"]) || trim($_POST["street"]) === "")
      $hibak[] = "Az utca megadása kötelező!";


    if (!isset($_POST["phone"]) || trim($_POST["phone"]) === "")
      $hibak[] = "A telefonszám megadása kötelező!";

    if (!isset($_POST["number"]) || trim($_POST["number"]) === "")
      $hibak[] = "A szám megadása kötelező!";

    if (empty($_POST["check"]))
      $hibak[] = "A checkbox kitöltése kötelező!";

    if($_POST["number"]<1){
        $hibak[] = "Hibas cicaszam";
    }

    if (!is_numeric($_POST["phone"])){
        $hibak[] = "A telefonszamban csak szamok legyenek!";
    }



    if(isset($_POST["vol"]))
    $nev = $_POST["name"];
    $szulinap = $_POST["birthdate"];
    $varos = $_POST["city"];
    $utca = $_POST["street"];
    $emelet = $_POST["floor"];
    $telefon = $_POST["phone"];
    $szam = $_POST["number"];
    $range = $_POST["vol"];
    $checkbox = $_POST["check"];

    $siker = FALSE;
    if (empty($hibak)) {
      $fiokok[] = ["name" => $nev, "birthdate" => $szulinap, "city" => $varos, "street" => $utca, "floor" => $emelet, "phone" => $telefon, "number" => $szam, "vol" => $range];
      saveUsers("guestrequest.txt", $fiokok);
      $siker = TRUE;
    } else {
      $siker = FALSE;
    }
  }
?>


<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Farkas Naomi, Juhász Ferenc"/>
	<meta name="keywords" content="cica, cicák, macska, macskák, örökbefogadás, menhely">
	<title>Cica örökbefogadás</title>
	<link rel="stylesheet" type="text/css" href="css/all.css"/>
	<link rel="stylesheet" type="text/css" href="css/adoptquest.css" />
	<link rel="icon" href="img/icon.jpg"/>
</head>
<body>
<header>
	<nav>
    <ul>
      <li><a href="index.php">Főoldal</a></li>
      <li><a href="galeria.php">Cicakereső</a></li>
      <li class="active"><a href="adoptguest.php">Örökbefogadás</a></li>
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
	<div class= "content">
		<h2>Örökbefogadás</h2>
		<form action = "adoptguest.php" method = "POST" id="adoptadminPost">

			<label>Teljes név: <input type="text" name="name" required/></label><br/>
			<label>Születési dátum: <input type="date" name="birthdate" required/></label><br/>
			<fieldset>
				<legend>Lakhely</legend>
			<label>Város: <input type="text" name="city" required/></label><br/>
			<label>Utca, házszám: <input type="text" name="street" required/></label><br/>
			<label>Emelet, ajtó: <input type="text" name="floor"/></label><br/>
			</fieldset><br>
			<label>Telefonszám: <input type="tel" name="phone" required/></label><br/>
			<label>Választott cica száma <input type="number" name="number" required/></label><br/>
			<label>Mennyire tapasztalt cicatartó? <input type="range" id="vol" name="vol" min="0" max="100"></label>
			<label>További vakcinákat fizetem <input type="checkbox" name="check"></label><br>

			<input type="submit" name="submit" value="Örökbefogadás">
			<input type="reset" name="reset" value="Reset">

            <?php
            if (isset($siker) && $siker === TRUE) {
                echo "<p>Sikeres adatelküldés!</p>";
            } else {
                echo implode(" | ", array_unique($hibak));
            }
            ?>
			
		</form>

	</div>
	<iframe src="https://www.boredpanda.com/cute-kittens/?utm_source=google&utm_medium=organic&utm_campaign=organic" title="Cutiest-kittens">
	</iframe>
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