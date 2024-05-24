
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['First_Name'], $_POST['Last_Name'], $_POST['Password'], $_POST['Section'], $_POST['ReEnter_Password'])) {
        $first_name = htmlspecialchars($_POST['First_Name']);
        $middle_name = htmlspecialchars($_POST['Middle_Name']);
        $last_name = htmlspecialchars($_POST['Last_Name']);
        $section = htmlspecialchars($_POST['Section']);
        $Email = htmlspecialchars($_POST['Email']);
        $password = htmlspecialchars($_POST['Password']);
        $re_enter_password = htmlspecialchars($_POST['ReEnter_Password']);

        $correct_password = "password123"; 

        if (!empty($first_name) && !empty($last_name) && !empty($password) && !empty($section)) {
            if ($password !== $re_enter_password) {
                echo "Passwords don't match.";
            } elseif ($password !== $correct_password) {
                echo "Incorrect password.";
            } else {
                $xml = new SimpleXMLElement('<user/>');
                $xml->addChild('First_Name', $first_name);
                $xml->addChild('Middle_Name', $middle_name);
                $xml->addChild('Last_Name', $last_name);
                $xml->addChild('Section', $section);
                $xml->addChild('Email', $Email);

                $xmlFilePath = '../XML/list.xml';

                if ($xml->asXML($xmlFilePath)) {
           
                    header("Location: ../webpages/home.php?status=success");
                } else {
                
                    header("Location: ../webpages/signup.php?status=error&message=Failed+to+write+XML+file.");
                }
                exit;
            }
        } else {
            header("Location: ../webpages/signup.php?status=error&message=All+fields+are+required.");
            exit;
        }
    } else {
        header("Location: ../webpages/signup.php?status=error&message=Invalid+form+data.");
        exit;
    }
} else {
    header("Location: ../webpages/signup.php");
    exit;
}
?>
