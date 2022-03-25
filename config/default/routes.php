<?php
return [
  '/' => [ 'name' => 'home', 'file' => 'home.php' ],
  'download/' => [ 'name' => 'download', 'file' => 'download.php' ],
  'page/([^/!#$&*()+={}\[\]|;,]+)' => [ 'name' => 'pages', 'file' => 'pages.php' ],
  'sitemap.xml' => [ 'name' => 'sitemap-index', 'file' => 'sitemap.php' ]
];
