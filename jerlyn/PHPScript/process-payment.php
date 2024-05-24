<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amountDue = 120.00;
    $paymentStatus = "Success";
    $transactionId = generateTransactionId();
    
    $xmlFilePath = '../XML/list.xml';
    $xml = simplexml_load_file($xmlFilePath);
    $firstName = (string)$xml->First_Name;
    $lastName = (string)$xml->Last_Name;
    $userName = $firstName . ' ' . $lastName;

    $commonPaymentFilePath = '../XML/payment.xml';

    $userPaymentFilePath = "../XML/payment_{$firstName}.xml";
    
    function savePaymentData($filePath, $userName, $amountDue, $paymentStatus, $transactionId) {
        if (file_exists($filePath)) {
            $xmlContent = file_get_contents($filePath);
            if (empty($xmlContent)) {
                $xmlContent = '<?xml version="1.0"?><payments></payments>';
            }
            $xml = simplexml_load_string($xmlContent);
            if ($xml === false) {
                $xml = new SimpleXMLElement('<payments></payments>');
            }
        } else {
            $xml = new SimpleXMLElement('<payments></payments>');
        }

        $payment = $xml->addChild('payment');
        $payment->addChild('user-name', $userName);
        $payment->addChild('amount-due', $amountDue);
        $payment->addChild('payment-status', $paymentStatus);
        $payment->addChild('transaction-id', $transactionId);
        $payment->addChild('timestamp', date('Y-m-d H:i:s'));

        return $xml->asXML($filePath);
    }

    $commonSaveSuccess = savePaymentData($commonPaymentFilePath, $userName, $amountDue, $paymentStatus, $transactionId);


    $userSaveSuccess = savePaymentData($userPaymentFilePath, $userName, $amountDue, $paymentStatus, $transactionId);

    if ($commonSaveSuccess && $userSaveSuccess) {
        echo "<h1>Payment Successful</h1>";
        echo "<p>Transaction ID: $transactionId</p>";
        echo "<p>Amount Paid: PHP $amountDue</p>";
        echo "<p>Payment Status: $paymentStatus</p>";
        echo "<p>User Name: $userName</p>";
        echo "<p>Timestamp: " . date('Y-m-d H:i:s') . "</p>";
        echo "<script>window.location.href = '../PHPScript/receipt.php';</script>";
    } else {
        echo "<p>Error: Unable to save payment information.</p>";
    }
}

function generateTransactionId() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $timestamp = substr(time(), -5);
    $randomChars = '';
    for ($i = 0; $i < 8; $i++) {
        $randomChars .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $timestamp . $randomChars;
}
?>
