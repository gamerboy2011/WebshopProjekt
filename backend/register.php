<?php
header("Access-Control-Allow-Origin *");
header("Content-Type: application.json");


include("config.php");

$data = json_decode(file_get_contents("php://input"),true);

$username = $data["username"] ?? "";
$adress = $data["adress"] ?? "";
$phonenum = $data["phonenum"] ?? "";
$email = $data["email"] ?? "";
$password = $data["passwordhash"] ?? "";
$createdat = $data["createdat"] ?? "";

if (!$name || !$adress || !$phonenum || !$email || !$password) { 
    http_response_code(400);
    echo json_encode(["error" => "Missing required fields!"]);
    exit;
}
$sql = "INSERT INTO users (username, adress, phonenum, email, passwordhash) VALUES (:username ,:adress, :phonenum, :email, :passwordhash)";
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username, 'adress'=> $adress, 'phonenum' => $phonenum, 'email' => $email, 'passwordhash' => $passwordhash ]);

echo json_encode(['messsage' => 'You have successfully registered'])


?>
