<?php
// Settings for Story
$recipient     = "Design Studio."; // add any punctuation here
$title         = "Design Portfolio by Slate Werner";
$description   = "Slected works for ".$recipient;
$published     = "June 2019";

$cover         = "
                My name is Slate and I’m a designer.<br>
                I’m trained in Industrial Design,
                and I’ve worked in design consulting, research, and
                high-tech manufacturing. I’m passionate about delivering experiences
                that delight, and shipping products that are beautiful
                from the inside out.<br><br>

                To take my career to the next level, I want to join the team at ".$recipient."
                and help build the next generation of great products.<br><br>


                All the best,<br><br>
                – Slate
                ";

// fixed page titles
$title_left    = "Studio Slate Werner";
$title_right   = "";
$bottom_left   = "";
$bottom_right  = "";

// preview image for social sharing
// default image: $preview_image = "../_system/covers/slate.jpg";
$preview_image = "../_system/covers/slate.jpg";

// _chapters
// FORMAT: "Chapter Title", "link to chapter", "URL friendly title"
$chapter_list  = array(
    array("-",                           "../_chapters/cover/page.php",     "cover"),
    array("Slate Werner",                "../_chapters/intro/page.php",     "introduction"),
    array("Experience",                  "../_chapters/cv/page.php",        "cv"),
    array("Eye Insert",                  "../_chapters/insert/page.php",    "insert"),
    array("Filiment Extension Atomizer", "../_chapters/parc_fea/page.php",  "fea"),
    array("Printed Electronics",         "../_chapters/pe/page.php",        "pe"),
    array("Spark",                       "../_chapters/spark/page.php",     "spark"),
    array("Thuma",                       "../_chapters/thuma/page.php",     "thuma"),
    array("Watch By Slate",              "../_chapters/watch/page.php",     "watch"),
    array("THX Alpha",                   "../_chapters/thx/page.php",       "thx"),
    array("Phonesoap GO",                "../_chapters/phonesoap/page.php", "phonesoap"),
    array("PAL",                         "../_chapters/pal/page.php",       "pal"),
    array("Contact",                     "../_chapters/contact/page.php",   "contact"),

);
$chapter_count = count($chapter_list);
?>
