<?php
session_start();
$_SESSION['username'] = 'Safa';

include 'afspraak.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $tandarts = $_POST['tandarts'];

    $Afspraak = new Afspraak();
    $result = $Afspraak->addAfspraak($naam, $achternaam, $datum, $tijd, $tandarts);

    if ($result) {
        // Meldingen voor de gebruiker
        $message = "Afspraak bevestigd!";
        // Redirect naar view-afspraak.php na succesvol toevoegen
        // Dit kan ook in de HTML sectie worden weergegeven zonder redirect
        // header("Location: afspraak.php");
        // exit(); // Stop het script na doorsturen
    } else {
        $message = "Er is een fout opgetreden bij het toevoegen van de afspraak.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak Kalender</title>
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
            max-width: 900px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        h1, h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .form-container label {
            font-weight: bold;
            color: #333;
        }

        .form-container input, .form-container select {
            padding: 10px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
            border: none;
            transition: 0.3s;
        }

        .form-container input[type="submit"]:hover {
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

        .content {
            margin-left: 270px;
            padding: 30px;
            flex: 1;
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

        .date-status {
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .open-status {
            color: green;
            font-weight: bold;
        }

        .full-status {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Welkom, <?php echo $_SESSION['username']; ?></h2>
        <a href="view-gegevens.php">gegevens</a>
        <a href="view-afspraak.php">Afspraken</a>
        <a href="behandelingen.php">Behandelingen</a>
        <a href="medical-records.php">Medische Dossiers</a>
        <a href="billing.php">Facturatie</a>
        <a href="Homepage.php">Uitloggen</a>
    </div>

    <div class="content">
        <div class="container">
            <h2>Afspraak Toevoegen</h2>
            <div class="form-container">
                <?php if (!empty($message)): ?>
                    <p><?php echo $message; ?></p>
                <?php endif; ?>
                <form action="" method="post">
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" name="naam" required>
                    
                    <label for="achternaam">Achternaam:</label>
                    <input type="text" id="achternaam" name="achternaam" required>
                    
                    <label for="datum">Datum:</label>
                    <!-- Display dates with open or full status -->
                    <select id="datum" name="datum" required>
                        <?php
                        $dates = ["2024-11-01" => "open", "2024-11-02" => "full", "2024-11-03" => "open"];
                        foreach ($dates as $date => $status) {
                            $statusClass = $status === "open" ? "open-status" : "full-status";
                            $label = $status === "open" ? "Beschikbaar" : "Vol";
                            echo "<option value='$date' class='$statusClass'>$date - $label</option>";
                        }
                        ?>
                    </select>
                    
                    <label for="tijd">Tijd:</label>
                    <!-- Similar style for available times -->
                    <select id="tijd" name="tijd" required>
                        <option value="09:00">09:00 - Beschikbaar</option>
                        <option value="10:00" disabled>10:00 - Vol</option>
                        <option value="11:00">11:00 - Beschikbaar</option>
                        <option value="12:00">12:00 - Beschikbaar</option>
                    </select>

                    <label for="tandarts">Tandarts:</label>
                    <!-- Dropdown for dentist selection -->
                    <select id="tandarts" name="tandarts" required>
                        <option value="Dr. Smits">Dr. Smits</option>
                        <option value="Dr. Verhoef">Dr. Verhoef</option>
                        <option value="Dr. Janssen">Dr. Janssen</option>
                        <option value="Dr. De Vries">Dr. De Vries</option>
                        <option value="Dr. Van Dijk">Dr. Van Dijk</option>
                    </select>
                    
                    <input type="submit" value="Toevoegen">
                    <a href="view-afspraak.php">Terug</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
