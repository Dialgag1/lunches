<!DOCTYPE html>
<html>
<head>
    <title>Lunch Ordering System</title>
</head>
<body>
    <!-- Please input the information below.<br> -->
    <form action="addorder.php" method="post">
    <!-- First name:<input type = "text" name = "forename"><br>
    Last name:<input type = "text" name = "surname"><br>
    House:<input type = "text" name = "house"><br>
    Email:<input type = "text" name = "email"><br><br> -->
    Now order your food!<br>
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
        Date: <input type = "date" name = "Date"><br>

    <input type="submit" value="Order lunch">
    </form>

    <br>
    <h3>Below is the food in stock.</h3>
<?php
include_once('lunchconnection.php');
$stmt = $conn->prepare("SELECT * FROM  stock WHERE FoodName != 'none' AND Quantity >= 0");
$stmt->execute();

echo("<u>Sandwiches</u><br>");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
        if ($row["FoodID"] == 1){
                echo("Ham and Cheese"."<br>");
        } elseif ($row["FoodID"] == 2){
                echo("Peanut Butter and Jelly"."<br>");
        } elseif ($row["FoodID"] == 3){
                echo("Tomato and Lettuce"."<br>");
        } elseif ($row["FoodID"] == 4){
                echo("Club"."<br>");
        }
}

echo("<br><u>Snacks</u><br>");

$stmt = $conn->prepare("SELECT * FROM  stock WHERE FoodName != 'none' AND Quantity >= 0");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
        if ($row["FoodID"] == 5){
                echo("Crisps"."<br>");
        } elseif ($row["FoodID"] == 6){
                echo("Oreo"."<br>");
        } elseif ($row["FoodID"] == 7){
                echo("Garlic Bread"."<br>");
        } elseif ($row["FoodID"] == 8){
                echo("Chocolate"."<br>");
        }
}

echo("<br><u>Fruits</u><br>");

$stmt = $conn->prepare("SELECT * FROM  stock WHERE FoodName != 'none' AND Quantity >= 0");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
        if ($row["FoodID"] == 9){
                echo("Pear"."<br>");
        } elseif ($row["FoodID"] == 10){
                echo("Apple"."<br>");
        } elseif ($row["FoodID"] == 11){
                echo("Banana"."<br>");
        } elseif ($row["FoodID"] == 12){
                echo("Orange"."<br>");
        }
}

echo("<br><u>Drinks</u><br>");

$stmt = $conn->prepare("SELECT * FROM  stock WHERE FoodName != 'none' AND Quantity >= 0");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
        if ($row["FoodID"] == 13){
                echo("Water"."<br>");
        } elseif ($row["FoodID"] == 14){
                echo("Apple Juice"."<br>");
        } elseif ($row["FoodID"] == 15){
                echo("Orange Juice"."<br>");
        } elseif ($row["FoodID"] == 16){
                echo("Grape Juice"."<br>");
        }
}
?>

</body>
</html>