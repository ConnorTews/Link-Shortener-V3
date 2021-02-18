<?php
$config = require './config.php';
$path = $config['link_path'].'/';
$path = $path . "*";
$fileList = glob($path);
foreach ($fileList as $filename) {
  $metaLink = './'.$filename.'/';
  $metaData = include $metaLink.'data.php';
  echo  '
        <tr>
          <td>
            <a href="https://connort.com/Loremipsumdolorsitametconsectetur">
              <input type="text" name="longlink" id="longlink" value="https://connort.com/Loremipsumdolorsitametconsectetur" />
            </a>
          </td>
          <td>
            <a href="https://connort.com/d0v0am">
              <input type="text" name="shortlink" id="shortlink" value="https://connort.com/d0v0am" />
            </a>
          </td>
          <td class="clicks">
            0
          </td>
          <td>
            <button class="copy" type="button" class="copy" onclick="short_copy_REPLACE()" name="copy">
              <i data-feather="copy"></i>
            </button>
            <script>
              function short_copy_REPLACE() {
                var cpytxt = document.getElementById("shortlink");
                cpytxt.select();
                cpytxt.setSelectionRange(0, 99999);
                document.execCommand("copy");
                alert("Copied short url " + cpytxt.value);
              }
            </script>
          </td>
          <td>
            <form action="" method="post">
              <button type="delete" class="delete" name="delete">
                <i data-feather="x"></i>
              </button>
            </form>
          </td>
        </tr>
  ';
}
