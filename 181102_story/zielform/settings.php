<?php
// Settings for Story for
$company       = "zielFORM";
$greeting      = "Hallo Clemens,";
$published     = "October 2018";
$first_name    = "Gustav";
$last_name     = "Moorhouse";
$name          = $first_name.' '.$last_name;
$title         = $name." for ".$company;
$description   = "A curated portfolio of recent work prepared for ".$company;
$portfolio_dl  = "https://moor.house/files/moorhouse_portfolio_zielform.pdf";
$cv_dl		   = "https://moor.house/files/moorhouse_lebenslauf.pdf";

// _chapters
// FORMAT: "Chapter Title", "link to chapter", "URL friendly title"
$chapter_list  = array(
    array($name." | ".$published, "../_chapters/intro/page.php", "intro"),
    array("Better Baby Food", "../_chapters/babyfood/page.php", "babyfood"),
    array("Brand Strategy for Help Remedies", "../_chapters/help/page.php", "help"),
    array("Loft Shower", "../_chapters/loftshower/page.php", "loftshower"),
    array("Recontextualised Radio", "../_chapters/radio/page.php", "radio"),
    array("The Art of Mirroring", "../_chapters/mirror/page.php", "mirror"),
    array("(Quasi) Voronoi Chair", "../_chapters/voronoi/page.php", "voronoi"),
    array("Contact", "../_chapters/contact/page.php", "contact"),

);
$chapter_count = count($chapter_list);
$id			   = $chapter_list[$i][2];
?>
