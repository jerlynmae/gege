<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Marinduque State College Online Payment System - Login</title>
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
    <h2 class = "Services">Services</h2>
        <p class= "services-text"> &emsp; &emsp; The system offers comprehensive features for user registration and authentication, catering to students, faculty, and staff, ensuring secure access to the platform. It seamlessly integrates secure payment gateways, including credit/debit cards, online banking, and e-wallets, facilitating smooth and secure transactions. Students can conveniently inquire about their account balances, transaction history, and pending payments in real-time. Automated payment reminders are sent to students, aiding in timely payments and avoiding missed deadlines. Electronic receipts are generated for each successful transaction, providing proof of payment. Furthermore, the system is intricately linked with MSC's student information system, ensuring accurate financial records and seamless data management. Robust reporting and analytics tools are also available, offering insights into payment trends and outstanding balances, supporting effective financial planning and decision-making processes.</p> 
    <footer>
       @ 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>

<?php

// CSS styles
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
    font-family: Georgia, sans-serif;
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
.Services {
    color: Black;
    padding: 10px;
    font-size: 100px;
    text-align: center;
    margin: 40px 40px 40px 40px;
    font-style: italic;
}
.services-text {
    color: black;
    padding: 10px;
    text-align: justify;
    margin: 200px 200px 200px 200px;
    font-size: 37px;
    margin-top: 0px;
    font-style: italic;

}

footer {
    text-align: center;
    background-color: none;
    color: black;
    padding: 10px;
    margin: 10px 10px 10px;

}
</style>
";
?>
