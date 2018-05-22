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
$analytics     = "UA-119678562-1"; //Your Google Analytics code for this company

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

// Project Folder Name
// $project_1 doesn't have to be the first folder in the /projects directory
$intro_url     = "../projects/introduction";
$project_1_url = "../projects/contextual";
$project_2_url = "../projects/shift";
$project_3_url = "../projects/humans";
$project_4_url = "../projects/transport";
$project_5_url = "../projects/upcycling";
$project_6_url = "";
$project_7_url = "";
$project_8_url = "";
$contact_url   = "../projects/contact";

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
?>

<title><?php echo($description) ?></title>
<meta name="description" content="<?php echo($description) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="nofollow" />
<link rel="stylesheet" href="../system/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-KwxQKNj2D0XKEW5O/Y6haRH39PE/xry8SAoLbpbCMraqlX7kUP6KHOnrlrtvuJLR" crossorigin="anonymous">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119678562-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $analytics ?>');
</script>


<link rel="stylesheet" href="../system/css/style.css">
<script src="../system/js/smooth-scroll.min.js"></script>
<script src="../system/js/gumshoe.min.js"></script>
<script src="../system/js/anime.min.js"></script>
