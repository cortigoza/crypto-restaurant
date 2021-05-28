<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once("../config/connect.php");
require_once("../model/db.php");
include "mail/mail.php";

$db = new DB();

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    header('HTTP/1.1 404');
    return;
}

if (isset($_GET['login'])) {
    $result = $db->Login($data['mail'], $data['password']);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    $_SESSION['restaurant']['user'] = $result;
    echo json_encode(['response' => 'ok']);
    return;
}

if (isset($_GET['register'])) {
    $result = $db->register($data, $hash);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok']);
    return;
}

if (isset($_GET['mail'])) {
    emailSend($data['accounts'], $data['body'], $data['subject']);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok']);
    return;
}

if (isset($_GET['campaigns'])) {
    $result = $db->getCampaigns();
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}

if (isset($_GET['bookings'])) {
    $result = $db->getBookings();
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}

if (isset($_GET['payments'])) {
    $result = $db->getPayments();
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}

if (isset($_GET['sales'])) {
    $result = $db->getSales();
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}

if (isset($_GET['booking'])) {
    $result = $db->getBooking($data['id']);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}


if (isset($_GET['payment'])) {
    $result = $db->getPayment($data['id']);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}

if (isset($_GET['sale'])) {
    $result = $db->getSale($data['id']);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}

if (isset($_GET['insert_campains'])) {
    $result = $db->insertCampaigns($data);
    if (!$result) {
        header('HTTP/1.1 400');
        return;
    }
    echo json_encode(['response' => 'ok', 'data' => $result]);
    return;
}