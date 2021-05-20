<?php
  session_start();
  include "kozos.php";
  $fiokok = loadUsers("users.txt");

    $uzenet = "";

  if (isset($_POST["submit"])) {


      if (!isset($_POST["username"]) || trim($_POST["username"]) === "" || !isset($_POST["password"]) || trim($_POST["password"]) === "") {

      $uzenet = "<strong>Hiba:</strong> Adj meg minden adatot!";


      } else {

          $felhasznalonev = $_POST["username"];
          $jelszo = $_POST["password"];

          $uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";

      foreach ($fiokok as $fiok) {
        if ($fiok["username"] === $felhasznalonev && $fiok["jelszo"] === $jelszo) {
          $uzenet = "Sikeres belépés!";
            $_SESSION["user"] = $fiok;
            header("Location: index.php");
        }
      }
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
	<link rel="stylesheet" type="text/css" href="css/login.css" />
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
      <li><a href="contact.php">Kapcsolat</a></li>
      <li class="active"><a href="login.php">Bejelentkezés</a></li>
    <?php } ?>
    </ul>
  </nav>
</header>
<main>
	<div class="content" id="borderimage">
		<form action="login.php" method="POST">
			<h2>Bejelentkezés</h2>
			<label>Felhasználónév <input type="text" name="username" placeholder="pl: KissImre" required/></label><br/>
			<label>Jelszó <input type="password" name="password" placeholder="Jelszó" required/></label><br/>
			<input type="submit" value="Bejelentkezés" name="submit">
			<input type="reset" value="Reset">

            <?php
            echo $uzenet;
            ?>

		</form>
		<a href="signup.php">Még nincs fiókja?</a>
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