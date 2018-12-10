<?php

// header('Location: refillstockFORM.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

$stmt = $conn->prepare("INSERT INTO stock (FoodID, FoodName, Quantity, category)VALUES (null,:FoodName,0,:category)");

$stmt->bindParam(":FoodName", $_POST['FoodName']);
$stmt->bindParam(":category", $_POST['category']);
$stmt->execute();

?>