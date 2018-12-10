<!DOCTYPE HTML>
<html>
<head>
    <title>Class Manager</title>
</head>
<body>

    <select name = "student">
    <?php
    include_once('connection.php');
    $stmt = $conn->prepare("SELECT * FROMTblUser WHERE Role = 0 ORDER BY Surname ASC");
    $stmt->execute();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
    }
    ?>
    </select>


</body>
</html>