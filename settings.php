<?php
// Settings for Story for
$company       = "Detekt";
$greeting      = "Hello Anton";
$published     = "June 2018";

// Instructions
$first_name    = "Gustav";
$last_name     = "Moorhouse";
$name          = $first_name.' '.$last_name;
$description   = $name." — Portfolio for ".$company;
$showNumbers   = True; //Show Numbers before Project Titles
$hideSide      = True; //Hide Side Nav

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

$project_1_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_1));
$project_2_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_2));
$project_3_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_3));
$project_4_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_4));
$project_5_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_5));
$project_6_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_6));
$project_7_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_7));
$project_8_nav = strtolower(str_replace(str_split('\\/:*?"<>|-–— '), '', $project_8));

// HTML Header Info
?>

<title><?php echo($description) ?></title>
<meta name="description" content="<?php echo($description) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="nofollow" />
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-KwxQKNj2D0XKEW5O/Y6haRH39PE/xry8SAoLbpbCMraqlX7kUP6KHOnrlrtvuJLR" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="js/smooth-scroll.min.js"></script>
<script src="js/gumshoe.min.js"></script>
<script src="js/anime.min.js"></script>
