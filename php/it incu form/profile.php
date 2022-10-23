<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style_profile.css">
    <style>
        body{
            background: url('assets/img/bg_profile.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: poppins;
            color: white;
        }
    </style>
</head>
<body style="">
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="">Profile User</a></li>
                <li><a href="">Log Out</a></li>
            </ul>
            
        </nav>
    </div>
    <section>
        <h1>Profile User</h1>
        <br>
        <div class="user-input">
            <table>
                <th>Full Name</th>
                <td>: <?php echo $_POST["fullName"];?></td>
            </table>
        </div>
        <div class="user-input">
            <table>
                <th>Username</th>
                <td>: <?php echo $_POST["username"];?></td>
            </table>
        </div>
        <div class="user-input">
            <table>
                <th>Age</th>
                <td>: <?php echo $_POST["age"];?></td>
            </table>
        </div>
        <div class="user-input">
            <table>
                <th>Email</th>
                <td>: <?php echo $_POST["email"];?></td>
            </table>
        </div>
        <div class="user-input">
            <table>
                <th>Password</th>
                <td>: <?php echo $_POST["password"];?></td>
            </table>
        </div>
        <div class="user-input">
            <table>
                <th>Server</th>
                <td>: <?php echo $_POST["server"];?></td>
            </table>
        </div>
    </section>
</body>
</html>