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
            height: 60px;
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
        .dash_board img {
            width: 500px;
            height: 200px;
            border-radius: 20px;
            margin-right: 1000px;
            margin-left: -10px;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }
        .dash_board img:hover {
            width: 500px;
            height: 200px;
            border-radius: 20px;
            margin-right: 1000px;
            margin-left: -10px;
            margin-top: 20px;
            transform: scale(1.1);  
        }
        nav.secondary-nav .back {
            text-decoration: none;
            color: black;
            font-size: 50px;
            float: left;
            margin-left: 60px;
            border-bottom: black;
        }

        .dash_board2 {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 50px;
            width: 80%;
            height: auto;
            text-align: center;
            font-size: 30px;
            margin: 100px auto;
        }
        .student-form-container,
        .notification-container {
            flex: 1;
            padding: 20px;
            margin: 10px;
        }
        .student-form-container {
            border: 2px solid black;
            border-radius: 30px;
        }
        .notification-container{
            border: 2px solid black;
            border-radius: 30px;
        }
        .notification-container button {
            width: 100%;
            height: 50px;
            font-size: 25px;
            background-color: skyblue;
        }
        .notification-container button:hover {
            background-color: grey;
        }
        .notification-container textarea {
            width: 100%;
            height: 200px;
            font-size: 30px;
        }
        footer {
            margin-top: 50px;
            text-align: center;
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
        <a href="#" onclick="toggleDashboard('name-user')">Jerlyn Mae L. Magante    ⛛ </a>
        <a class="back" href="../webpages/admin.php" onclick="showSection('name-user')"> » </a>
        <h2> ADMINISTRATOR</h2>
    </nav>

    <div class="dash_board2">
        <!-- Notification Box Container -->
        <div class="notification-container" id="notification-container">
            <form action="../PHPScript/notifto_students.php" method="post">
                <h3>Send Notification</h3>
                <textarea id="message" name="message" rows="4" cols="50" readonly>Dear Students, 

&emsp; This is a reminder that you have a pending payment. Please complete your payment by the due date to avoid any late fees or disruptions to your course access. If you need assistance, contact us at 09656606247 or 09307919560. Thank You!</textarea><br>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <footer>
        &copy; 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
