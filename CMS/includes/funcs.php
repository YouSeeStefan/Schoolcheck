<?php

function convertResultToArray($DBResult){
    $resultArray = array();
    
    while($row = $DBResult->fetch_assoc()){
        $resultArray[] = $row;
    }
    return $resultArray;
}