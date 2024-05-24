<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $First_Name = $_POST['First_Name'] ?? '';
    $Middle_Name = $_POST['Middle_Name'] ?? '';
    $Last_Name = $_POST['Last_Name'] ?? '';
    $Section = $_POST['Section'] ?? '';

    if (!empty($First_Name) && !empty($Middle_Name) && !empty($Last_Name)) {
        $xmlFilePath = "../XML/myxml.xml";

        if (file_exists($xmlFilePath) && filesize($xmlFilePath) > 0) {
            $xml = simplexml_load_file($xmlFilePath);

            if ($xml === false) {
                $xml = new SimpleXMLElement('<data/>');
            }
        } else {
            $xml = new SimpleXMLElement('<data/>');
        }
        $studentExists = false;
        foreach ($xml->student as $student) {
            if ($student->First_Name == $First_Name &&
                $student->Middle_Name == $Middle_Name &&
                $student->Last_Name == $Last_Name &&
                $student->Section == $Section &&
                $studentExists = true;
                break;
            }
        }
        if (!$studentExists) {
            $newStudent = $xml->addChild('student');
            $newStudent->addChild('First_Name', htmlspecialchars($First_Name));
            $newStudent->addChild('Middle_Name', htmlspecialchars($Middle_Name));
            $newStudent->addChild('Last_Name', htmlspecialchars($Last_Name));
            $newStudent->addChild('Section', htmlspecialchars($Section));
        


            if ($xml->asXML($xmlFilePath)) {
                header("Location: ../webpages/admin.php?status=success");
            } else {
                header("Location: ../webpages/admin.php?status=error&message=Failed+to+write+XML+file.");
            }
        } else {
            header("Location: ../webpages/admin.php?status=error&message=Student+already+exists.");
        }
    } else {
        header("Location: ../webpages/admin.php?status=error&message=Invalid+form+data.");
    }
    exit;
} else {
    header("Location: ../webpages/admin.php");
    exit;
}
?>
