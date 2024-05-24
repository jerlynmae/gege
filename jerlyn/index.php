<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinduque State College Online Payment System - Login</title>
    <style type="text/css">
        body {
    font-family: Georgia, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('../images/MSC.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-align: left; 
    color: white;
}

header {
    background-color: hsla(3, 72%, 31%, 0.902);
    color: #fff;
    padding: 20px;
    text-align: left; 
    display: flex;
    align-items: center; 
    justify-content: space-between; 
    font-size: 25px;
    font-family: Georgia, sans-serif;
}

header h1 {
    margin: 0;
    flex-grow: 1; 
}

nav.header-nav {
    padding: 0px;
    text-align: right;
    background-color: none;
    font-size: 20px;
    display: flex; 
    align-items: center; 
}

nav.header-nav a {
    text-decoration: underline;
    color: #fff; 
    padding: 10px 20px; 
    margin-left: 50px;
    font-size: 40px;
    margin-right: 100px;
    font-style: italic;
}

nav.header-nav a:hover {
    color: hsla(3, 72%, 31%, 0.902);
}

nav.secondary-nav {
    background-color: #fdff79e6; 
    text-align: center;
    padding: 10px 0;
}

nav.secondary-nav a {
    text-decoration: underline;
    color: #fff;
    padding: 100px; 
    margin-left: 10px;
    font-size: 24px;
}

nav.secondary-nav a:hover {
    background-color: hsl(0, 81%, 32%);
    color: hwb(0 96% 0%);
}

nav.login-nav {
    background-color: rgba(255, 255, 255, 0.5); 
    padding: 20px 0px; 
    border-radius: 10px; 
    margin-left: 20px; 
    margin-right: 100px;
    text-align:center;
}

nav.login-nav a {
    text-decoration: none;
    color: #fff; 
    font-size: 27px;
    text-align: center;
    margin-right: 50px;
    margin-left:50px;
}

nav.login-nav a:hover {
    background-color: hsla(3, 72%, 31%, 0.902); 
}


footer {
    text-align: center;
    background-color: none;
    color: #fff;
    padding: 10px;
    margin-top: 800px;
}


    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="150px" height="200px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
        <nav class="header-nav">
         <a href="../webpages/about_us.php" onclick="showSection('about-us-content')">About Us</a></li>
         <a href="../webpages/services.php" onclick="showSection('services-content')">Services</a></li>
         <a href="../webpages/services.php" onclick="showSection('contact-content')">Contact</a></li>
            </ul>
            <nav class="login-nav">
                <a href="../webpages/login.php" onclick="showSection('login-container')">Log In</a>
            </nav>
        </nav>
    </header>
    <nav class="secondary-nav">
        
    </nav>
    <footer>
       @ 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>

<?php
