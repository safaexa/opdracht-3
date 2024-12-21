<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Before and After - Tandartspraktijk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f4f4;
            margin: 0;
            padding: 0;
            color: #333333;
        }

        /* Navbar styles */
        .navbar {
            background-color: #ff85a2;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-logo img {
            max-height: 50px;
            margin-right: 10px;
        }

        .navbar-center {
            display: flex;
            justify-content: center;
            flex: 1;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        /* Login dropdown styles */
        .login-dropdown {
            position: relative;
            display: inline-block;
        }

        .login-button {
            background-color: white;
            color: #ff85a2;
            border: none;
            padding: 8px 15px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: #ff85a2;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-weight: normal;
        }

        .login-dropdown:hover .dropdown-content {
            display: block;
        }

        /* Content styles */
        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ff85a2;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        h2 {
            color: #ff85a2;
            font-size: 1.5em;
            margin: 10px 0;
            text-align: center;
        }

        .treatment {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 40px;
            text-align: center;
        }

        .treatment p {
            font-size: 1.1em;
            color: #666666;
            line-height: 1.8;
            max-width: 80%;
        }

        img {
            max-width: 70%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

<div class="navbar">
    <!-- Logo on the left -->
    <div class="navbar-logo">
        <img src="images/logo.png" alt="Logo">
    </div>
    <!-- Centered navigation links -->
    <div class="navbar-center">
        <div class="navbar-links">
            <a href="Homepage.php">HOME</a>
            <a href="AboutUs.php">ABOUT US</a>
            <a href="Before.php">BEFORE AND AFTER</a>
            <a href="leeromgeving.php">LEARN MORE</a>
            <a href="CONTACT US">CONTACT US</a>
        </div>
    </div>
    <!-- Login button on the right -->
    <div class="login-dropdown">
        <button class="login-button">Login</button>
        <div class="dropdown-content">
            <a href="klantlogin.php">Tandarts</a>
            <a href="klantlogin.php">Patiënt</a>
        </div>
    </div>
</div>

<div class="container">
    <h1>Before and After</h1>
    
    <div class="treatment">
        <img src="images/before3.jpg" alt="Behandeling 1">
        <p>Deze patiënt had ernstige verkleuring en slijtage van de tanden. Na een uitgebreide bleek- en restauratiebehandeling hebben we de natuurlijke uitstraling van de tanden hersteld.</p>
    </div>

    <div class="treatment">
        <img src="images/before2.jpg" alt="Behandeling 2">
        <p>Deze patiënt had last van afgebroken tanden na een ongeluk. Met behulp van tandimplantaten hebben we de tanden gereconstrueerd voor een natuurlijke en duurzame glimlach.</p>
    </div>

    <div class="treatment">
        <img src="images/before1.jpg" alt="Behandeling 3">
        <p>Een jongere patiënt met scheve en overlappende tanden. Na een orthodontische behandeling met aligners heeft hij nu een rechte en stralende glimlach.</p>
    </div>

</div>

</body>
</html>
