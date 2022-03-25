
window.FAQ = function(){
	return {
		selected: null
	}
}

const FAQString = `
	<section class="py-8 max-w-7xl mx-auto px-4" id="faq">
<div class="">
<div class="text-center max-w-xl mx-auto">
<h2 class="text-3xl font-bold pb-6">Frequently asked questions (FAQ)</h2>
<p class="text-sm pb-6">The purpose of this FAQ is generally to provide information on frequent questions or concerns about <?php echo get_option( 'site_name' ); ?> downloader. In case you can't find the answer for your question, feel free to ask trough email our contact page.</p>
</div>
<div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="FAQ()">
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
`

const FAQ = () => (
	<>	
		<div dangerouslySetInnerHTML={{__html: FAQString}} />
	</>
);


export default FAQ;
