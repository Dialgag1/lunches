<?php

// header('Location: Lunches.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

// $stmt = $conn->prepare("INSERT INTO pupils (UserID,forename,surname,house,email)VALUES (null,:forename,:surname,:house,:email)");

// $stmt->bindParam(":forename", $_POST['forename']);
// $stmt->bindParam(":surname", $_POST['surname']);
// $stmt->bindParam(":house", $_POST['house']);
// $stmt->bindParam(":email", $_POST['email']);
// $stmt->execute();

$stmt = $conn->prepare("INSERT INTO orders (OrderID,sandwich,snack,fruit,drink,Date)VALUES (null,:sandwich,:snack,:fruit,:drink,:date)");

$stmt->bindParam(":sandwich", $_POST['sandwich']);
$stmt->bindParam(":snack", $_POST['snack']);
$stmt->bindParam(":fruit", $_POST['fruit']);
$stmt->bindParam(":drink", $_POST['drink']);
$stmt->bindParam(":date", $_POST['Date']);
$stmt->execute();

// Below reduces the stock of each selected food by 1

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity - 1 WHERE FoodName = :sandwich");
$stmt->bindParam(":sandwich", $_POST['sandwich']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity - 1 WHERE FoodName = :snack");
$stmt->bindParam(":snack", $_POST['snack']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity - 1 WHERE FoodName = :fruit");
$stmt->bindParam(":fruit", $_POST['fruit']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity - 1 WHERE FoodName = :drink");
$stmt->bindParam(":drink", $_POST['drink']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = 0 WHERE FoodName = 'none'");
$stmt->execute();

// Deletes any orders which order any not in stock items (deletes order with 0 stock foods AFTER adding order AND IS NOT NONE)
$conn=null;

?>