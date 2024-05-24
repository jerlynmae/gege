<?php
// Load the XML file
$xml = simplexml_load_file("../XML/transactions.xml");

if ($xml === false) {
    echo "Failed to load XML file.";
    exit;
}

$transactions = [];
foreach ($xml->transaction as $transaction) {
    $user = (string) $transaction->user;
    if (!isset($transactions[$user])) {
        $transactions[$user] = 0;
    }
    $transactions[$user]++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style type="text/css">
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
    font-size: 50px;
    text-align: left;
    margin-left: 120px;
    border-bottom: black;
    margin-top: -20px;
}

nav.secondary-nav .back {
    text-decoration: none;
    color: black;
    font-size: 50px;
    float: left;
    margin-left: 5220px;
    border-bottom: black;
}

nav.secondary-nav a:hover {
    background-color: hsl(0, 81%, 32%);
    color: hwb(0 96% 0%);
}

.container {
    padding: 20px;
    text-align: center;
}

.bar-chart {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 300px;
    background-color: #f2f2f2;
    padding: 10px;
    border: 1px solid #ccc;
    margin: 20px auto;
    width: 80%;
}

.bar {
    width: 30px;
    background-color: maroon;
    margin: 0 5px;
    position: relative;
}

.bar:hover {
    background-color: #800000;
}

.bar::before {
    content: attr(title);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    margin-bottom: 5px;
    background: #fff;
    padding: 2px 5px;
    border: 1px solid #ccc;
    font-size: 12px;
    white-space: nowrap;
}

footer {
    margin-top: 50px;
    text-align: center;
    padding: 10px;
    background-color: maroon;
    color: white;
}

    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="100px" height="120px">
        <h1>Admin Dashboard</h1>
    </header>

    <nav class="secondary-nav">
        <a href="#" onclick="toggleDashboard('name-user')">Jerlyn Mae L. Magante ⛛</a>
        <a class="back" href="../webpages/admin.php" onclick="showSection('name-user')"> » </a>
        <h2>ADMINISTRATOR</h2>
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
    <div class="container">
        <h1>Payments Overview</h1>
        <div class="bar-chart">
            <?php foreach ($transactions as $user => $count): ?>
                <div class="bar" style="height: <?= $count * 20 ?>px;" title="<?= $user ?>: <?= $count ?> payments"></div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        &copy; 2024 Marinduque State College. All rights reserved.
    </footer>
</body>
</html>
