<?php
$config = require '../config.php';

echo $_POST['linkid'];

$id = $_POST['linkid'];

$dir = "../" . $config['link_path'] . "/" . $id . "/";

$data = require $dir . "data.php";

$indexFile = $dir . "index.php";
$dataFile = $dir . "data.php";

if ($config['backup'] === "true") {
  if (!file_exists("../backups/")) {
    mkdir("../backups");
  }
  $backuppath = "../backups/" . $id . ".txt";
  $backup = fopen($backuppath, "w") or die("Unable! vawWDAHD");
  $backupcontent = '
    id = ' . $data['id'] . '
    longlink = ' . $data['long_link'] . '
    shortlink = ' . $data['short_link'];
  fwrite($backup, $backupcontent);
  fclose($backup);
}

unlink($indexFile);
unlink($dataFile);
rmdir($dir);

header("Location: ../");
exit();
