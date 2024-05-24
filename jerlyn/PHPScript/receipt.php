<?php
// Load the XML data from the file
$xmlFilePath = '../XML/payment.xml';
$xml = simplexml_load_file($xmlFilePath);

if ($xml === false) {
    echo "Failed to load XML data.";
    exit;
}

$lastPayment = $xml->payment[count($xml->payment) - 1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .receipt {
            max-width: 400px;
            height: 800px;
            margin: 0 auto;
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 20px;
        }

        .receipt a {
            font-size: 50px;
            text-decoration: none;
            color: black;
        }

        h1 {
            text-align: center;
            color: #0077c0;
            font-size: 50px;
            border-bottom: 2px solid black;
        }

        .item {
            margin-bottom: 10px;
            font-size: 20px;
            border-bottom: 2px solid black;
            padding: 20px;
        }

        .item span {
            font-weight: bold;
            font-size: 20px;
        }

        .timestamp {
            font-style: italic;
            color: #666;
        }

        .payment-form button {
            background-color: #0077c0;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 30px;
            width: 500px;
            height: 90px;
            margin-top: 50px;
            margin-left: 1000px;
            border-radius: 20px;
        }

        .payment-form button:hover {
            background-color: #005f90;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <h1>Payment Successful</h1>
        <div class="item">
            <span>User Name:</span> <?php echo htmlspecialchars($lastPayment->{"user-name"}); ?>
        </div>
        <div class="item">
            <span>Amount Paid:</span> PHP <?php echo htmlspecialchars($lastPayment->{"amount-due"}); ?>
        </div>
        <div class="item">
            <span>Payment Status:</span> <?php echo htmlspecialchars($lastPayment->{"payment-status"}); ?>
        </div>
        <div class="item">
            <span>Transaction ID:</span> <?php echo htmlspecialchars($lastPayment->{"transaction-id"}); ?>
        </div>
        <div class="item timestamp">
            <span>Timestamp:</span> <?php echo htmlspecialchars($lastPayment->timestamp); ?>
        </div>
    </div>
    <div class="payment-form">
        <a href="../webpages/osbalance2.php">
            <button type="submit">Check the Balance</button> 
        </a>
    </div>
</body>
</html>
