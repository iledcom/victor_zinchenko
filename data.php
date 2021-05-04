<?php

require_once 'classes.php';

$publications = array();

/*
$article1 = new ArticlePublication;
$article2 = new ArticlePublication;
$photo1 = new PhotoReportPublication;
$photo2 = new PhotoReportPublication;
$photo3 = new PhotoReportPublication;

$publications = array($news1, $news2, $article1, $photo1);
*/

$connect = mysqli_connect("localhost", "root", "", "zinchenko");

if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//make query
$result = mysqli_query($connect, "SELECT * FROM article");

//work with results
while($row = mysqli_fetch_array($result)) {
	$publications[] = new $row['type']($row);
}




