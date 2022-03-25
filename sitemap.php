<?php
require 'core/functions/options.php';
require 'core/functions/permalinks.php';
require 'core/functions/common.php';
  
  header( "Content-Type: application/xml" );

  echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
  echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

  echo '
  	<url>
  		<loc>' . site_url() . '</loc>
  		<changefreq>daily</changefreq>
  		<priority>0.6</priority>
  	</url>' . "\n";

    if ( get_option( 'use_default_keyword_files' ) && file_exists( BASE . '/store/default/inject' ) ) {
      $keyword_file = BASE . '/store/default/pages';
    } elseif ( file_exists( store_dir() . '/pages' ) ) {
      $keyword_file = store_dir() . '/pages';
    }
	chdir($keyword_file);
	array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_ASC, $files);
    if ( isset( $files ) ) {

        	foreach( $files as $filename ) {
			$item = json_decode( file_get_contents( $filename ), true );
        		echo '
        			<url>
        				<loc>' . page_permalink( $item['slug'] ) . '</loc>
        				<changefreq>daily</changefreq>
        				<priority>0.6</priority>
        			</url>
        		' . "\n";
        	}
    }

  echo '</urlset>';
