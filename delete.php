<?php
require "./db.php";
$id = $_GET["id"];
$statement = $conn->prepare("SELECT * FROM contacts WHERE id = :id");
$statement->bindParam(":id", $id);
$statement->execute();
if ($statement->rowCount() == 0) {
    http_response_code(404);
    echo ("HTTP Error - Contact not found");
    return;
}

$statement = $conn->prepare("DELETE FROM contacts WHERE id = :id");
$statement->bindParam(":id", $id);
$statement->execute();
header("Location: home.php");
