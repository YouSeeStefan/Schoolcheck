<?php


$sql = "SELECT * FROM schools";

$articles = $mysqli->query($sql);

// var_dump($articles);


$total_number_articles = $articles->num_rows;

$total_number_articles = ceil($total_number_articles / NR_ITEMS_PER_PAGE);

// echo $total_number_articles;