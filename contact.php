<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Tandartspraktijk</title>
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
        }

        .login-dropdown:hover .dropdown-content {
            display: block;
        }

        /* Contact page styles */
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
            margin-bottom: 10px;
        }

        p, label {
            font-size: 1.1em;
            color: #666666;
            line-height: 1.6;
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .social-media a {
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
            color: #ff85a2;
        }

        /* Form styles */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .submit-button {
            background-color: #ff85a2;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #e97393;
        }

        /* Confirmation message */
        .confirmation-message {
            display: none;
            color: #4CAF50;
            font-size: 1.1em;
            margin-top: 20px;
            text-align: center;
        }
    </style>
    <script>
        function showConfirmation(event) {
            event.preventDefault();
            document.getElementById("confirmation-message").style.display = "block";
        }
    </script>
</head>
<body>

<div class="navbar">
    <!-- Logo on the left -->
    <div class="navbar-logo">
        <img src="path/to/logo.png" alt="Logo">
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
    <h1>Contact Ons</h1>
    
    <div class="contact-info">
        <h2>Contactgegevens</h2>
        <p>Heeft u vragen of wilt u een afspraak maken? Neem dan gerust contact met ons op via onderstaande gegevens.</p>
        <p><strong>Telefoon:</strong> 020-1234567</p>
        <p><strong>Email:</strong> info@tandartspraktijk.nl</p>
        <p><strong>Adres:</strong> Tandartspraktijk Rozenlaan 123, 1011 AB Amsterdam</p>
    </div>

    <div class="social-media">
        <h2>Volg Ons</h2>
        <a href="https://facebook.com">Facebook</a>
        <a href="https://instagram.com">Instagram</a>
        <a href="https://twitter.com">Twitter</a>
        <a href="https://linkedin.com">LinkedIn</a>
    </div>

    <div class="contact-form-section">
        <h2>Vragenformulier</h2>
        <p>Heeft u een specifieke vraag? Vul het onderstaande formulier in en we nemen zo spoedig mogelijk contact met u op.</p>

        <!-- Confirmation message -->
        <p id="confirmation-message" class="confirmation-message">Bedankt voor uw vraag! Wij proberen u binnen 3 werkdagen een bericht te sturen.</p>

        <form class="contact-form" action="#" method="POST" onsubmit="showConfirmation(event)">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Bericht:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="submit-button">Verstuur</button>
        </form>
    </div>

</div>

</body>
</html>
