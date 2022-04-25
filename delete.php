<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
require "./db.php";
$id = $_GET["id"];
$statement = $conn->prepare("SELECT * FROM contacts WHERE id = :id LIMIT 1");
$statement->bindParam(":id", $id);
$statement->execute();
if ($statement->rowCount() == 0) {
    http_response_code(404);
    echo ("HTTP Error - Contact not found");
    return;
}

$contact = $statement->fetch(PDO::FETCH_ASSOC);

if ($contact["user_id"] != $_SESSION['user']["id"]) {
    http_response_code(403);
    echo ("HTTP 403 - UNAuthorized");
    return;
}

$statement = $conn->prepare("DELETE FROM contacts WHERE id = :id");
$statement->bindParam(":id", $id);
$statement->execute();
$_SESSION['flash'] = ["message" => "Contact {$contact['name']} deleted."];

header("Location: home.php");