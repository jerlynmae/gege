<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinduque State College Online Payment System - Login</title>
    <style>
        body {
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
           padding: 30px;
           text-align: left; 
           display: flex;
           align-items: center; 
           justify-content: space-between; 
           font-size: 20px;
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
            font-size: 15px;
            display: flex; 
            align-items: center; 
        }

        nav.header-nav a {
            text-decoration: underline;
            color: #fff; 
            padding: 10px ; 
            margin-left: -100px;
            font-size: 30px;
            margin-right: 100px;
            text-decoration: none;
        }

        nav.header-nav a:hover {
            color: hsla(3, 72%, 31%, 0.902);
        }
        .container {
            padding : 10px;
            font-size: 20px;
            border-radius: 20px;
            margin-top: 40px;
            margin-left: 400px;
        }


        .form {
            background-color: rgba(255, 255, 255, 0.7); 
            padding: 20px;
            border-radius: 8px; 
            width: 800px;
            height: auto;
            font-size: 20px;
            text-align: center;
        }

        .form h2 {
            margin: 10px 10px 10px 10px;
            font-size: 50px;
            margin-top: 30px;
        }

        .form input[type="text"],
        .form input[type="midname"],
        .form input[type="lastname"],
        .form input[type="sec"] {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 25px;
            width: 600px;
            margin-top: 20px;
            height: 60px;
        }

        .section {
            padding: 20px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 25px;
            width: 640px;
            margin-top: 20px; 
            margin-bottom: 50px;
        }

        .radio-container {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            width: 800px;
            text-align: left;
            font-size: 100px;
            margin-left: 1300px;
            margin-top: -680px;
            font-weight: bold;
        }
        .radio-wrapper {
            border: 2px solid black; 
            padding: 50px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            width: 1000;
        }
        .radio-wrapper input[type="radio"] {
            margin: 0 10px;
            transform: scale(1.5);
        }
        .radio-wrapper label {
            font-size: 30px;
            margin-left: 10px;
        }
        .radio-wrapper img {
            width: 200px;
            height: 100px;
            margin-right: 10px;
        }
        .button-container {
            text-align: center;
            margin-top: 30px;
        }

        .button-container button {
            padding: 15px 30px;
            font-size: 24px;
            color: white;
            background-color: hsla(3, 72%, 31%, 0.902);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            height: 50px;
            width: 800px;
            margin-bottom: 20px;
            margin-top: -200px;
            margin-left: 950px;
        }

        .button-container button:hover {
            background-color: hsl(3, 72%, 31%);
        }


        .contact-form input[type="radio"]:hover {
            cursor: pointer;
        }

        .contact-form input[type="radio"]:checked {
            outline: 2px solid hsl(0, 81%, 32%);
        }
        .outstanding-balance-container {
            background-color: maroon; 
            padding: 20px; 
            border-radius: 5% 5% / 80% 80%; 
            width: 1000px; 
            text-align: center; 
            margin: 20px auto; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            font-family: Arial, sans-serif; /* Font style */
        }

        .outstanding-balance-container h3 {
            margin: 0; /* Remove default margin */
            font-size: 24px; /* Font size for the heading */
            color: white; /* Text color */
        }

        #dashboard {
            display: none;
            background-color: gray;
            padding: 20px;
            border-radius: 10px;
            position: absolute;
            top: 80px;
            right: 20px;
            z-index: 999;
            height: 150px;
            width: 300px;
        }

        #dashboard nav {
            margin-top: 10px;
        }

        #dashboard a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 0;
            font-size: 40px;
            text-align: center;
        }

        #dashboard a:hover {
            background-color: #333;
            border-radius: 5px;
        }

        nav.secondary-nav {
            background-color: #fdff79e6; 
            text-align: left;
            padding: 5px;
        }

        nav.secondary-nav h2 {
            color:black;
            font-size: 30px;
            text-decoration: none;
            margin-left: 10px;
            padding:0px;
            font-family: Georgia, sans-serif;
        }

        nav.secondary-nav a {
            color:black;
            font-size: 50px;
            text-decoration: none;
            margin-left: 10px;
            padding:0px;
            font-family: Georgia, sans-serif;
        }

        nav.secondary-nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
        }
        .gcash img {
            transition: transform 0.3s ease;
            margin-top: 100px;
            margin-left: 100px;
        }
        .gcash img:hover {
            transform: scale(1.1); 
        }
        .paymaya img {
            background-color: white;
            border-radius: 30px;
            transition: transform 0.3s ease;
            margin-left: 700px;
            margin-top: -600px;
            margin-bottom: 70px;
            border-color: maroon;
        }
        .paymaya img:hover {
            transform: scale(1.1); 
        }
        .landbank img {
            border-radius: 30px;
            transition: transform 0.3s ease;
            margin-left: 1250px;
            margin-top: -600px;
            margin-bottom: 90px;
            border-color: maroon;
        }
        .landbank img:hover {
            transform: scale(1.1); 
        }
        .pnb img {
            border-radius: 30px;
            transition: transform 0.3s ease;
            margin-left: 1800px;
            margin-top: -600px;
            margin-bottom: 110px;
            border-color: maroon;
        }
        .pnb img:hover {
            transform: scale(1.1); 
        }

        footer {
            text-align: center;
            color: black;
            padding: 10px;
            margin-top: 450px;
            text-decoration: none;
        }

        /*Just a practice for button*/
         .container .name button {
            cursor: pointer;
            width: 100%;
            background-color: maroon;
            font-size: 30px;
            color: white;
            font-weight: bold;
            padding: 5px;
            border-radius: 10px;
            margin: 0;
         }

    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="100px" height="100px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
        <nav class="header-nav">
            <a href="#" onclick="toggleDashboard('options')"> ⛛ </a>
        </nav>
    </header>
    <div id="dashboard" style="display: none; background-color: gray;">
        <nav>
            <a href="#">My Profile</a>
            <a href="../webpages/index.php">Log Out</a>
        </nav>
    </div>
    <nav class="secondary-nav"> 
        <nav class="secondary-nav"> 
             <a href="../webpages/home.php" onclick="showSection('name-user')"> » </a>
             <a href="../webpages/balance.php" onclick="showSection('name-user')"> Outstanding Balance </a>
        </nav>
    </nav>
     <div class="outstanding-balance-container">
    <h3 id="outstanding-balance">OUTSTANDING BALANCE 
        <span id="balance-amount">0.00</span> </h3>

</form>
</div>
    <div class="gcash">
        <a href="../gcash_payment/gcash.php">
                <img src="../images/gcash.png" alt="GCash" width="700px" height="400px"> 
            </a>
            </div>
            <div class="paymaya" width="700px" height="400px">
                <a href="">
                <img src="../images/paymaya.png" alt="PayMaya" width="500px" height="300px">
                </a>
            </div>
            <div class="landbank">
                <a href=" ">
                <img src="../images/landbank.jpg" alt="LandBank" width="500px" height="300px">
                </a>
            </div>
            <a href=" ">
            <div class="pnb">
                <img src="../images/pnb.jpg" alt="PNB" width="500px" height="300px">
                </a>
            </div>
        </div>
</body>
</html>