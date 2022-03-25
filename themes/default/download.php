<section class="w-full mx-auto" style="background:#<?php echo get_option( 'color' ); ?>">
<div class="max-w-7xl mx-auto justify-center px-4 py-2">
<form id="form" class="max-w-full md:shadow md:max-w-2xl mx-auto md:flex md:border-8 border-white hover:shadow-lg md:rounded-lg md:bg-white" action="<?php echo download_permalink(''); ?>" method="post">
<input id="url" name="url" type="text" value="<?php echo $_POST['url'];?>" data-rules="[&quot;required&quot;,&quot;minimum:8&quot;]" class="url w-full md:w-9/12 flex-grow p-2 mb-2 md:mb-0 focus:outline-none rounded-lg text-md">
<button class="w-full appearance-none text-white font-semibold rounded-lg md:rounded-r-lg text-md md:w-3/12 px-2 py-2 bg-gradient-to-tl from-blue-400 to-blue-600  hover:blue-500 hover:text-white focus:outline-none" type="submit" id="submit">Download
</button>
</form>
<div id="ivalidstatus" class="emsg hidden bg-red-600 text-white max-w-2xl mx-auto mt-2 rounded-md shadow-xl flex flex-row overflow-hidden">
<div class="w-16 py-6  bg-red-900">
<svg class="max-h-10 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
</div>
<div class="w-full flex flex-col justify-center pl-6" data-nosnippet="">
<p class="font-bold text-lg">Caution!</p>
<p>Unsupported Link!</p>
<p>Please insert only the video link</p>
</div>
</div>
<div id="ivalidApi" class="apierror border-2 border-white hidden bg-pink-600 text-white max-w-2xl mx-auto mt-2 rounded-md shadow-xl flex flex-row overflow-hidden">
<div class="w-16 py-6  bg-red-700">
<svg class="max-h-10 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
</div>
<div class="w-full flex flex-col justify-center pl-6" data-nosnippet="">
<p class="font-bold text-lg">Can't get results!</p>
<p>Try again in 10 seconds.</p>
<p>Please check if this URL is correct and is not private.</p>
<p>If it is not accessible after 3 tries, that mean that Instagram restricted access for that post.</p>
</div>
</div>
</div>
</section>
<script type="text/javascript" language="JavaScript">
    $(document).ready(function () {
        var $regexname = /^((https|http)?:\/\/(?:www\.)?([^/?#&]+)).*/;
        $('.url').on('keypress keydown keyup', function () {
            if (!$(this).val().match($regexname) && $(this).val() != '') {
                $('.emsg').removeClass('hidden');
                $('.emsg').show();
                $('#submit').attr('disabled', 'disabled');
            } else {
                $('.emsg').addClass('hidden');
                $("#submit").removeAttr('disabled');
            }
        });
        $('#submit').click(function () {
            if ($('.url').val().match($regexname)) {
                $('#preload').show();
            }
        });

    });

</script>
<main class="w-full bg-gray-50">
	<?php
		if (isset($_POST['url'])) {
			$url = trim($_POST['url']);
			$resp = getContent($url);
			$check = explode('"downloadAddr":"', $resp);
			$cekid =  getAsem('https://savetik.cc/en/download?url='.$_POST['url']);
			$awal = explode('<option value="{&#34;API&#34;: &#34;', $cekid);
			$akhir = explode('">MP4</option>', $awal[1]);
			$asalwarna = $akhir[0];
			$hasil = $asalwarna;
			if (count($check) > 1){
				$contentURL = explode("\"",$check[1])[0];
                $contentURL = str_replace("\\u0026", "&", $contentURL);
				$thumb = explode("\"",explode('og:image" content="', $resp)[1])[0];
				$username = explode('","',explode('"uniqueId":"', $resp)[1])[0];
				$create_time = explode('",', explode('"createTime":"', $resp)[1])[0];
				$dt = new DateTime("@$create_time");
				$create_time = $dt->format("d M Y H:i:s A");
				$cleanVideo = "https://api2-16-h2.musical.ly/aweme/v1/play/?video_id=$hasil&vr_type=0&is_play_url=1&source=PackSourceEnum_PUBLISH&media_type=4";
				$cleanVideo = getContent($cleanVideo, true);
		?>
<section class="py-4 max-w-7xl mx-auto p-4">
<div id="results" class="grid sm:grid-cols-2 md:grid-cols-3 gap-1 md:gap-2">
<div class="py-2 md:p-2">
<div class="bg-white border rounded-sm max-w-md">
<div class="flex items-center px-4 py-2">
<div class="ml-3 ">
<span class="text-sm font-semibold antialiased block leading-tight">@<?php echo $username; ?></span>
</div>
</div>
<img src="<?php echo $thumb; ?>">
<div class="flex items-center mx-4 my-3 text-gray-600">
<div class="flex flex-row justify-between">
<svg fill="#262626" height="20" viewBox="0 0 48 48" width="24">
<path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
</svg>
<span class="font-bold text-sm mx-2">uploaded on <b><?php echo $create_time; ?></b></span>
</div>
</div>
<div class="flex flex-col px-4 text-center text-white font-semibold mb-4">
<button class="bg-blue-600 py-2 mt-1 rounded-md ring-1 ring-blue-500 border-b-4 border-blue-800 hover:bg-blue-700" onclick="window.location.href='/dl.php?url=<?php echo $hasil; ?>'">Download Video</button>
<button class="bg-blue-600 py-2 mt-1 rounded-md ring-1 ring-blue-500 border-b-4 border-blue-800 hover:bg-blue-700" onclick="window.location.href='/mp3.php?url=<?php echo $hasil; ?>'">Download Audio</button>
</div>
</div>
</div>
</div>
</section>
<?php }} ?>
</main>