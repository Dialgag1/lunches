<?php
header('Location: lunchUsers.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

$stmt = $conn->prepare("INSERT INTO pupils (UserID,forename,surname,house,email,password)VALUES (null,:forename,:surname,:house,:email,:password)");

$stmt->bindParam(":forename", $_POST['forename']);
$stmt->bindParam(":surname", $_POST['surname']);
$stmt->bindParam(":house", $_POST['house']);
$stmt->bindParam(":email", $_POST['email']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
?>