<section class="w-full mx-auto" style="background:#<?php echo get_option( 'color' ); ?>">
<div class="max-w-7xl mx-auto justify-center px-4 lg:py-16">
<h1 class="mx-auto text-center  py-10 md:pb-10 text-3xl md:text-4xl lg:text-5xl text-blue-50 font-semibold md:font-extrabold">TikTok Downloader</h1>

<form id="form" action="<?php echo download_permalink(''); ?>" class="max-w-full md:shadow md:max-w-2xl mx-auto md:flex md:border-8 border-white hover:shadow-lg md:rounded-lg md:bg-white" method="post">
<input id="url" name="url" type="text" value="" placeholder="Paste TikTok link here" autofocus class="url w-full md:w-9/12 flex-grow p-4 mb-4 md:mb-0 focus:outline-none rounded-lg text-xl">
<button class="w-full appearance-none text-white font-semibold rounded-lg md:rounded-r-lg text-xl md:w-3/12 px-4 py-4 bg-gradient-to-tl from-blue-400 to-blue-600 hover:blue-500 hover:text-white focus:outline-none" type="submit" id="submit">Download
</button>
</form>

<div id="preload" class="justify-center flex mt-3 py-4" style="display: none;">
<div class="inline-flex items-center px-2 py-2 rounded-full leading-6 text-xl transition ease-in-out duration-150 shadow-md">
<svg class="animate-spin m-3 h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
</div>
</div>
<div id="ivalidstatus" class="emsg hidden bg-red-600 text-white max-w-2xl mx-auto mt-2 rounded-md shadow-xl flex flex-row overflow-hidden" data-nosnippet>
<div class="w-16 py-6  bg-red-900">
<svg class="max-h-10 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</div>
<div class="w-full flex flex-col justify-center pl-6">
<p class="font-bold text-lg">Caution!</p>
<p>Unsupported Link!</p>
<p>Please insert only the video link</p>
</div>
</div>
<div class="justify-center mt-3 py-0 text-white md:max-w-2xl mx-auto text-sm">
<!-- ads -->
</div>
<div class="text-center text-white py-10">Download Video TikTok without Watermark</div>
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
<section class="py-8 max-w-7xl mx-auto px-4">
<div class="w-full md:flex bg-white rounded-xl overflow-hidden shadow-lg">
<div class="md:w-1/2">
<img loading=lazy class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/themes/default/assets/img/tiktok-image.jpg" alt="Download TikTok video without watermark">
</div>
<div class="p-6 flex flex-col md:w-1/2 justify-center leading-normal">
<h2 class="text-3xl md:text-4xl lg:text-6xl mb-6 text-black text-4xl tracking-tight font-extrabold text-gray-900">
Download <span class="text-blue-700">Video</span> without <span class="text-pink-700">Watermark</span> from TikTok</h2>
<p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
<b><?php echo get_option( 'site_name' ); ?></b> is an online web tool to help you with downloading TikTok Videos without Watermark. <?php echo get_option( 'site_name' ); ?> is designed to be easy to use on any device, such as, mobile, tablet or computer.</p>
</div>
</div>
</section>
<section class="py-8 max-w-7xl mx-auto px-4">
<div class="w-full">
<div class="mx-auto pb-6 border-b-2 border-orange-500 text-center text-2xl md:text-4xl text-blue-700 uppercase font-extrabold">
HOW TO DOWNLOAD FROM TIKTOK?
</div>
<div class="pb-6 text-center text-gray-700 sm:mt-5 sm:text-lg md:mt-5 md:text-xl lg:mx-0">To download videos from TikTok, you need to follow these three easy steps. See their description below.
</div>
<div class="flex justify-center flex-wrap grid gap-4 md:grid-cols-3">
<div class="h-92 bg-white shadow-lg rounded-xl overflow-hidden">
<div class="flex h-56 overflow-hidden">
<img loading=lazy class="object-cover w-full" src="/themes/default/assets/img/copy.jpg" alt="Copy The URL">
</div>
<p class="mx-6 py-2 border-b-2 text-center text-pink-800 font-bold text-2xl">Copy the URL</p>
<p class="p-6 text-lg text-gray-700">Open TikTok application or website, share and copy the URL of the video.</p>
</div>
<div class="h-92 bg-white shadow-lg rounded-xl overflow-hidden">
<div class="flex h-56 overflow-hidden">
<img loading=lazy class="object-cover w-full" src="/themes/default/assets/img/paste.jpg" alt="Paste the link">
</div>
<p class="mx-6 py-2 border-b-2 text-center text-pink-800 font-bold text-2xl">Paste the link</p>
<p class="p-6 text-lg text-gray-700">Go back to <?php echo get_option( 'site_name' ); ?>, paste the link into the field and click the Download button.</p>
</div>
<div class="h-92 bg-white shadow-lg rounded-xl overflow-hidden">
<div class="flex h-56 overflow-hidden">
<img loading=lazy class="object-cover w-full" src="/themes/default/assets/img/tiktok-image.jpg" alt="Download">
</div>
<p class="mx-6 py-2 border-b-2 text-center text-pink-800 font-bold text-2xl">Download</p>
<p class="p-6 text-lg text-gray-700">Quickly you will get the results with several quality options, download what fits your needs.</p>
</div>
</div>
</div>
</section>
<section class="py-8 max-w-7xl mx-auto px-4">
<div class="">
<div class="text-center max-w-xl mx-auto">
<h2 class="text-3xl font-bold pb-6">Frequently asked questions (FAQ)</h2>
<p class="text-sm pb-6">The purpose of this FAQ is generally to provide information on frequent questions or concerns about <?php echo get_option( 'site_name' ); ?> downloader. In case you can't find the answer for your question, feel free to ask trough email our contact page.</p>
</div>
<div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="{selected:null}">
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2 justify-between" @click="selected !== 1 ? selected = 1 : selected = null">
<h3 class="text-lg">What is an TikTok Video Downloader?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
<p class="p-6">
It’s an online tool (web application) that enables you to download TikTok videos.
In case you need to use it later offline. The <?php echo get_option( 'site_name' ); ?> TikTok downloader is the best tool for downloading from TikTok.</p>
</div>
</div>
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2" @click="selected !== 2 ? selected = 2 : selected = null">
<h3 class="text-lg">What type of file formats does <?php echo get_option( 'site_name' ); ?> support for downloading?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
<p class="p-6">
For the videos, the mp4 file format is still considered to be most popular in the world, that ensures high quality and small video file size.
</p>
</div>
</div>
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2" @click="selected !== 3 ? selected = 3 : selected = null">
<h3 class="text-lg">What devices are compatible with the <?php echo get_option( 'site_name' ); ?> Downloader?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
<p class="p-6">The <?php echo get_option( 'site_name' ); ?> Downloader is compatible with any device with an installed browser. You can use <?php echo get_option( 'site_name' ); ?> from any device like mobile phone, smartphone, tablet, notebook, laptop, or PC. Also, it’s run on Mac OS, Windows, iOS, Linux. It has been tested and it works well with browsers like Chrome, Firefox, Opera, Safari, Chromium, desktop, and mobile versions.</p>
</div>
</div>
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2" @click="selected !== 4 ? selected = 4 : selected = null">
<h3 class="text-lg">Are there any limits on the number of videos I can download?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
<p class="p-6">No! You can download as many videos as you wish.</p>
</div>
</div>
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2" @click="selected !== 6 ? selected = 6 : selected = null">
<h3 class="text-lg">How to Download TikTok Videos Online?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container6" x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
<div class="p-6">
<p class="font-bold">Nothing easier!</p>
<ul>
<li>Copy an TikTok video URL</li>
<li>Go back to <?php echo get_option( 'site_name' ); ?> and paste it into the field and press Start</li>
<li>Shortly, you will get the results, pick the quality you need and download.</li>
</ul>
</div>
</div>
</div>
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2" @click="selected !== 7 ? selected = 7 : selected = null">
<h3 class="text-lg">Can I Download Videos from Any User?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container7" x-bind:style="selected == 7 ? 'max-height: ' + $refs.container7.scrollHeight + 'px' : ''">
<p class="p-6">Yes! But only from public accounts. We respect the user’s privacy/copyright. Downloading private videos through <?php echo get_option( 'site_name' ); ?> is not available and will not be. But we work on a new browser extension, for desktop browsers, that will help you to download private posts directly from TikTok.</p>
</div>
</div>
<div class="cursor-pointer w-full px-8 py-4 text-left border-b-2" @click="selected !== 8 ? selected = 8 : selected = null">
<h3 class="text-lg">What is the highest quality of videos I can download?</h3>
<div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container8" x-bind:style="selected == 8 ? 'max-height: ' + $refs.container8.scrollHeight + 'px' : ''">
 <p class="p-6">The videos quality really depend on the original uploaded video it is the HD (720p) in most of the cases.
</p>
</div>
</div>
</div>
</div>
</section>
</main>