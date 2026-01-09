<?php
//Configuarton for our website
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'clotheshop';
$db_conn = '';

try {
    $db_conn = mysqli_connect(
        $db_server,
        $db_username,
        $db_password,
        $db_name
    );
    mysqli_set_charset($db_conn,'utf8mb4');//charset so it can handle all charater and emoji
} catch (mysqli_sql_exception ) {
    echo 'Connection failed';

}

if ($db_conn) {
    echo 'Connected successfully';
}



?>