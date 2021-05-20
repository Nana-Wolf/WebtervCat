<?php

session_start();
if (!isset($_SESSION["user"])) {
    header('Location: login.php');
}
include "kozos.php";
$hibak = [];
$hibak2 = [];
$siker2 = FALSE;
if (isset($_POST["submit"])) {

    if (!isset($_POST["catname"]) || trim($_POST["catname"]) === "") {
        $hibak[] = "A Macskanév megadása kötelező!";
    }

    if (!isset($_POST["breed"]) || trim($_POST["breed"]) === "") {
        $hibak[] = "A fajta megadása kötelező!";
    }

    if (!isset($_POST["vaccine"]) || trim($_POST["vaccine"]) === "") {
        $hibak[] = "Az oltás megadása kötelező!";
    }

    if (!isset($_POST["age"]) || trim($_POST["age"]) === "") {
        $hibak[] = "Az életkor megadása kötelező!";
    }

    if (!isset($_POST["color"]) || trim($_POST["color"]) === "") {
        $hibak[] = "Az életkor megadása kötelező!";
    }

    if (is_numeric($_POST["vaccine"])){
        $hibak[] = "A vakcina nevét kérjük, nem a számát!";
    }

    if (empty($hibak)) {

        $macskanev = $_POST["catname"];
        $fajta = $_POST["breed"];
        $oltas = $_POST["vaccine"];
        $kor = $_POST["age"];
        $nem = $_POST["gender"];
        $szin = $_POST["color"];

  if (isset($_FILES["fileToUpload"])) {


    $engedelyezett_kiterjesztesek = ["jpg", "jpeg", "png"];

    $kiterjesztes = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

    if (in_array($kiterjesztes, $engedelyezett_kiterjesztesek)) {

      if ($_FILES["fileToUpload"]["error"] === 0) {

        if ($_FILES["fileToUpload"]["size"] <= 31457280) {

          $cel = "uploads/" . $_FILES["fileToUpload"]["name"];
            echo $cel;
                    if (file_exists($cel)) {
                        $hibak2[] = "Figyelem: A régebbi fájl felülírásra kerül!";
          }

          $siker2 = TRUE;
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $cel)) {
              $hibak2[] = "Sikeres fájlfeltöltés!";
          } else {
              $hibak2[] = "A fájl átmozgatása nem sikerült!";
          }
        } else {
            $hibak2[] = "A fájl mérete túl nagy!";
        }
      } else {
          $hibak2[] = "A fájlfeltöltés nem sikerült!";
      }
    } else {
        $hibak2[] = "A fájl kiterjesztése nem megfelelő!";
    }
  }

        $siker = FALSE;
        if (isset($nem)) {
            $fiokok[] = ["catname" => $macskanev, "breed" => $fajta, "vaccine" => $oltas, "age" => $kor, "gender" => $nem,"color" => $szin];
            saveUsers("adminrequest.txt", $fiokok);
            $siker = TRUE;
        } else {
            $siker = FALSE;
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
    <link rel="stylesheet" type="text/css" href="css/adoptadmin.css"/>
    <link rel="icon" href="img/icon.jpg"/>

</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Főoldal</a></li>
            <li><a href="galeria.php">Cicakereső</a></li>
            <li><a href="adoptguest.php">Örökbefogadás</a></li>
            <li class="active"><a href="adoptadmin.php">Örökbeadás</a></li>
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
    <div class="content">
        <h2>Örökbeadás</h2>
        <form action="adoptadmin.php" method="post" id="adoptadminPost" enctype="multipart/form-data">
            <label>Cica neve <input type="text" name="catname" placeholder="pl: Gizmo" required/></label><br/>
            <label>Fajtája <input type="text" name="breed" placeholder="Fajta" required/></label><br/>
            <label>Oltásai <input type="text" name="vaccine" placeholder="Oltás" required/></label><br/>
            <label>Kora <input type="number" name="age" required/></label><br/>

            <fieldset>
                <legend>A cica neme</legend>
                <label>férfi <input type="radio" name="gender"/></label><br/>
                <label>nő <input type="radio" name="gender"/></label><br/>
            </fieldset>
            <label>Színe: <input type="color" name="color" required></label>
            <label>Örökbeadás ideje: <input type="time" name="time" required></label>

            <label>Kép <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"></label><br/>

            <input type="submit" name="submit" value="Cica örökbeadása">
            <input type="reset" name="reset" value="Reset">
        </form>

        <?php
        if (isset($siker) && $siker === TRUE) {
            echo "<p>Sikeres adatelküldés!</p>";
        } else {
            echo implode(" | ", array_unique($hibak));
        }
        if (isset($siker2) && $siker2 === TRUE) {
            echo "<p>Sikeres képfeltöltés!</p>";
        } else {
            echo implode(" | ", array_unique($hibak2));
        }
        ?>

    </div>
</main>
<aside>
    <h6>Álltalunk ajánlott szakember elérhetősége</h6>
    <p><a href="https://www.kisallat-ambulancia.hu/">Szakember</a></p>
</aside>

<article>
    <h3>Tudtad-e?</h3>
    <p>Ha tanítani szeretnéd, dicsérd a cicát</p>
    <p>
        Az emberektől és más kisállatoktól, mint például a kutyáktól eltérően a macskák nem értik a negatív
        visszajelzést és a tiltást. Ha szeretnéd megtanítani a cicádat néhány trükkre, vagy csak azt szeretnéd, hogy
        hallgasson rád, a legjobb, ha csak pozitív megerősítést használsz, mint amilyen a dicséret vagy a jutalmazás. A
        jutalomfalatok ugyanolyan jól működnek a macskáknál, mint a kutyák esetében, de a simogatással és a dicsérő
        szavakkal is szép eredményeket érhetünk el.
    </p>
</article>

<footer>
    <p><b>Készítette</b></p>
    <p> Juhász Ferenc, Farkas Naomi</p>
</footer>

</body>
</html>