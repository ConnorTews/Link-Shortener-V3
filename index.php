<?php
$config = require 'config.php';
if ($config['public_access'] === 'false') {
  echo 'error no access';
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $config['page_name']; ?></title>
  <meta name="description" content="Linkshortener, Link, Shortener" />
  <link rel="manifest" href="manifest.json" />
  <link rel="apple-touch-icon" href="icons/apple-icon-180.png" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2048-2732.jpg" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2732-2048.jpg" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1668-2388.jpg" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2388-1668.jpg" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1536-2048.jpg" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2048-1536.jpg" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1668-2224.jpg" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2224-1668.jpg" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1620-2160.jpg" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2160-1620.jpg" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1284-2778.jpg" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2778-1284.jpg" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1170-2532.jpg" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2532-1170.jpg" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1125-2436.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2436-1125.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1242-2688.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2688-1242.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-828-1792.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1792-828.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1242-2208.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-2208-1242.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-750-1334.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1334-750.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-640-1136.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
  <link rel="apple-touch-startup-image" href="icons/apple-splash-1136-640.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $config['domain_name']; ?>">
  <meta property="og:title" content="<?php echo $config['page_name'];?>">
  <meta property="og:description" content="Linkshortener, Link, Shortener">
  <meta property="og:image" content="favicon.ico">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo $config['domain_name'];?>">
  <meta property="twitter:title" content="<?php echo $config['page_name'];?>">
  <meta property="twitter:description" content="Linkshortener, Link, Shortener">
  <meta property="twitter:image" content="favicon.ico">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/index.min.css" />
  <!-- PLugins -->
  <link rel="stylesheet" href="node_modules/animate.css/animate.min.css" />
  <link rel="stylesheet" href="node_modules/venobox/venobox/venobox.min.css" />
  <script src="node_modules/feather-icons/dist/feather.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script>
    if ("serviceWorker" in navigator) {
      window.addEventListener("load", () => {
        navigator.serviceWorker.register("/service-worker.js");
      });
    }
    $(function() {
      if (document.cookie.indexOf("url_pref") >= 0) {
        console.log("");
      } else {
        var cookieExp = new Date();
        cookieExp.setTime(cookieExp.getTime() + 8 * 3600 * 1000);
        document.cookie = "url_perf=1; expores=" + cookieExp.toGMTString();
        localStorage.setItem("url_pref", 1);
        document.getElementsByName("long_link_inp")[0].placeholder = "URL...";
      }
    });

    function url_pref() {
      if (typeof Storage !== "undefined") {
        if (localStorage.url_pref == 0) {
          document.getElementsByName("long_link_inp")[0].placeholder =
            "URL...";
          localStorage.url_pref = 1;
        } else {
          document.getElementsByName("long_link_inp")[0].placeholder =
            "url...";
          localStorage.url_pref = 0;
        }
      }
    }
  </script>
</head>

<body>
  <div class="home_page_content">
    <div class="home_title">
      <h1><?php echo $config['page_name']; ?></h1>
    </div>
    <div class="add_button">
      <button type="button" onclick="new_link()">
        <i data-feather="plus"></i>
      </button>
      <script>
        function new_link() {
          var new_link = document.getElementById("new_link_form");
          new_link.classList.toggle("new_link_form");
          new_link.classList.toggle("none");
        }
      </script>
    </div>
    <div class="mini_nav_area">
      <div class="mini_nav_item">
        <a href="./signin">Sign in</a>
      </div>
      <?php
      if ($config['new_users'] === 'true') {
        echo '<div class="mini_nav_item">
        <a href="./signup">Sign up</a>
      </div>';
      }
      ?>

      <div class="mini_nav_item">
        <a href="./signout">Sign out</a>
      </div>

    </div>
    <div class="home_main_content">
      <table>
        <tr>
          <th>Long Link</th>
          <th>Short Link</th>
          <th>Clicks</th>
          <th>Copy</th>
          <th>Delete</th>
        </tr>
        <?php require './core/link_list.inc.php';?>
      </table>
    </div>
  </div>
  <div class="none" id="new_link_form">
    <i data-feather="x" onclick="new_link()"></i>
    <form action="./core/createlink.inc.php" method="post">
      <input type="url" name="long_link_inp" id="long_link_inp" placeholder="" autocomplete="false" />
      <div class="click_count_check">
        <input type="checkbox" name="click_count_check" />
        <span>Count clicks</span>
      </div>
      <button type="submit" name="long_link_sub">Shorten</button>
    </form>
  </div>
  <footer>
    <div class="settings">
      <button type="button" onclick="url_pref()">
        <i data-feather="settings"></i>
      </button>
      <span>Change url format</span>
    </div>
  </footer>
  <script src="node_modules/venobox/venobox/venobox.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".venobox").venobox();
    });
    feather.replace();
  </script>
</body>

</html>