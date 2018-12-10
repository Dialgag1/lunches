<?php

header('Location: refillstockFORM.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

// $stmt = $conn->prepare("INSERT INTO stock (UserID,Gender,Surname,Forename,Password,House,Year ,Role)VALUES (null,:gender,:surname,:forename,:password,:house,:year,:role)");

// $stmt->bindParam(":forename", $_POST['forename']);
// $stmt->bindParam(":surname", $_POST['surname']);
// $stmt->bindParam(":house", $_POST['house']);
// $stmt->bindParam(":year", $_POST['year']);
// $stmt->bindParam(":password", $_POST['passwd']);
// $stmt->bindParam(":gender", $_POST['gender']);
// $stmt->bindParam(":role", $role);

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity + :sandwichQu WHERE FoodID = :FoodID");
$stmt->bindParam(":FoodID", $_POST['sandwich']);
$stmt->bindParam(":sandwichQu", $_POST['sandwichQu']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity + :snackQu WHERE FoodID = :FoodID");
$stmt->bindParam(":FoodID", $_POST['snack']);
$stmt->bindParam(":snackQu", $_POST['snackQu']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity + :fruitQu WHERE FoodID = :FoodID");
$stmt->bindParam(":FoodID", $_POST['fruit']);
$stmt->bindParam(":fruitQu", $_POST['fruitQu']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = Quantity + :drinkQu WHERE FoodID = :FoodID");
$stmt->bindParam(":FoodID", $_POST['drink']);
$stmt->bindParam(":drinkQu", $_POST['drinkQu']);
$stmt->execute();

$stmt = $conn->prepare ("UPDATE stock SET Quantity = 0 WHERE FoodName = 'none'");
$stmt->execute();

$conn=null;

?>