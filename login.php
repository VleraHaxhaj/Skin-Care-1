<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANEIGE Skincare & Make-up</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <a href="homepage.html"><i class='bx bx-arrow-back'></i></a>
    </header>
    <div class="wrapper">

        <?php
        session_start();
        include_once 'database.php';
        include_once 'user.php';

        if($_SERVER ['REQUEST_METHOD'] == 'POST'){
            $db = new Database ();
            $connection = $db->getConnection();
            $user = new User($connection) ;
        
        $email = $_POST['email'];
        $password = new $_POST ['password'];

        if($user ->login($email,$password)){
            header("Location: homepage.php");
            exit;
        }else {
            echo "Invalid login";
        }
    }
        ?>

        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Enter your password" required>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="buton">Login</button>
        <div class="register-link">
            <p>Don't have an account?
                <a href="register.html">Register</a>
            </p>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
