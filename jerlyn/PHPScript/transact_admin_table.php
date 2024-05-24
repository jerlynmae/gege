<?php
// Load the XML file
$xmlFilePath = "../XML/payment.xml";

if (!file_exists($xmlFilePath)) {
    echo "Failed to load XML file. File does not exist.";
    exit;
}

$xml = simplexml_load_file($xmlFilePath);

if ($xml === false) {
    echo "Failed to load XML file.";
    exit;
}

// Start HTML output
echo "<html><head><title>Payment Information</title></head><body>";
echo "<h1>List of Payments</h1>";
echo "<table border='1'>";
echo "<tr><th>User Name</th><th>Amount Due</th><th>Payment Status</th><th>Transaction ID</th><th>Timestamp</th></tr>";

foreach ($xml->payment as $payment) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($payment->{'user-name'}) . "</td>";
    echo "<td>" . htmlspecialchars($payment->{'amount-due'}) . "</td>";
    echo "<td>" . htmlspecialchars($payment->{'payment-status'}) . "</td>";
    echo "<td>" . htmlspecialchars($payment->{'transaction-id'}) . "</td>";
    echo "<td>" . htmlspecialchars($payment->{'timestamp'}) . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</body></html>";
?>
