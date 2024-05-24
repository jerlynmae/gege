<?php
session_start(); 

// Initialize variables
$username = "";
$first_name = "";
$middle_name = "";
$last_name = "";
$section = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    if (isset($_POST["username"])) {
        $username = htmlspecialchars($_POST["username"]);
        $_SESSION['username'] = $username;
        header("Location: ../webpages/home.php");
        exit();
    }
}

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}


$xmlFilePath = '../XML/list.xml';
if (file_exists($xmlFilePath)) {
    $xml = simplexml_load_file($xmlFilePath);
    $first_name = (string)$xml->First_Name;
    $middle_name = (string)$xml->Middle_Name;
    $last_name = (string)$xml->Last_Name;
    $section = (string)$xml->Section;
} else {
    echo "Failed to open XML file.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinduque State College Online Payment System - Profile</title>
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
        .info h4 {
            font-size: 50px;
            font-weight: bold;
            text-align: center;
        }
        .info h3 {
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            margin-top: -30px;

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
         nav.secondary-nav a {
            color:black;
            font-size: 30px;
            text-decoration: none;
            margin-left: 10px;
        }

        nav.secondary-nav h2 {
            color:black;
            font-size: 50px;
            text-decoration: none;
            margin-left: 10px;
            padding:0px;
            text-align: center;
            font-family: Georgia, sans-serif;
        }

        nav.secondary-nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
        }
        nav.body-nav img {
            margin-left: 1000px;
            margin-top: 50px;
            border-radius: 50%;
            border: 20px solid maroon;
        }

    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="100px" height="100px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
        <nav class="header-nav">
            <a href="#" onclick="toggleDashboard()"> <?php echo htmlspecialchars($username); ?> </a>
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
        <a href="../webpages/home.php" onclick="showSection('name-user')"> Back to Home </a>
        <h2>My Profile</h2>
    </nav>
    <nav class="body-nav"> 
        <img src="../images/example.jpg" width="500px" height="500px">
    </nav>
    <div class="info">
        <h4><?php echo htmlspecialchars("$first_name $middle_name $last_name"); ?></h4><br>
        <h3><?php echo htmlspecialchars($section); ?></h3> 
    </div>
    <footer>
       @ 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
