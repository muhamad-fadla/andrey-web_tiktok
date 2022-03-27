<?php
require 'libraries/ua.class.php';

require 'core/functions/options.php';
require 'core/functions/cache.php';
require 'core/functions/permalinks.php';
require 'core/functions/common.php';
require 'core/functions/site.php';

require 'core/classes/agc.php';

$site_title = str_replace( [ '%site_name%', '%domain%' ], [ get_option( 'site_name' ), $_SERVER['HTTP_HOST'] ], get_option( 'home_title' ) );
$meta_description = str_replace( [ '%site_name%', '%domain%' ], [ get_option( 'site_name' ), $_SERVER['HTTP_HOST'] ], get_option( 'home_description' ) );
$meta_robots = get_option( 'home_robots' );

require 'home-index.php';
?>