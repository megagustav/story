<?php
	
// Settings for Story for
$company       = "Detekt";
$greeting      = "Hello Anton";
$published     = "June 2018";

// Instructions
$first_name    = "Gustav";
$last_name     = "Moorhouse";
$name          = $first_name.' '.$last_name;
$for           = "Portfolio for ".$company;
$description   = $name." — ".$for;
$showNumbers   = True; //Show Numbers before Project Titles
$hideSide      = True; //Hide Side Nav

// Project Folder Name
// $project_1 doesn't have to be the first folder in the /projects directory
$intro_url     = "../projects/00_introduction";
$project_1_url = "../projects/02_contextual";
$project_2_url = "../projects/04_shift";
$project_3_url = "../projects/03_humans";
$project_4_url = "../projects/05_transport";
$project_5_url = "../projects/06_upcycling";
$project_6_url = "";
$project_7_url = "";
$project_8_url = "";
$contact_url   = "../projects/99_contact";

// Project Titles
$intro         = "Introduction";
$project_1     = "Contextual";
$project_2     = "Digital / Physical";
$project_3     = "Human Factors";
$project_4     = "Transportation";
$project_5     = "Upcycling";
$project_6     = "";
$project_7     = "";
$project_8     = "";
$contact       = "Contact";

// leave things below this line alone unless you know what you're doing

















// reformat project titles to be URL friendly
// if you have more than 8 projects, just duplicate and rename a few lines
$project_1_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_1));
$project_2_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_2));
$project_3_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_3));
$project_4_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_4));
$project_5_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_5));
$project_6_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_6));
$project_7_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_7));
$project_8_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_8));

// HTML <Head> content