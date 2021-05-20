<?php

session_start();
include "kozos.php";
$fiokok = loadUsers("users.txt");
$hibak = [];

if (isset($_POST['submit'])) {

    if (!isset($_POST["username"]) || trim($_POST["username"]) === "")
        $hibak[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST["password"]) || trim($_POST["password"]) === "" || !isset($_POST["passwordtwo"]) || trim($_POST["passwordtwo"]) === "")
        $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";

    if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
        $hibak[] = "Az email megadása kötelező!";

    if (!isset($_POST["bdate"]) || trim($_POST["bdate"]) === "")
        $hibak[] = "Az életkor megadása kötelező!";

    var_dump($hibak);

    if(empty($hibak)){

        $felhasznalonev = $_POST["username"];
        $jelszo = $_POST["password"];
        $jelszotwo = $_POST["passwordtwo"];
        $email = $_POST["email"];
        $bday = new DateTime(date("Y-m-d", strtotime($_POST["bdate"])));
        $eletkor = intval($bday -> diff(new Datetime(date('Y-m-d'))) -> format('%y'));


        foreach ($fiokok as $fiok) {

            if ($fiok["username"] === $felhasznalonev) {
                $hibak[] = "A megadott felhasználónév már foglalt";
            }
            if (strlen($jelszo) < 6){
                $hibak[] = "A jelszónak legalább 6 karakter hosszúnak kell lennie!";
            }
            if ($jelszo !== $jelszotwo) {
                $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";
            }
            if ($eletkor < 18){
                $hibak[] = "Csak 18 éves kortól lehet regisztrálni!";
            }
            if (strlen($felhasznalonev) < 3){
                $hibak[] = "A felhasználónév legalább 3 karakter hosszú legyen!";
            }
        }

            if (count($hibak) === 0) {

                $fiokok[] = ["username" => $felhasznalonev, "jelszo" => $jelszo, "email" => $email, "bdate" => $eletkor];
                saveUsers("users.txt", $fiokok);
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
    <link rel="stylesheet" type="text/css" href="css/registration.css"/>
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
                <li><a href="login.php">Bejelentkezés</a></li>
            <?php } ?>
        </ul>
    </nav>

</header>
<main>
    <div class="content" id="borderimage">
        <h2>Regisztráció</h2>
        <form action="signup.php" method="post" id="registerPost">
            <label>Felhasználónév <input type="text" name="username" placeholder="pl: KissImre" required/></label><br/>
            <label>Jelszó <input type="password" name="password" placeholder="Jelszó" required/></label><br/>
            <label>Jelszó újra <input type="password" name="passwordtwo" placeholder="Jelszó újra"
                                      required/></label><br/>
            <label>Email-cím <input type="email" name="email" placeholder="Email" required/></label><br/>
            <label>Születési idő <input type="date" name="bdate" required/></label><br/>
            <input type="hidden" name="custID">

            <input type="submit" name="submit" value="Regisztráció">
            <input type="reset" name="reset" value="Reset">
        </form>

        <?php
        if (isset($siker) && $siker === TRUE) {
            echo "<p>Sikeres regisztráció!</p>";
        } else {
            echo implode(" | ", array_unique($hibak));
        }
        ?>

    </div>
</main>
<aside>
    <h4>Álltalunk ajánlott szakember elérhetősége</h4>
    <p><a href="https://www.kisallat-ambulancia.hu/">Szakember</a></p>
</aside>

<footer>
    <p><b>Készítette</b></p>
    <p> Juhász Ferenc, Farkas Naomi</p>
</footer>

</body>
</html>