<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "duwmxemx", "schoolcheck");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$streetname = mysqli_real_escape_string($link, $_POST['streetname']);
$streetnumber = mysqli_real_escape_string($link, $_POST['streetnumber']);
$zipcode = mysqli_real_escape_string($link, $_POST['zipcode']);
$district = mysqli_real_escape_string($link, $_POST['district']);
$telnr = mysqli_real_escape_string($link, $_POST['telnr']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$website = mysqli_real_escape_string($link, $_POST['website']);
$openday = mysqli_real_escape_string($link, $_POST['openday']);
$infonight = mysqli_real_escape_string($link, $_POST['infonight']);
$openclass = mysqli_real_escape_string($link, $_POST['openclass']);
$concept = mysqli_real_escape_string($link, $_POST['concept']);
 
// attempt insert query execution
$sql = "INSERT INTO schools (name, streetname, streetnumber, zipcode, district, telnr, email, website, openday, infonight, openclass, concept) VALUES ('$name', '$streetname', '$streetnumber', '$zipcode', '$district', '$telnr', '$email', '$website', '$openday', '$infonight', '$openclass', '$concept')";
if(mysqli_query($link, $sql)){
    header("Location: ../?action=admin");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>