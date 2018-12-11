<?php
header('Location: lunchUsers.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

$stmt = $conn->prepare("DELETE FROM pupils WHERE UserID = :UserID");
$stmt->bindParam(":UserID", $_POST['UserID']);
$stmt->execute();
?>