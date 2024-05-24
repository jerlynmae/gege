
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
            height: 100px;
        }

        nav.secondary-nav a {
            text-decoration: none;
            color: black;
            font-size: 30px;
            float:right;
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
        .dash_board2{
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            width: 1500px;
            text-align: center;
            font-size: 30px;
            margin-left: 700px;
            margin-top: -550px;
            font-weight: bold;
        }
        .notification-container button {
            width: 800px;
            height: 30px;
            font-size: 25px;
        }

        .student-form button {
            width: 800px;
            height: 30px;
            font-size: 25px;
        }
        .notification-container textarea {
            width: 800px;
            height: 80px;
            font-size: 25px;
        }
       .bar-graph {
            width: 1000px;
            height: 700px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            margin-top: -500px;
            border: 2px solid black;
            margin-left: 1200px;
        }

        .grid-line {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 1px;
            border-top: 1px dashed red; 
        }

        .grid-label {
            position: absolute;
            top: 0;
            right: 100%;
            transform: translateX(-100%);
            font-size: 50px; 
            color: white; 
            margin-top: -6px;
            z-index: 9999;
            text-align: center;
        }
        .bar {
            position: absolute;
            bottom: 0;
            width: 50px;
            margin: 0 5px;
            border-radius: 30px;
            transition: height 0.5s;
        }

        .paid {
            background-color: gold;
            margin-left:500px ;
            width: 300px;
        }

        .unpaid {
            background-color: maroon;
            width: 300px;
            margin-left: 100px;
        }

        .bar-label {
            text-align: center;
        }
         .legend {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-left: 900px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin: 0 10px;
            font-size: 18px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .legend-paid {
            background-color: gold;
        }

        .legend-unpaid {
            background-color: maroon;
        }
        .text h4 {
            border: 2px solid black;
            width: 500px;
            height: 200px;
            font-size: 40px;
            margin-left: 600px;
            margin-top: -600px;
            padding: 20px;
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
            <a href="../PHPScript/logout.php" onclick="toggleDashboard('dashboard')">Log Out</a>

        </nav>
    </div>
    <nav class="secondary-nav">
        <a href="#" onclick="toggleDashboard('dashboard')"> Admin   ⛛ </a>
        <h2> ADMINISTRATOR</h2>
    </nav>
    </div>
    <div class= "dash_board">
        <a href="#"><img src="../images/dashboard.jpg" width="100px" height="100px"></a>
        <a href=" ../adminwebpages/admin_transact.php"><img src="../images/tra.jpg" width="100px" height="100px"> </a>
        <a href="../webpages/admintable.php"> <img src="../images/stu.png" width="100px" height="100px"> </a>
        <a href="../adminwebpages/admin_notif.php"> <img src="../images/nofit.png" width="100px" height="100px"> </a>
    </div>
    <div class="text"> 
        <h4> Here is the chart of paid and unpaid students. </h4>
    </div>
     <div class="bar-graph">
            <?php

            for ($i = 10; $i <= 90; $i += 10) {
                $position = $i . '%';
            ?>
                <div class="grid-line" style="top: <?php echo $position; ?>;"></div>
                <span class="grid-label" style="top: calc(<?php echo $position; ?> - 6px);"><?php echo $i; ?>%</span>
            <?php
            }
            ?>
        <?php
        $xmlFile = '../XML/payment.xml';

        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);
            if ($xml === false) {
                echo "Failed to load XML file.";
            } else {
                $totalStudents = 100;
                $paidCount = 0;
                foreach ($xml->payment as $payment) {
                    if ($payment->{'payment-status'} == 'Success') {
                        $paidCount++;
                    }
                }

                $paidPercentage = ($paidCount / $totalStudents) * 100;
                $unpaidPercentage = 100 - $paidPercentage;
        ?>
            <div class="bar paid" style="height: <?php echo $paidPercentage; ?>%;"></div>
            <div class="bar unpaid" style="height: <?php echo $unpaidPercentage; ?>%;"></div>
        <?php
            }
        } else {
            echo "XML file not found.";
        }
        ?>
    </div>
    </div>
    <div class="legend">
        <div class="legend-item">
            <div class="legend-color legend-paid"></div>
            <span>Paid:  <?php echo $paidPercentage; ?>%</span>
        </div>
        <div class="legend-item">
            <div class="legend-color legend-unpaid"></div>
            <span>Unpaid: <?php echo $unpaidPercentage; ?>%</span>
        </div>
    </div>
    <script> 
        function toggleDashboard(elementId) {
    var dashboard = document.getElementById(elementId);
    if (dashboard.style.display === "none") {
        dashboard.style.display = "block";
    } else {
        dashboard.style.display = "none";
    }
}
</script>
</body>
</html>