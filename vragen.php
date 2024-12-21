<?php
session_start();
$_SESSION['username'] = 'Safa';

$message = "";

// Verwerking van het formulier
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $vraag = $_POST['vraag'];

    // Hier kun je de code toevoegen om de vraag op te slaan in een database of te verzenden via e-mail.
    // Bijvoorbeeld:
    // mail('jouw-email@example.com', 'Vraag van een patiënt', $vraag, 'From: ' . $email);

    // Bevestigingsbericht
    $message = "Uw vraag is succesvol verzonden!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patiënt Vragen Stellen</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            background-color: #f4f4f4;
            min-height: 100vh;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
        
        .sidebar {
            width: 250px;
            background-color: #ff85a2;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            margin-bottom: 40px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Welkom, <?php echo $_SESSION['username']; ?></h2>
        <a href="view-afspraak.php">Afspraken</a>
        <a href="doctor-conversations.php">Dokter Gesprekken</a>
        <a href="medical-records.php">Medische Dossiers</a>
        <a href="billing.php">Facturatie</a>
        <a href="Homepage.php">Uitloggen</a>
    </div>

    <div class="container">
        <h1>Stel uw Vraag</h1>
        <div class="form-container">
            <?php if (!empty($message)): ?>
                <p class="success-message"><?php echo $message; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
                
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="vraag">Uw Vraag:</label>
                <textarea id="vraag" name="vraag" rows="5" required></textarea>

                <input type="submit" value="Verzend Vraag">
            </form>
        </div>
    </div>
</body>
</html>
