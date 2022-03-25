<?php
if ( file_exists( 'config/' . $_SERVER['HTTP_HOST'] . '/config.json' ) ) {
$cache_file = 'config/' . $_SERVER['HTTP_HOST'] . '/config.json';
}else{
$cache_file = 'config/default/config.json';
}
$cache = json_decode( file_get_contents( $cache_file ), true );
return [
  'site_name' => ''.$cache['site_name'].'',
  'site_tagline' => ''.$cache['site_tagline'].'',
  'google_verify' => ''.$cache['google_verify'].'',
  'home_title' => ''.$cache['home_title'].'',
  'home_description' => ''.$cache['home_description'].'',
  'home_robots' => ''.$cache['home_robots'].'',
  'page_title' => ''.$cache['page_title'].'',
  'page_description' => ''.$cache['page_description'].'',
  'page_robots' => ''.$cache['page_robots'].'',
  'theme' => ''.$cache['theme'].'',
  'color' => ''.$cache['color'].'',
  'download_permalink' => ''.$cache['download_permalink'].'',
  'page_permalink' => ''.$cache['page_permalink'].'',
  'sitemap_index_permalink' => ''.$cache['sitemap_index_permalink'].'',
  'footer_copyright' => ''.$cache['footer_copyright'].''
];