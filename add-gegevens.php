<?php
include 'gegevens.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];
    $woonadres = $_POST['woonadres'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $verzekeringnummer = $_POST['verzekeringnummer'];

    $Patient= new Patient();
    $result = $Patient->addPatient($naam, $achternaam, $geboortedatum, $woonadres, $telefoonnummer, $email, $verzekeringnummer);

    if ($result) {
        // Redirect naar view-docent.php na succesvol toevoegen
        header("Location: view-gegevens.php");
        exit(); // Zorg ervoor dat het script stopt na het doorsturen
    } else {
        $message = "Er is een fout opgetreden bij het toevoegen van docent.";
    }
}
?>



<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>geggevens Toevoegen</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        /* Algemene stijl */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto; /* Centraal uitlijnen met marge boven */
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px; /* Ronde hoeken */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Schaduw voor diepte */
}

h2 {
    text-align: center;
    color: #333333;
    margin-bottom: 30px;
}

/* Stijl voor de formuliercontainer */
.form-container {
    padding: 20px;
}

/* Labels en invoervelden */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold; /* Vetgedrukt voor nadruk */
}

input[type="text"],
input[type="email"],
input[type="date"] {
    width: 100%; /* Volledige breedte */
    padding: 10px;
    margin-bottom: 20px; /* Ruimte tussen invoervelden */
    border: 1px solid #ddd; /* Lichte rand */
    border-radius: 5px; /* Ronde hoeken */
    font-size: 16px; /* Grotere lettergrootte */
    transition: border-color 0.3s ease; /* Transitie voor randkleur */
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="date"]:focus {
    border-color: #007bff; /* Randkleur bij focus */
    outline: none; /* Geen standaard focus outline */
}

/* Knopstijl */
input[type="submit"] {
    background-color: #007bff; /* Blauwe achtergrond */
    color: white; /* Witte tekst */
    padding: 10px 20px;
    border: none;
    border-radius: 5px; /* Ronde hoeken */
    cursor: pointer; /* Handcursor bij hover */
    font-size: 16px; /* Grotere lettergrootte */
    transition: background-color 0.3s ease; /* Transitie voor achtergrondkleur */
}

input[type="submit"]:hover {
    background-color: #0056b3; /* Donkerdere kleur bij hover */
}

/* Terug-link */
a {
    display: inline-block;
    margin-top: 20px; /* Ruimte boven de link */
    color: #007bff; /* Blauwe kleur */
    text-decoration: none; /* Geen onderlijning */
    font-size: 16px; /* Grotere lettergrootte */
    text-align: center; /* Center uitlijnen */
}

a:hover {
    text-decoration: underline; /* Onderlijning bij hover */
}

/* Foutmelding stijl */
p {
    color: red; /* Rood voor foutmeldingen */
    text-align: center; /* Center uitlijnen */
}

    </style>
</head>
<body>

<!--<div class="navbar">
        <div class="profile">
            <img src="school7.png" alt="Profielfoto" class="profile-img">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Vandaag</a></li>
            <li><a href="Rooster.php">Agenda</a></li>
            <li><a href="cijfer.php">Cijfers</a></li>
            <li><a href="overzicht.php">Overzicht</a></li>
            <li><a href="Help.php">Help</a></li>
            <li><a href="uitloggen.php">Afmelden</a></li>
        </ul>
    </div>-->


    <div class="container">
        <h2>geggevens Toevoegen</h2>
        <div class="form-container">
            <?php if (!empty($message)): ?>
                <p><?php echo $message; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
                
                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" required>
                
                <label for="geboortedatum">geboortedatum:</label>
                <input type="date" id="geboortedatum" name="geboortedatum" required>
                
                <label for="woonadres">woonadres:</label>
                <input type="text" id="woonadres" name="woonadres" required>

                <label for="telefoonnummer">telefoonnummer:</label>
                <input type="text" id="telefoonnummer" name="telefoonnummer" required>

                <label for="email">email:</label>
                <input type="email" id="email" name="email" required>

                <label for="verzekeringnummer">verzekeringnummer:</label>
                <input type="text" id="verzekeringnummer" name="verzekeringnummer" required>
     
     
                <input type="submit" value="Toevoegen">
                <a href="view-gegevens.php">Terug</a>
            </form>
        </div>
    </div>
</body>
</html>
