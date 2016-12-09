<?php 

$sql = "SELECT * FROM schools WHERE id= " .$id;
// echo $sql;

$result = $mysqli->query($sql);

$result = convertResultToArray($result);