<?php
require 'config/init.php';

require 'core/functions/options.php';
require 'core/functions/cache.php';
require 'core/functions/permalinks.php';
require 'core/functions/common.php';
require 'core/functions/site.php';

require 'core/classes/agc.php';

  $site_title = 'Downloading ...';
  $meta_description = 'Downloading video tiktok without watermark';
  $meta_robots = 'nofollow,noindex';

require 'themes/' . get_option( 'theme' ) . '/header.php';
require 'themes/' . get_option( 'theme' ) . '/download.php';
require 'themes/' . get_option( 'theme' ) . '/footer.php';
?>
