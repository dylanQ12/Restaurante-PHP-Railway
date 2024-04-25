<?php
$DB_HOST = $_ENV["DB_HOST"];
$DB_PORT = $_ENV["DB_PORT"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASSWORD = $_ENV["DB_PASSWORD"];

try {
    $conexion = new PDO("mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (Exception $error) {
    echo $error->getMessage();
}
