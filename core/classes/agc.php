<?php
class AGC {

  public function get_download() {
    global $route;

    $id = $route['vars'][0];
  }
	
  public function get_pages() {
    global $route;
    $url = $route['vars'][0];
	$cache_file = get_page_path() . '/' . md5( $url ) .'.json';
	if ( file_exists( $cache_file ) ) {
	  $cache_data = json_decode( file_get_contents( $cache_file ), true );
	}
	$data['title'] = $cache_data['title'];
	$data['url'] = $cache_data['url'];
	$data['text'] = $cache_data['text'];
	return ( isset( $data ) ) ? $data : [];
  }

  private function curl( $url, $referer = '' ) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $ua = new UA;
    $ch = curl_init();

  	curl_setopt( $ch, CURLOPT_URL, $url );
  	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_ENCODING, "gzip,deflate" );
    curl_setopt( $ch, CURLOPT_USERAGENT, $ua->get_ua() );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
  	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );

    if ( $referer ) {
      curl_setopt( $ch, CURLOPT_REFERER, $referer );
    }

    curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
  	curl_setopt( $ch, CURLOPT_HTTPHEADER, [ "Accept-Language: en-US;q=0.6,en;q=0.4", "REMOTE_ADDR: $ip", "HTTP_X_FORWARDED_FOR: $ip" ] );

    $data = curl_exec( $ch );
  	$info = curl_getinfo( $ch );

  	curl_close( $ch );

  	return [ 'info' => $info, 'data' => $data ];
  }

  private function mytime( $time ){
    $start = new DateTime( '@0' );
    $start->add( new DateInterval( $time ) );
    return $start->format( 'i:s' );
  }
}

function agc() {
  return new AGC;
}
