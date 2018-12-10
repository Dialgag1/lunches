<!DOCTYPE html>
<html>
<head>
    <title>Stock Refill</title>
</head>
<body>
    Use this form to add more food to the system.<br>
    <form action="refillstock.php" method="post">
    Sandwich:<select name="sandwich">
<?php
        include_once("lunchconnection.php");
        $stmt = $conn->prepare("SELECT * FROM stock WHERE category='sandwich' OR category='none' ORDER BY FoodName ASC;");
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo("<option value=".'"'.$row["FoodID"].'">'.$row["FoodName"]."</option>");
        }
?>
        </select>
            <br>
            Add how many to stock?(Minimum 0) <input type = "number" name = "sandwichQu" min = "0"><br><br>

    Snack:<select name="snack">
<?php
        include_once("lunchconnection.php");
        $stmt = $conn->prepare("SELECT * FROM stock WHERE category='snack' OR category='none' ORDER BY FoodName ASC;");
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo("<option value=".'"'.$row["FoodID"].'">'.$row["FoodName"]."</option>");
        }
?>
            </select>
            <br>
            Add how many to stock?(Minimum 0) <input type = "number" name = "snackQu" min = "0"><br><br>

    Fruit:<select name="fruit">
<?php
        include_once("lunchconnection.php");
        $stmt = $conn->prepare("SELECT * FROM stock WHERE category='fruit' OR category='none' ORDER BY FoodName ASC;");
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo("<option value=".'"'.$row["FoodID"].'">'.$row["FoodName"]."</option>");
        }
?>
            </select>
            <br>
            Add how many to stock?(Minimum 0) <input type = "number" name = "fruitQu" min = "0"><br><br>
            
    Drink:<select name="drink">
<?php
        include_once("lunchconnection.php");
        $stmt = $conn->prepare("SELECT * FROM stock WHERE category='drink' OR category='none' ORDER BY FoodName ASC;");
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo("<option value=".'"'.$row["FoodID"].'">'.$row["FoodName"]."</option>");
        }
?>
            </select>
            <br>
            Add how many to stock?(Minimum 0) <input type = "number" name = "drinkQu" min = "0"><br><br>

    <input type="submit" value="Refill stock">
    </form>

    <br>
<h3>Below is the kitchen's stock.</h3>
<?php
include_once('lunchconnection.php');
$stmt = $conn->prepare("SELECT * FROM  stock WHERE FoodName != 'none'");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["FoodName"].' : '.$row["Quantity"]."<br>");
}
?>

</body>
</html>