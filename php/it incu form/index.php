<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Nyobak</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body{
            background: url('assets/img/background.png');
            width: 1366;
            background-size: cover;
            background-repeat: no-repeat;
            scroll-behavior: smooth;
            min-width: 100;
        }
    </style>
</head>
<body style="">
    <div class="lamp1"></div>
    <div class="lamp2"></div>
   <header>
        <div class="logo">
            <img src="assets/img/logo.png" alt="logo">
        </div>
        <nav class="navbar">
            <ul class="nav__link">
                <li><a href="https://www.callofduty.com/blackopscoldwar/buy" target="_blank">Download</a></li>
                <li><a href="https://www.callofduty.com/" target="_blank">About</a></li>
                <li><a href="https://www.callofduty.com/blackopscoldwar" target="_blank">Changelogs</a></li>
            </ul>
        </nav>
            <ul class="nav_button">
                <li><a class="signup" href="#"><button class="signup_button">Signup</button></a></li>
                <li><a class="signup" href="#"><button class="login_button">Login</button></a></li>
            </ul>
   </header>
   <div class="sign-box">
    <h1>Sign-up</h1>
    <form action="profile.php" method="POST">
        <div class="form-group">
            <input type="text" placeholder="Nama Lengkap" name="fullName">
            <label class="form-label">Full Name</label>
            <span class="error">
        </div>
        <div class="form-group">
            <input type="text" placeholder="username" name="username">
            <label class="form-label">Username</label>
            <span class="error">
        <div class="form-group">
            <input type="number" placeholder="umur" name="age">
            <label class="form-label">Age</label>
        </div>
        <div class="form-group">
            <input type="email" placeholder="Password" name="email">
            <label class="form-label">Email</label>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" name="password">
            <label class="form-label">Password</label>
        </div>
        
        <div class="form-group">
        <label class="label-server">Server</label>
            <select name="server" aria-placeholder="Server">
                <option value="" disabled selected hidden>Choose a Server</option>
                <option value="Asia">Asia</option>
                <option value="USA">USA</option>
                <option value="Europe">Europe</option>
            </select>    
        </div>
        <div>
            <button class="register" type="submit">Register now!</button>
        </div>
    </form>
   </div>
</body>
</html>