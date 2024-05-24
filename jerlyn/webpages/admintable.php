<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$xml = simplexml_load_file("../XML/myxml.xml");

if ($xml === false) {
    echo "Failed to load XML file.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: beige;
        }

        header {
            background-color: maroon;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav.secondary-nav {
            background-color: #fdff79e6; 
            text-align: center;
            padding: 10px 0;
            height: 50px;
        }

        nav.secondary-nav a {
            text-decoration: none;
            color: black;
            font-size: 30px;
            float: right;
            margin-right: 30px;
            text-transform: bold;
        }

        nav.secondary-nav h2 {
            text-decoration: none;
            color: black;
            font-size: 30px;
            text-align: left;
            margin-left: 120px;
            border-bottom: black;
            margin-top: -5px;
        }
        nav.secondary-nav .back {
            text-decoration: none;
            color: black;
            font-size: 50px;
            float: left;
            margin-left: 60px;
            border-bottom: black;
        }

        nav.secondary-nav a:hover {
            background-color: hsl(0, 81%, 32%);
            color: hwb(0 96% 0%);
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

        footer {
            margin-top: 20px;
            text-align: center;
        }

        table {
            width: 2000px;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 30px;
            margin-left: 300px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
            font-size: 20px;
        }

        th {
            background-color: maroon;
            color: white;
            font-size: 40px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 50px;
        }
        footer {
            margin-top: 300px;
        }

    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="100px" height="120px">
        <h1>Admin Dashboard</h1>
    </header>
    <!-- Other HTML content -->
    <div id="dashboard" style="display: none; background-color: gray;">
        <nav>
            <a href="#">My Profile</a>
            <a href="../webpages/index.php">Log Out</a>
        </nav>
    </div>
    <nav class="secondary-nav">
        <a href="#" onclick="toggleDashboard('name-user')">Jerlyn Mae L. Magante    ⛛ </a>\
        <a class="back" href="../webpages/admin.php" onclick="showSection('name-user')"> » </a>
        <h2> ADMINISTRATOR</h2>
    </nav>
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

    <h1>List of Students</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Section</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($xml->student as $student) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($student->First_Name) . "</td>";
            echo "<td>" . htmlspecialchars($student->Middle_Name) . "</td>";
            echo "<td>" . htmlspecialchars($student->Last_Name) . "</td>";
            echo "<td>" . htmlspecialchars($student->Section) . "</td>";
            echo "<td>" . htmlspecialchars($student->Email) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <footer>
        &copy; 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
