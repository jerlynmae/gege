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
            display: flex; /* Use flexbox to align items */
            align-items: center; /* Center items vertically */
        }
        nav.header-nav a {
            text-decoration: underline;
            color: #fff; /* Use the same color as header text */
            padding: 10px ; 
            margin-left: -100px;
            font-size: 30px;
            margin-right: 100px;
            text-decoration: none;
        }

        nav.header-nav a:hover {
            color: hsla(3, 72%, 31%, 0.902);
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

        nav.secondary-nav a {
            color:black;
            font-size: 50px;
            text-decoration: none;
            margin-left: 10px;
        }

        nav.secondary-nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
        }
        /* CSS for Notification Content */
        .notification-container {
            max-height: 900px;
            overflow-y: auto; 
            border: 1px solid #ccc; 
            padding: 10px; 
            margin-left: 100px;
            margin-right: 50px;
            margin-top: 30px;
        }

        .notification {
            margin-bottom: 10px; 
            background-color: indianred; 
            padding: 10px; 
            border-radius: 10px 60px;
            font-size: 30px;
            color: black;
        }

        foooter{
            color: black;
            font-size: 20px;
            margin-top: 300px;
            text-align: center;
        }

    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="90px" height="100px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
        <nav class="header-nav">
            <a href="#" onclick="showSection('name-user')"> MILAMBILING, ALAIZA L.</a>
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
     <a href="../webpages/notify.php" onclick="showSection('name-user')"> Transaction </a>
    </nav>
    </nav>
    <nav class="body-nav"> 
    </nav>
    <div class="notification-container">
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>Outstanding Balance is 120.00.</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p> WAG NA MAG BAYAD, ANG HIRAP NAMAN NG INTEG</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>wait ser</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>Ang gutom ser</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>hehe.</p>
        </div>

        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>Ang programang ito ay rated spg </p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>8-7000 jollibee delivery.</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>What time is it?.</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>It's time for lunch.</p>
        </div>
        <div class="notification">
            <h3>Jerlyn Mae Magante</h3>
            <p>Sige</p>
        </div>

    <script>
        function toggleDashboard() {
            var dashboard = document.getElementById("dashboard");
            if (dashboard.style.display === "none") {
                dashboard.style.display = "block";
            } else {
                dashboard.style.display = "none";
            }
        }
    </script>
    <footer>
       @ 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
