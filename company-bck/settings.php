<?php
// Settings for Story for
$company       = "Company Name";
$greeting      = "Hello Anton";
$published     = "July 2018";

// Instructions
$first_name    = "Gustav";
$last_name     = "Moorhouse";
$name          = $first_name.' '.$last_name;
$for           = "Portfolio for ".$company;
$description   = $name." — ".$for;

// Chapters
// FORMAT: "Chapter Title", "link to chapter", "URL friendly title"
$chapter_list  = array(
    array("Gustav Moorhouse",   "../portfolio/intro/page.php", "intro"),
    array("Better Baby Food",   "../portfolio/babyfood/page.php", "babyfood"),
    array("Chapter Three", "../portfolio/chapter3/page.php", "chapterthree"),
    array("Chapter Four",  "../portfolio/chapter4/page.php", "chapterfour"),
    array("Chapter Five",  "../portfolio/chapter5/page.php", "chapterfive"),
);
$chapter_count = count($chapter_list);
?>
