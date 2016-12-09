<?php 

$sql = "SELECT * FROM Schools";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);
