<?php 

$sql = "DELETE FROM `schools` WHERE id=$id";
// echo $sql;
$mysqli->query($sql);

header("Location: ?action=admin");
