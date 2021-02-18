<?php
function linkgen()
{
  $config = require '../config.php';
  $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
  $pass = array();
  $alphaLength = strlen($alphabet) - 1;
  for ($i = 0; $i < $config['rdm_link_lng']; $i++) {
    $n = rand(0, $alphaLength);
    $pass[] = $alphabet[$n];
  }
  return implode($pass);
}
$config = require '../config.php';
if (!isset($_POST['long_link_sub'])) {
  header("Location: ../?error=0dm3fk");
  exit();
}
if (empty($_POST['long_link_inp'])) {
  header("Location: ../error=gkd0vv");
  exit();
}
session_start();
if ($config['public_access'] === "false") {
  header("Location: ../?error=vdclssc");
  exit();
}
$longLink = $_POST['long_link_inp'];
// $longLink = htmlspecialchars($longLink);
// $longLink = stripslashes($longLink);

if (!empty($_POST['click_count_check'])) {
  $counter = $_POST['click_count_check'];
} else {
  $counter = null;
}

$linkID = linkgen();

$config = require '../config.php';

if (!file_exists("../" . $config['link_path'])) {
  mkdir("../" . $config['link_path']);
}
// if ($counter === "on") {

// }
if (!file_exists("../" . $config['link_path'] . "/" . $linkID . "/")) {
  mkdir("../" . $config['link_path'] . "/" . $linkID . "/");
} else {
  header("Location: ../error=dvmos0");
  exit();
}
$index = "../" . $config['link_path'] . "/" . $linkID . "/index.php";
$indexfile = fopen($index, "w") or die("Unable! vawWDAHD");
$link = $config['domain_name'] . '/' . $config['link_path'] . '/' . $linkID;
$indexcontent = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="refresh" content="0; url=' . $longLink . '/" />
  </head>
  <body></body>
</html>';
fwrite($indexfile, $indexcontent);
fclose($indexfile);

$data = "../" . $config['link_path'] . "/" . $linkID . "/data.php";
$datafile = fopen($data, "w") or die("Unable! vawWDAHD");
$link = $config['domain_name'] . '/' . $config['link_path'] . '/' . $linkID;
$datacontent = "
  <?php return [
    'id' => '" . $linkID . "',
    'long_link' => '" . $longLink . "',
    'short_link' => '" . $link . "'
  ];
  ";
fwrite($datafile, $datacontent);
fclose($datafile);

header("Location: ../?success");
exit();
