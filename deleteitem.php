<?php

header('Location: refillstockFORM.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

$stmt = $conn->prepare("DELETE FROM stock WHERE FoodID = :FoodID");

$stmt->bindParam(":FoodID", $_POST['FoodID']);
$stmt->execute();

?>