<?php
if (!empty($_GET['p']))
  $page = $_GET['p'];
if (empty($page))
//  $page = "startsida";
  $page = "underConstruction";

$page = 'content/' . $page . '.php';

if (!(file_exists($page))) {
  require_once("content/errors/404_NotFound.html");
  die();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Valberedningen - Ungdom Mot Rasism</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width: 481px)" />
    <link rel="stylesheet" type="text/css" href="css/phone.css" media="only screen and (max-width: 480px)" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/desktop.css" media="all" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <?php
      // Checks if host server is online or not.
      if(checkdnsrr("googleapis.com", "ANY")) { 
    ?> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <?php } else { ?>
    <script src="js/jquery/jquery-1.9.1.min.js"></script>
    <script src="js/jquery/jquery-ui.min.js"></script>
    <?php } ?>
    <script src="js/UIModule.js"></script>
    <script src="js/Controller.js"></script>
    <meta charset="windows-1252" />
    <meta http-equiv="refresh" content="3;url=http://www.umr.nu/om-umr/valberedningen/" />
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    <meta name="robots" content="all">
    <meta name="description" content="Valberedningen - Ungdom Mot Rasism" />
    <meta name="keywords" content="ungdom mot rasism, ungdom, mot, rasism, val, valberedning, valberedningen, rasism, rasismen, ras, främlingsfientlighet, främlingsfientlig, sverige, sveriges, invandrare, invandring, demokrati, mångfald, jämnställdhet, jämnställd, jämnlikhet, jämnlik, ideell, organisation" />
    <meta name="author" content="Stellan Lindell" />
    <?php require_once 'analyticstracking.php'; ?>
  </head>
  <body>
    <?php
    require_once($page);
    ?>
  </body>
</html>