<?php
error_reporting(0);



function http($url,$headers =[], $geturl = false)
  {
    $ch = curl_init();
    $options = array(
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',
        CURLOPT_ENCODING       => "utf-8",
        CURLOPT_AUTOREFERER    => false,
        CURLOPT_REFERER        => 'https://www.tiktok.com/',
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_MAXREDIRS      => 10,
    );
    curl_setopt_array( $ch, $options );

    $data = curl_exec($ch);
    // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($geturl === true)
    {
        return curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    }
    curl_close($ch);
    return $data;
  }

function randomDevice($length = 18) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return '6'.$randomString;
}


function getVideoID($link){
  $res = http($link, [], true);

  return basename($res);
}

// function convertOffset(string $offset): string
// {
//     $sign = substr($offset, 0, 1) === '+' ? '-' : '+'; // switch sign
//     $minutes = (int)substr($offset, 1); // get int minutes
//     $hours = floor($minutes / 60); // whole hours
//     $restMinutes = $minutes - ($hours * 60);
//     return $sign->str_pad((string)$hours, 2, '0', STR_PAD_LEFT)->str_pad((string)$restMinutes, 2, '0', STR_PAD_LEFT);
// }

function convert($link){
  $videoId = getVideoID($link);
  $date = time() * 1000;
  $t = $date; //- convertOffset() * 60000;

  $params = http_build_query([
      'aweme_ids'=> '[' .$videoId . ']',
      'region'=> 'ID',
      'ts'=> floor($t / 1000),
      'timezone_name'=> 'Asia/Jakarta',
      'device_type'=> 'Redmi+4X',
      'iid'=> randomDevice(),
      'locale'=> 'id',
      'app_type'=> 'normal',
      'resolution'=> '1080*1920',
      'aid'=> '1180',
      'app_name'=> 'musical_ly',
      '_rticket'=> $t,
      'device_platform'=> 'android',
      'version_code'=> '100000',
      'dpi'=> '441',
      'cpu_support64'=> 'false',
      'sys_region'=> 'ID',
      'timezone_offset'=> '0',
      'device_id'=> randomDevice(),
      'pass-route'=> '1',
      'device_brand'=> 'google',
      'os_version'=> '8.0.0',
      'op_region'=> 'ID',
      'app_language'=> 'en',
      'pass-region'=> '1',
      'language'=> 'en',
      'channel'=> 'googleplay'
  ]);

  $res = http('https://api-t2.tiktokv.com/aweme/v1/multi/aweme/detail/?'.$params, []);


  return $res;
}


$videoTiktok = htmlspecialchars($_GET['url']);

header('Content-Type: application/json; charset=utf-8');

$container = [];
$data =  json_decode(convert($videoTiktok));

if($data->status_code == 0){
  $container['status'] = true;
  $container['without_watermark'] = $data->aweme_details[0]->video->play_addr->url_list[0];
  $container['original_video'] = $data->aweme_details[0]->video->download_addr->url_list[0];
  $container['music_only'] = $data->aweme_details[0]->video->play_url->url_list[0];

  $container['thumb'] = $data->aweme_details[0]->video->origin_cover->url_list[0];
  $container['desc'] = $data->aweme_details[0]->desc;
  $container['author'] = $data->aweme_details[0]->author->nickname;
}else{
  $container['status'] = false;
  $container['message'] = $data->status_msg;
}


echo json_encode($container);