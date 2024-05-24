<?php

$correctPhoneNumber = "09656606247";
$correctPin = "0700";


$submittedPhoneNumber = $_POST['phone-number'];
$submittedPin = $_POST['otp'];

$errors = [];

if ($submittedPhoneNumber !== $correctPhoneNumber) {
    $errors['phone-number'] = "Invalid GCash number";
}
if ($submittedPin !== $correctPin) {
    $errors['otp'] = "Incorrect Pin";
}

if (!empty($errors)) {
    $query = http_build_query(['errors' => $errors, 'phone-number' => $submittedPhoneNumber]);
    header("Location: ../gcash_payment/gcash.php?$query");
    exit();
}

header("Location: ../gcash_payment/about_to_pay.php");
exit();
?>
