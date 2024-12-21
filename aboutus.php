<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Ons - Tandartspraktijk</title>
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
        }

        h2 {
            color: #555555;
        }

        p {
            line-height: 1.6;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 15px 0;
        }

        .rose-image {
            display: block;
            margin: 0 auto;
            max-width: 50%;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
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
            <a href="BLOG">BLOG</a>
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
    <h1 id="over-ons">Over Ons</h1>
    <img class="rose-image" src="images/leer4.jpg" alt="">
    <p>Welkom bij onze tandartspraktijk! Wij zijn een team van toegewijde professionals die zich inzetten voor uw mondgezondheid. Onze praktijk is opgericht met de missie om hoogwaardige tandheelkundige zorg te bieden in een vriendelijke en comfortabele omgeving.</p>

    <h2 id="team">Ons Team</h2>
    <p>Onze tandartsen en assistenten hebben jarenlange ervaring en zijn voortdurend bezig met bijscholing om op de hoogte te blijven van de nieuwste ontwikkelingen in de tandheelkunde. We geloven in een persoonlijke benadering, waarbij we naar u luisteren en samen met u de beste zorgplannen opstellen.</p>

    <h2 id="diensten">Onze Diensten</h2>
    <p>We bieden een breed scala aan tandheelkundige diensten aan, waaronder:</p>
    <ul>
        <li>Algemene tandheelkunde</li>
        <li>Tandheelkundige controles en reinigingen</li>
        <li>Esthetische tandheelkunde</li>
        <li>Implantaten en protheses</li>
        <li>Kindertandheelkunde</li>
    </ul>

    <h2 id="contact">Contact</h2>
    <p>Heeft u vragen of wilt u een afspraak maken? Neem gerust contact met ons op! Wij staan klaar om u te helpen en kijken ernaar uit u te verwelkomen in onze praktijk.</p>
</div>

</body>
</html>
