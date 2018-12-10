<!DOCTYPE html>
<html>
<head>
    <title>Subjects</title>
</head>
<body>
    <form action="addsubject.php" method="post">
    Subject:<input type="text" name="Subjectname"><br>
    Teacher:<input type="text" name="Teacher"><br>
    <input type="submit" value="Add Subject">
    </form>

<?php
include_once('connection.php');

$stmt = $conn->prepare("SELECT * FROM  tblsubjects");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Subjectname"].' - '.$row["Teacher"]."<br>");
}
?>

</body>
</html>