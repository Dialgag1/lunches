<?php

header('Location: refillstockFORM.php');
array_map("htmlspecialchars", $_POST);
include_once("lunchconnection.php");

?>