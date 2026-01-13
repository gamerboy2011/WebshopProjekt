<?php
header("Access-Control-Allow-Origin *");
header("Content-Type: application.json");

//require "config.php";
include("config.php");

echo ("Hali");

try {
    $sql = "SELECT * FROM users";
    $stmt = mysqli_prepare($conn , $sql);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    http_response_code(200);
    echo json_encode([
        "status" => "success",
        "count" => count($users),
        "data" => $users
    ]);
} catch (Exception $e){
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Failed to fetch users"
    ]);
}