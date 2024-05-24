<?php
session_start(); 

// Initialize variables
$username = "";
$first_name = "";
$middle_name = "";
$last_name = "";

// Check if username is set in session
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}

// Load the XML file
$xmlFilePath = '../XML/list.xml';
if (file_exists($xmlFilePath)) {
    $xml = simplexml_load_file($xmlFilePath);
    $first_name = (string)$xml->First_Name;
    $middle_name = (string)$xml->Middle_Name;
    $last_name = (string)$xml->Last_Name;
    $full_name = "$first_name $middle_name $last_name";
} else {
    $full_name = $username; // Fallback to username if XML doesn't exist
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinduque State College Online Payment System - Home</title>
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

        nav.secondary-nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
        }

        nav.body-nav {
            text-align: left;
            margin-left: 100px;
            margin-top: 50px;
        }

        nav.body-nav a {
            color:black;
            font-size: 50px;
            text-decoration: none;
            margin-left: 0px;
        }

        nav.body-nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
        }
        /* CSS for the dashboard */
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
        .notif-content{
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(142, 22, 22, 0.831);
            width: 500px;
            height: 500px;
            margin-bottom: 300px;
            top: 50%; 
            left: 50%;
            margin-left: 400px;
            margin-top: 50px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease;
        }
        .notif-content video{
            border-radius: 30px;
            transition: transform 0.3s ease;
        }
       .notif-content:hover {
            background-color:maroon;
            border-color: hsl(0, 81%, 32%); 
            transform: scale(1.1); 

       }
       .balance-container {
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(142, 22, 22, 0.831);
            width: 500px;
            height: 500px;
            margin-bottom: 300px;
            top: 50%; 
            left: 50%;
            margin-left: 1000px;
            margin-top: -840px;
            margin-bottom: 240px;
            transition: transform 0.3s ease;
       }
       .bal-content video{
           border-radius: 30px;
           transition: transform 0.3s ease;
       }
       .balance-container:hover {
            background-color: maroon;
            border-color: hsl(0, 81%, 32%);
            transform: scale(1.1);  
       }
       .transact-container {
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(142, 22, 22, 0.831);
            width: 500px;
            height: 500px;
            margin-bottom: 300px;
            margin-top: 30px;
            top: 50%; 
            left: 50%;
            margin-left: 1600px;
            margin-top: -780px;
            transition: transform 0.3s ease;
       }
       .trans-content video{
            border-radius: 30px;
       }
       .transact-container:hover {
            background-color: maroon;
            border-color: hsl(0, 81%, 32%);
            transform: scale(1.1);  
       }

        footer {
            text-align: center;
            background-color: black;
            color: #fff;
            padding: 10px;
            margin-top: -100px;
        }
    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="100px" height="100px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
        <nav class="header-nav">
            <a href="#" onclick="toggleDashboard()"> <?php echo htmlspecialchars($full_name); ?> </a>
            <a href="#" onclick="toggleDashboard('options')"> ⛛ </a>
        </nav>
    </header>
     <!-- Other HTML content -->
    <div id="dashboard" style="display: none; background-color: gray;">
        <nav>
            <a href="../profiles/user-profile.php">My Profile</a>
            <a href="../PHPScript/user_logout.php" onclick="toggleDashboard('dashboard')">Log Out</a>
        </nav>
    </div>
    <nav class="secondary-nav"> 
        <h2>Home</h2>
    </nav>
    <nav class="body-nav"> 
        <img src="../images/house.png" width="50px" height="50px">
        <a href="home" onclick="showSection('name-user')"> Home </a>
    </nav>
    <div class="notif-content">
        <a href="../webpages/notify.php" onclick="showSection('body-notification')">
             <video src="../images/notification.mp4" autoplay loop muted></video> 
        </a>
    </div>
    <div class="balance-container">
        <div class="bal-content">
            <a href="../webpages/osbalance.php" onclick="showSection('bal-text')"> 
            <video src="../images/balance.mp4" autoplay loop muted></video> 
            </a>
        </div>
    </div>
    <div class="transact-container">
        <div class="trans-content">
            <form action="../PHPScript/2transact.php" method="post">
             <a href="../webpages/student2_transaction.php" onclick="showSection('trans-text')">
             <video src="../images/transact.mp4" autoplay loop muted></video> 
             </a>
             </form>
        </div>
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
