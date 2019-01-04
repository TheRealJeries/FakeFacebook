<?php
  $blacklist = ['hello'];
  array_push($blacklist, 'kaspersky.com',
              'phishtank.com', 'google.com/safe-browsing/search');

  function check_url() {
    global $blacklist;
    if (isset($_SERVER['HTTP_REFERER'])) {
      return !(in_array(parse_URL($_SERVER['HTTP_REFERER'], PHP_URL_HOST), $blacklist));
    } else {
      return true;
    }
  }

 ?>
