<?php
session_start();

if (isset($_SESSION["full_name"]) && $_SESSION["full_name"] === "Alaiza Labaguis Milambiling") {
    header("Location: ../webpages/student_transaction.php");
    exit;
}

if (isset($_SESSION["full_name"]) && $_SESSION["full_name"] === "Jerlyn Mae L. Magante") {
    header("Location: ../webpages/student2_transaction.php");
    exit;
}

header("Location: login.php"); 
exit;
?>
