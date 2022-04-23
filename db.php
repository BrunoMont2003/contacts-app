<?php
$host = "localhost";
$database = "contacts_app";
$user = "root";
$password = "";
$port = "3307";

try {
    $conn = new PDO("mysql:host={$host}; dbname={$database}; port={$port}", $user, $password);
} catch (\Throwable $th) {
    die("Could not connect to db: " . $th->getMessage());
}