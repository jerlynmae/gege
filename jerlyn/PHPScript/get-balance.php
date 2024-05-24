<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $response = array('status' => 'success', 'new_balance' => 0);
    echo json_encode($response);
    exit();
}
?>
