<?php
session_start();
$_SESSION['username'] = 'Safa';

include 'afspraak.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $Afspraak = new Afspraak();
    $deletedRows = $Afspraak->deleteAfspraak($_POST['delete_id']);
    if ($deletedRows === false) {
        $deleteMessage = "Er is een fout opgetreden bij het verwijderen van de patiënt.";
    } else {
        $deleteMessage = "Patiënt succesvol verwijderd.";
    }
}

$Afspraak = new Afspraak();
$data = $Afspraak->getAllAfspraak();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            background-color: #f4f4f4;
            min-height: 100vh;
            overflow-x: hidden;
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

        .content {
            margin-left: 270px;
            padding: 30px;
            flex: 1;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        p {
            text-align: center;
            font-weight: bold;
        }

        .patient-data {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .patient-data div {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .patient-data div span:first-child {
            font-weight: bold;
            color: #333;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }

        .action-links button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-links button:hover {
            background-color: #c82333;
        }

        .message {
            color: green;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 10px;
            }

            .content {
                margin-left: 0;
                padding: 10px;
            }
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
            <h1>Afspraken</h1>
            <?php if (isset($deleteMessage)): ?>
                <p class="message"><?php echo $deleteMessage; ?></p>
            <?php endif; ?>
            
            <?php foreach ($data as $row): ?>
                <div class="afspraak-data">
                    <div><span>afspraakId:</span> <span><?php echo $row['afspraakID']; ?></span></div>
                    <div><span>Naam:</span> <span><?php echo $row['naam']; ?></span></div>
                    <div><span>Achternaam:</span> <span><?php echo $row['achternaam']; ?></span></div>
                    <div><span>Datum:</span> <span><?php echo $row['datum']; ?></span></div>
                    <div><span>Tijd:</span> <span><?php echo $row['tijd']; ?></span></div>
                    <div><span>Tandarts:</span> <span><?php echo $row['tandarts']; ?></span></div>
                    <div class="action-links">
                        <a href="edit-afspraak.php?id=<?php echo $row['afspraakID']; ?>">Bewerken</a>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="delete_id" value="<?php echo $row['afspraakID']; ?>">
                            <button type="submit">Verwijderen</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>

            <a href="add-afspraak.php" style="display:block; text-align:center; color:#ff85a2; text-decoration:none;">Nieuwe afspraak maken</a>
        </div>
    </div>

</body>
</html>
