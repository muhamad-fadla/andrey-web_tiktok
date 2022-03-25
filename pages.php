<?php
require 'libraries/ua.class.php';
require 'libraries/simple_html_dom.php';

require 'core/functions/options.php';
require 'core/functions/cache.php';
require 'core/functions/permalinks.php';
require 'core/functions/common.php';
require 'core/functions/site.php';

require 'core/classes/agc.php';

$data = agc()->get_pages();

$site_title = unique(str_replace( [ '%title%', '%site_name%', '%domain%' ], [ $data['title'], get_option( 'site_name' ), $_SERVER['HTTP_HOST'] ], get_option( 'page_title' ) ));
$meta_description = unique(str_replace( [ '%title%', '%site_name%', '%domain%' ], [ $data['title'], get_option( 'site_name' ), $_SERVER['HTTP_HOST'] ], get_option( 'page_description' ) ));
$meta_robots = get_option( 'page_robots' );

require 'themes/' . get_option( 'theme' ) . '/header.php';
require 'themes/' . get_option( 'theme' ) . '/pages.php';
require 'themes/' . get_option( 'theme' ) . '/footer.php';
?>