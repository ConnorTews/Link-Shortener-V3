<?php
function linkgen() {
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
if (!isset($_POST['long_link_sub'])) {
  header("Location: ../?error=0dm3fk");
  exit();
}
if (empty($_POST['long_link_inp'])) {
  header("Location: ../error=gkd0vv");
  exit();
}
$longLink = $_POST['long_link_inp'];
$longLink = htmlspecialchars($longLink);
$longLink = stripslashes($longLink);

$counter = $_POST['click_count_check'];

$linkID = linkgen();

$config = require '../config.php';

if (!file_exists("../".$config['link_path'])) {
  mkdir("../".$config['link_path']);
}
// if ($counter === "on") {

// }
if (!file_exists("../".$config['link_path']."/".$linkID."/")) {
  mkdir("../".$config['link_path']."/".$linkID."/");
  
}