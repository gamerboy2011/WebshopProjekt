<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Configuarton for our website
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'clotheshop';
$conn = '';
echo ("Php jó");
try {
    
    $conn = mysqli_connect(
        $db_server,
        $db_username,
        $db_password,
        $db_name
    );
    mysqli_set_charset($conn,'utf8mb4');//charset so it can handle all charater and emoji
} catch (mysqli_sql_exception $e) {
  
    http_response_code(500);
  echo json_encode([
        "error" => "Database connection failed"
    ]);
    
    exit;

}

?>