<?php
header("Content-type: text/html; charset=utf-8");

// Include CSS styles
echo "
<style>
body {
    font-family: Century Gothic, sans-serif;
    margin: 0;
    padding: 0;
    background-color: beige;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-align: left;
    color: black;
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
    display: flex; /* Use flexbox to align items */
    align-items: center; /* Center items vertically */
}

nav.header-nav a {
    text-decoration: underline;
    color: #fff; /* Use the same color as header text */
    padding: 10px 20px; /* Adjust padding here */
    margin-left: 50px;
    font-size: 40px;
    margin-right: 100px;
    font-style: italic;
}

nav.header-nav a:hover {
    color: hsla(3, 72%, 31%, 0.902);
}

nav.secondary-nav {
    background-color: #fdff79e6; /* Yellow background */
    text-align: left;
    padding: 10px 0;
}

nav.secondary-nav a {
    text-decoration: none;
    color: black; 
    padding: 0px; 
    margin-left: 0px;
    font-size: 24px;
    margin-right: 10px;
    margin-left: 10px;

}

nav.secondary-nav a:hover {
    background-color: hsl(0, 81%, 32%);
    color: hwb(0 96% 0%);
}

nav.login-nav {
    background-color: rgba(255, 255, 255, 0.5); /* Transparent white background */
    padding: 20px 0px; /* Adjust padding here */
    border-radius: 10px; /* Add rounded corners */
    margin-left: 20px; /* Add margin between contact link and login */
    margin-right: 100px;
    text-align:center;
}

nav.login-nav a {
    text-decoration: none;
    color: #fff; /* White text */
    font-size: 27px;
    text-align: center;
    margin-right: 50px;
    margin-left:50px;
}

nav.login-nav a:hover {
    background-color: hsla(3, 72%, 31%, 0.902); /* Same as header background color */
}
.AboutUs {
    color: Black;
    padding: 10px;
    font-size: 100px;
    text-align: center;
    margin: 40px 40px 40px 40px;
    font-style: italic;
}
.aboutus-text {
    color: black;
    padding: 10px;
    text-align: justify;
    margin: 200px 200px 200px 200px;
    font-size: 40px;
    margin-top: 0px;
    font-style: italic;

}

footer {
    text-align: center;
    background-color: none;
    color: black;
    padding: 10px;
    margin-top: 300px;
}
</style>
";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <title>Marinduque State College Online Payment System - About Us</title>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="150px" height="200px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
        <nav class="header-nav">
            <a href="../webpages/about_us.php" onclick="showSection('about-us-content')">About Us</a>
            <a href="../webpages/services.php" onclick="showSection('services-content')">Services</a>
            <a href="../webpages/contacts.php" onclick="showSection('contact-content')">Contact</a>
            <nav class="login-nav">
                <a href="../webpages/login.php" onclick="showSection('login-container')">Log In</a>
            </nav>
        </nav>
    </header>
    <nav class="secondary-nav">
        
    </nav>
    <h2 class="AboutUs">About Us</h2>
    <p class="aboutus-text"> &emsp; &emsp; Marinduque State College is dedicated to providing a seamless and efficient experience for its students, faculty, and staff. This system will allow students to conveniently and
        securely pay for their tuition fees and other financial obligations from anywhere,
        at any time. By implementing this system, MSC aims to streamline the payment
        process, reduce queues, and enhance overall satisfaction for its stakeholders.</p>
    <footer>
        @ 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
