<?php

// Database connecten
$host = 'localhost:3308';
$db   = 'tandarts';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO patient_login (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'username' => $username,
        'password' => $password,
    ]);

    if ($stmt->rowCount() > 0) {
        header("Location: view-gegevens.php?success");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('image/car.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .wrapper {
            width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .wrapper h1 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #fff;
        }

        .input-box {
            position: relative;
            margin: 20px 0;
        }

        .input-box input {
            width: 100%;
            padding: 15px 20px;
            font-size: 16px;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            outline: none;
            transition: 0.3s ease;
        }

        .input-box input:focus {
            background: rgba(255, 255, 255, 0.3);
            border-color: #fff;
        }

        .input-box input::placeholder {
            color: #ccc;
        }

        .remember-forget {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #ccc;
        }

        .remember-forget label {
            display: flex;
            align-items: center;
        }

        .remember-forget input[type="checkbox"] {
            margin-right: 8px;
            accent-color: #fff;
        }

        .remember-forget a {
            color: #f0f0f0;
            text-decoration: none;
        }

        .remember-forget a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            background: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease;
            margin-top: 20px;
        }

        .btn:hover {
            background: #ddd;
        }

        .register-link {
            font-size: 14px;
            color: #ccc;
            margin-top: 20px;
        }

        .register-link p a {
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <form method="POST">
        <h1>Admin Login</h1>

        <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <div class="remember-forget">
            <label><input type="checkbox"> Remember me</label>
            <a href="email.php">Forgot Password?</a>
        </div>

        <input type="submit" class="btn" value="Login" name="submit">
    </form>
</div>

</body>
</html>
