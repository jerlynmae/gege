<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $First_Name = $_POST['First_Name'] ?? '';
    $Middle_Name = $_POST['Middle_Name'] ?? '';
    $Last_Name = $_POST['Last_Name'] ?? '';
    $Email = $_POST['Email'] ?? '';

    if (!empty($First_Name) && !empty($Middle_Name) && !empty($Last_Name)) {
        $xmlFilePath = "../XML/list.xml";

        // Load the XML file
        if (file_exists($xmlFilePath)) {
            $xml = simplexml_load_file($xmlFilePath);
            $studentExists = false;

            // Check if the student exists
            foreach ($xml->student as $student) {
                if ((string)$student->First_Name === $First_Name &&
                    (string)$student->Middle_Name === $Middle_Name &&
                    (string)$student->Last_Name === $Last_Name &&
                    (string)$student->Email === $Email){
                    $studentExists = true;
                    break;
                }
            }

            if ($studentExists) {
                header("Location: ../webpages/home.php?status=login_success");
            } else {
                header("Location: ../webpages/home.php?status=error&message=Student+not+found.");
            }
        } else {
            header("Location: ../webpages/home.php?status=error&message=No+student+data+available.");
        }
    } else {
        header("Location: ../webpages/home.php?status=error&message=Invalid+login+data.");
    }
    exit;
} else {
    header("Location: ../webpages/home.php");
    exit;
}
?>
