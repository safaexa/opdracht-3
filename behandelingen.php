<?php
session_start();
$_SESSION['username'] = 'Safa'; // Dit moet worden aangepast naar de ingelogde gebruiker

// Dummy data voor behandelgeschiedenis (vervang dit door een databasequery)
$behandelingen = [
    ['datum' => '2023-01-15', 'behandeling' => 'Tandreiniging', 'tandarts' => 'Dr. Jan'],
    ['datum' => '2023-03-20', 'behandeling' => 'Vulling', 'tandarts' => 'Dr. Anna'],
    ['datum' => '2023-06-10', 'behandeling' => 'Wortelkanaalbehandeling', 'tandarts' => 'Dr. Piet'],
    ['datum' => '2023-09-05', 'behandeling' => 'Tandextractie', 'tandarts' => 'Dr. Marie'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Behandelgeschiedenis</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            background-color: #f4f4f4;
            min-height: 100vh;
            margin: 0;
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

        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff85a2;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
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

    <div class="container">
        <h1>Behandelgeschiedenis</h1>
        <table>
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Behandeling</th>
                    <th>Tandarts</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($behandelingen as $behandeling): ?>
                    <tr>
                        <td><?php echo $behandeling['datum']; ?></td>
                        <td><?php echo $behandeling['behandeling']; ?></td>
                        <td><?php echo $behandeling['tandarts']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
