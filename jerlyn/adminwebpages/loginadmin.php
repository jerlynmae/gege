
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinduque State College Online Payment System - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../images/MSCBG.png');
            background-size: cover;
            background-position: center;
            backdrop-filter: blur(5px); 
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: fixed; 
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        header {
            background-color: hsla(3, 72%, 31%, 0.902);
            color: #fff;
            padding: 20px;
            text-align: center;
            margin: 0 0 0 0;
            font-size: 25px;
        }
        nav {
            background-color: #fdff79e6;
            padding: 10px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: hsl(180, 11%, 2%);
            padding: 10px;
        }
        nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .signup-container {
            background-image: url('../images/logomsc.jpg');
            background-size: cover;
            background-position: center;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(142, 22, 22, 0.831);
            width: 600px;
            height: 750px;
            margin-top: 30px;
            top: 50%; 
            left: 50%;
            align-content: center;
            align-items: center;
        }
        .signup-form {
            background-color: rgba(255, 255, 255, 0.7); 
            padding: 20px;
            border-radius: 8px; 
            width: 550px;
            height: 700px;
            font-size: 20px;
        }
        .signup-form h2{
            margin: 10px 10px 10px 10px;
            font-size: 30px;
            margin-top: 30px;
        }
        .signup-form input[type="text"] {
            padding: 20px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 25px;
            width: 500px;
            margin-top: 10px;
        }
        .signup-form input[type="password"] {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 500px;
            font-size: 25px;
            margin-bottom: 10px;
        }
        .signup-form button {
            width: 100%;
            padding: 10px;
            background-color: hwb(221 23% 17%);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            grid-column: span 2;
            font-size: 30px;
        }
        .signup-form button:hover {
            background-color: hsl(0, 71%, 30%);
        }
        .signup{
            margin-left: 1000px;
            margin-top: -100px;
            font-size: 30px;
        }
        .social-login {
            text-align: center;
            margin-top: 10px;
            margin-top: -130px;
        }
        .social-login img {
            width: 30px;
            height: 30px;
            margin: 0 5px;
            vertical-align: middle;
        }
         footer {
            text-align: center;
            background-color: none;
            color: white;
            padding: 10px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="../images/Logo.png" width="100px" height="100px">
        </div>
        <div>
            <h1>Marinduque State College Online Payment System</h1>
        </div>
    </header>
    <nav>
    </nav>
    <div class="container">
        <div class="signup-container" id="login-container">
            <form class="signup-form" action="../PHPScript/admin_login.php" method="post">
                <h2>Log In</h2>
                <input type="text" name="First_Name" placeholder="First Name" required>
                <input type="text" name="Middle_Name" placeholder="Middle Name">
                <input type="text" name="Last_Name" placeholder="Last Name" required>
                <input type="password" name="Password" placeholder="Password" required><br>
                <input type="password" name="ReEnter_Password" id="re-enter-password" placeholder="Re-Enter Password" required>
                <button type="submit" href="../webpages/admin.php">Log In</button>
            </form>
        </div>
    </div>
        <div class="signup">
            <form>
            <a href="../adminwebpages/adminsignup.php">Sign Up</a>
        </div>
    <footer>
       &copy; 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
