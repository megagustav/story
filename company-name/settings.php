<?php
// Settings for Story for
$company       = "Lorem Ipsum";
$greeting      = "Hello ".$company.",";
$published     = "October 2018";
$first_name    = "Julius";
$last_name     = "Cesar";
$name          = $first_name.' '.$last_name;
$title         = $name." for ".$company;
$description   = "A curated portfolio of recent work prepared for ".$company;

// _chapters
// FORMAT: "Chapter Title", "link to chapter", "URL friendly title"
$chapter_list  = array(
    array($name." | ".$published, "../_chapters/intro/page.php", "intro"),
    array("Lorem Ipsum Domor", "../_chapters/lorem/page.php", "lorem"),
    array("Erupto Pompeii", "../_chapters/ipsum/page.php", "ipsum"),
    array("Contact", "../_chapters/contact/page.php", "contact"),

);
$chapter_count = count($chapter_list);
$id			   = $chapter_list[$i][2];
?>
