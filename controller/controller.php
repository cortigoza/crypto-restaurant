<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../config/connect.php");
require_once("../model/db.php");

$db = new DB();


if(isset($_POST['user'])) {
    $result = $db->Login($_POST['mail'], $_POST['password']);
    if (!$result) {
        echo json_encode(['response' => 'error', 'status' => 400]);
        exit; 
    }
    echo json_encode(['response' => 'ok', 'status' => 200]);
}
