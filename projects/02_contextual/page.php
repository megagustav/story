<?php


// Project Title
// Displays left of content
$project_title  = $project_1;

// Spread Titles
// Displays right of content
$spread_1       = ++$p1.". Introduction";
$spread_2       = ++$p1.". Research";
$spread_3       = ++$p1.". Users";
$spread_4       = ++$p1.". Conclusion";

// Smart URLs
// Leave this alone
$url            = (dirname(__FILE__));
$trim           = end(explode('html',$url));
$url            = $trim;
	
include("spread_1.php");
include("spread_2.php");
include("spread_3.php");
include("spread_4.php");

?>
