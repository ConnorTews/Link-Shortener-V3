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
            <a href="'.$metaData['long_link'].'">
              <input type="text" name="longlink" id="longlink" value="'.$metaData['long_link'].'" />
            </a>
          </td>
          <td>
            <a href="'.$metaData['short_link'].'">
              <input type="text" name="shortlink" id="shortlink_'.$metaData['id'].'" value="'.$metaData['short_link'].'/" />
            </a>
          </td>
          <td class="clicks">';
            if (file_exists($metaLink."click.php")) {
              // echo = $click['clicks'];
              echo "PlaceHolder";
            } else {
              echo "0";
            }
          echo '</td>
          <td>
            <button class="copy" type="button" class="copy" onclick="short_copy_'.$metaData['id'].'()" name="copy">
              <i data-feather="copy"></i>
            </button>
            <script>
              function short_copy_'.$metaData['id'].'() {
                var cpytxt_'.$metaData['id'].' = document.getElementById("shortlink_'.$metaData['id'].'");
                cpytxt_'.$metaData['id'].'.select();
                cpytxt_'.$metaData['id'].'.setSelectionRange(0, 99999)
                document.execCommand("copy");
                alert("Copied short url " + cpytxt.value);
              }
            </script>
          </td>
          <td>
            <form action="./core/deletelink.inc.php" method="post">
              <input type="hidden" name="linkid" value="'.$metaData['id'].'">
              <button type="delete" class="delete" name="delete_link">
                <i data-feather="x"></i>
              </button>
            </form>
          </td>
        </tr>
  ';
}
