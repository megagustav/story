<?php
// Settings for Story for
$company       = "Bain & Company";
$greeting      = "Hello ".$company.",";
$published     = "October 2018";
$first_name    = "Gustav";
$last_name     = "Moorhouse";
$name          = $first_name.' '.$last_name;
$title         = $name." for ".$company;
$description   = "A curated portfolio of recent work prepared for ".$company;

// _chapters
// FORMAT: "Chapter Title", "link to chapter", "URL friendly title"
$chapter_list  = array(
    array($name." | ".$published, "../_chapters/intro/page.php", "intro"),
    array("Deutsche Bahn UI/UX", "../_chapters/deutschebahn/page.php", "deutschebahn"),
    array("The Art of Mirroring", "../_chapters/mirror/page.php", "mirror"),
    array("Brand Strategy for Help Remedies", "../_chapters/help/page.php", "help"),
    array("Made in Brunel", "../_chapters/madeinbrunel/page.php", "madeinbrunel"),
    array("Recontextualised Radio", "../_chapters/radio/page.php", "radio"),
    array("(Quasi) Voronoi Chair", "../_chapters/voronoi/page.php", "voronoi"),
    array("Contact", "../_chapters/contact/page.php", "contact"),

);
$chapter_count = count($chapter_list);
?>
