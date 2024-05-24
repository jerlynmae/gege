<?php
$xmlFile = '../XML/payment_Jerlyn Mae.xml';

if (!file_exists($xmlFile)) {
    echo "File does not exist: " . htmlspecialchars($xmlFile);
    exit;
}

$xml = simplexml_load_file($xmlFile);

if ($xml === false) {
    echo "Failed to load XML data from: " . htmlspecialchars($xmlFile);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Notifications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
            margin: 0;
            padding: 20px;
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


        .notifications {
            max-width: 5000px;
            margin: 0 auto;
            padding: 20px;
            background-color: beige;
            border: 2px solid #ddd;
            border-radius: 10px;
        }

        .notification {
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f1f1f1;
        }

        .notification h2 {
            margin: 0;
            font-size: 18px;
            color: #0077c0;
            font-weight: bold;
            font-size: 40px;
        }

        .notification p {
            margin: 5px 0;
            font-size: 30px;
        }

        .notification .timestamp {
            font-size: 20px;
            color: #666;
            text-align: right;
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
        .notification {
            margin-bottom: 10px; 
            background-color: lightgrey; 
            padding: 10px; 
            border-radius: 10px 60px;
            color: black;
            width: 2200px;
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <header>
        <img src="../images/Logo.png" width="90px" height="100px">
        &nbsp; &nbsp;
        <h1>Marinduque State College<br>Online Payment System</h1>
    </header>
    </div>
    <nav class="secondary-nav"> 
        <nav class="secondary-nav"> 
     <a href="../webpages/home.php" onclick="showSection('name-user')"> » </a>
     <a href="../webpages/notify.php" onclick="showSection('name-user')"> Transaction </a>
    </nav>
</nav>
    <div class="notifications">
        <h1>Payment Notifications</h1>
        <?php foreach ($xml->payment as $payment): ?>
            <div class="notification">
                <h2><?php echo htmlspecialchars($payment->{'user-name'}); ?></h2>
                <p><strong>Amount Paid:</strong> PHP <?php echo htmlspecialchars($payment->{'amount-due'}); ?></p>
                <p><strong>Status:</strong> <?php echo htmlspecialchars($payment->{'payment-status'}); ?></p>
                <p><strong>Transaction ID:</strong> <?php echo htmlspecialchars($payment->{'transaction-id'}); ?></p>
                <p class="timestamp"><strong>Timestamp:</strong> <?php echo htmlspecialchars($payment->timestamp); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

