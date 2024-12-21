<?php

//database connecten

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
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
    
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
// tot hier

?>

<?php

if(isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    $data = [
        'username' => $username,
        'password' => $password,
    ];


    $sql = "INSERT INTO adminlogin (username, password
    ) VALUES (:username, :password )"; 
    
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
        'username' => $username,
        'password' => $password,
    ]);

    if ($stmt->rowCount() > 0) {
        header("Location:choose.php?success");
    }

  }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url('image/car.jpg') no-repeat ;
       background-size: cover;
       background-position: center;
    
    }
    

  .wrapper {
    width: 420px;
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: white;
    border-radius: 10px;
    padding: 30px 40px;
  }

  .wrapper h1 {
    font-size: 36px ;
    text-align: center;
  }

  .wrapper .input-box{
    width: 100%;
    height: 50px;
    margin: 30px 0;
  }
  
  .input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    padding: 20px 45px 20px 20px;
  }

  .input-box input::placeholder {
    color:white;
  }

.wrapper .remember-forget {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;

}

.remember-forget label input{
    accent-color: white;
    margin-right: 3px;
}

.remember-forget a {
    color: white;
    text-decoration: none;
}

.remember-forget a:hover{
    text-decoration: underline;

}

.wrapper .btn {
    width: 100%;
    height: 45px;
    background: white;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color:black;
    font-weight: 600;
}

.wrapper .register-link {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.register-link p a {
    color: white;
    text-decoration: none;
    font-weight: 600;
}

.register-link p a:hover{
    text-decoration: underline;
}


.dropdown-menu ul a{
  color:black
}

 


  
    </style>
</head>
<body>

<div class="wrapper">
<form method="POST">
    <h1>Login Admin</h1>


<div class="input-box">
<input type="text" name="username" placeholder="username" required> <br>
</div>

    
<div class="input-box">
<input type="password" name="password" placeholder="password" required> <br>
</div>


<div class="remember-forget">
    <label><input type="checkbox"> Remember me </label>
<a href="email.php"> Wachtwoord vergeten?</a>
</div>

<input type="submit" class="btn" value="Login" name="submit" onclick="printData()">


     


</form>
</div>

</body>
</html>