<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'] ?? '';

    if (!empty($message)) {
        $xmlFilePath = "../XML/studentnotif.xml";

        try {
            if (file_exists($xmlFilePath)) {
                $xml = simplexml_load_file($xmlFilePath);
                if ($xml === false) {
                    throw new Exception("Failed to load XML file.");
                }
            } else {
            
                $xml = new SimpleXMLElement('<?xml version="1.0"?><notifications></notifications>');
                if ($xml === false) {
                    throw new Exception("Failed to create XML structure.");
                }
            }

            $newNotification = $xml->addChild('notification');
            if ($newNotification === false) {
                throw new Exception("Failed to add new notification.");
            }
            $newNotification->addChild('message', htmlspecialchars($message, ENT_XML1, 'UTF-8'));

            $result = $xml->asXML($xmlFilePath);
            if ($result === false) {
                throw new Exception("Failed to save XML file.");
            }
            header("Location: ../adminwebpages/admin_notif.php?status=notification_success");
        } catch (Exception $e) {
            
            header("Location: ../adminwebpages/admin_notif.php?status=error&message=" . urlencode($e->getMessage()));
        }
    } else {

        header("Location: ../adminwebpages/admin_notif.php?status=error&message=Invalid+notification+data.");
    }
    exit;
} else {

    header("Location: ../adminwebpages/admin_notif.php");
    exit;
}
?>
