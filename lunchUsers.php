<!DOCTYPE html>
<html>
<head>
    <title>Lunch User Login</title>
</head>
<body>
<h3>Add a user below.</h3>
    <form action="addLunchUser.php" method="post">
    First name:<input type = "text" name = "forename"><br>
    Last name:<input type = "text" name = "surname"><br>
    House:<input type = "text" name = "house"><br>
    Email:<input type = "text" name = "email"><br>
    Password:<input type = "password" name = "password"><br><br>
    <input type = "submit" value = "Add user">
    </form>

<h3>Delete a user below.</h3>
    <form action="deleteLunchUser.php" method="post">
    UserID:<input type = "text" name = "UserID"><br><br>
    <input type = "submit" value = "Delete user">
    </form>
    
<h3>Below is the list of created users.</h3>
<?php
include_once('lunchconnection.php');
$stmt = $conn->prepare("SELECT * FROM pupils WHERE email IS NOT NULL");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo("ID ".$row["UserID"]." - ".$row["email"]."<br>");
}
?>

</body>
</html>