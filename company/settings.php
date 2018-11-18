<?php
// Settings for Story for
$company       = "Company Name";
$greeting      = "Hello Anton";
$published     = "October 2018";

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
    array("Lorem Ipsum Dolor",   "../portfolio/lorem/page.php", "lorem"),
    array("Dolor Sit Amet", "../portfolio/ipsum/page.php", "ipsum"),
    array("Contact",  "../portfolio/chapter4/contact.php", "contact"),
);
$chapter_count = count($chapter_list);
?>
