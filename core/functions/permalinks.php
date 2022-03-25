<?php
function download_permalink( $id ) {
  $full_slug = str_replace( '%id%', $id, get_option( 'download_permalink' ) );
  return site_url() . '/' . $full_slug;
}

function page_permalink( $slug ) {
  $full_slug = str_replace( '%slug%', $slug, get_option( 'page_permalink' ) );
  return site_url() . '/' . $full_slug;
}

function sitemap_permalink() {
  return site_url() . '/' . get_option( 'sitemap_permalink' );
}
