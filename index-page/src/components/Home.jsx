import React, { useState } from 'react';
import FAQ from './FAQ'


const Home = function() {
  const [ url, setURL ] = useState('');
  const [invalidURL, setInvalidURL] = useState(false);

  const validateURL  = url => /http:|https:/gmi.test(url);

  const handleSubmitSearch = (e) => {
    e.preventDefault();

    if(!validateURL(url)){
      if(url == ''){
        setInvalidURL(false)
      }else{
        setInvalidURL(true)
      }
      return;
    }else{
      setInvalidURL(false)
    }

    


    console.log(url)
  }

  const handleChangeInput = (e) => {

    if(!validateURL(e.target.value)){
      if(e.target.value == ''){
        setInvalidURL(false)
      }else{
        setInvalidURL(true)
      }
    }else{
      setInvalidURL(false)
    }

    setURL(e.target.value)
  };

  return (
    <div>
      <section className="w-full mx-auto" style={{background: ENV['thema.color']}}>
        <div className="max-w-7xl mx-auto justify-center px-4 lg:py-16">
          <h1 className="mx-auto text-center  py-10 md:pb-10 text-3xl md:text-4xl lg:text-5xl text-blue-50 font-semibold md:font-extrabold">TikTok Downloader</h1>
          <form onSubmit={handleSubmitSearch} className="max-w-full md:shadow md:max-w-2xl mx-auto md:flex md:border-8 border-white hover:shadow-lg md:rounded-lg md:bg-white">
            <input id="url" name="url" value={url} onChange={handleChangeInput} type="text" placeholder="Paste TikTok link here" autoFocus className="url w-full md:w-9/12 flex-grow p-4 mb-4 md:mb-0 focus:outline-none rounded-lg text-xl" />
            <button className="w-full appearance-none text-white font-semibold rounded-lg md:rounded-r-lg text-xl md:w-3/12 px-4 py-4 bg-gradient-to-tl from-blue-400 to-blue-600 hover:blue-500 hover:text-white focus:outline-none" type="submit" id="submit">Download
            </button>
          </form>
          <div id="preload" className="justify-center flex mt-3 py-4" style={{display: 'none'}}>
            <div className="inline-flex items-center px-2 py-2 rounded-full leading-6 text-xl transition ease-in-out duration-150 shadow-md">
              <svg className="animate-spin m-3 h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle className="opacity-25" cx={12} cy={12} r={10} stroke="currentColor" strokeWidth={4} />
                <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" />
              </svg>
            </div>
          </div>
          {invalidURL && (
            <div className=" emsg bg-red-600 text-white max-w-2xl mx-auto mt-2 rounded-md shadow-xl flex flex-row overflow-hidden" data-nosnippet>
              <div className="w-16 py-6  bg-red-900">
                <svg className="max-h-10 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div className="w-full flex flex-col justify-center pl-6">
                <p className="font-bold text-lg">Caution!</p>
                <p>Unsupported Link!</p>
                <p>Please insert only the video link</p>
              </div>
            </div>
            )}

          <div className="justify-center mt-3 py-0 text-white md:max-w-2xl mx-auto text-sm">
            {/* ads */}
          </div>
          <div className="text-center text-white py-10">Download Video TikTok without Watermark</div>
        </div>
      </section>
      <main className="w-full bg-gray-50">
        <section className="py-8 max-w-7xl mx-auto px-4">
          <div className="w-full md:flex bg-white rounded-xl overflow-hidden shadow-lg">
            <div className="md:w-1/2">
              <img loading="lazy" className="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/public/images/_/tiktok-image.jpg" alt="Download TikTok video without watermark" />
            </div>
            <div className="p-6 flex flex-col md:w-1/2 justify-center leading-normal">
              <h2 className="text-3xl md:text-4xl lg:text-6xl mb-6 text-black text-4xl tracking-tight font-extrabold text-gray-900">
                Download <span className="text-blue-700">Video</span> without <span className="text-pink-700">Watermark</span> from TikTok</h2>
              <p className="mt-3 text-base text-gray-700 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                <b>{/*?php echo get_option( 'site_name' ); ?*/}</b> is an online web tool to help you with downloading TikTok Videos without Watermark. {/*?php echo get_option( 'site_name' ); ?*/} is designed to be easy to use on any device, such as, mobile, tablet or computer.</p>
            </div>
          </div>
        </section>
        <section className="py-8 max-w-7xl mx-auto px-4">
          <div className="w-full">
            <div className="mx-auto pb-6 border-b-2 border-orange-500 text-center text-2xl md:text-4xl text-blue-700 uppercase font-extrabold">
              HOW TO DOWNLOAD FROM TIKTOK?
            </div>
            <div className="pb-6 text-center text-gray-700 sm:mt-5 sm:text-lg md:mt-5 md:text-xl lg:mx-0">To download videos from TikTok, you need to follow these three easy steps. See their description below.
            </div>
            <div className="flex justify-center flex-wrap grid gap-4 md:grid-cols-3">
              <div className="h-92 bg-white shadow-lg rounded-xl overflow-hidden">
                <div className="flex h-56 overflow-hidden">
                  <img loading="lazy" className="object-cover w-full" src="./../images/_/copy.jpg" alt="Copy The URL" />
                </div>
                <p className="mx-6 py-2 border-b-2 text-center text-pink-800 font-bold text-2xl">Copy the URL</p>
                <p className="p-6 text-lg text-gray-700">Open TikTok application or website, share and copy the URL of the video.</p>
              </div>
              <div className="h-92 bg-white shadow-lg rounded-xl overflow-hidden">
                <div className="flex h-56 overflow-hidden">
                  <img loading="lazy" className="object-cover w-full" src="./../images/_/paste.jpg" alt="Paste the link" />
                </div>
                <p className="mx-6 py-2 border-b-2 text-center text-pink-800 font-bold text-2xl">Paste the link</p>
                <p className="p-6 text-lg text-gray-700">Go back to {/*?php echo get_option( 'site_name' ); ?*/}, paste the link into the field and click the Download button.</p>
              </div>
              <div className="h-92 bg-white shadow-lg rounded-xl overflow-hidden">
                <div className="flex h-56 overflow-hidden">
                  <img loading="lazy" className="object-cover w-full" src="./../images/_/tiktok-image.jpg" alt="Download" />
                </div>
                <p className="mx-6 py-2 border-b-2 text-center text-pink-800 font-bold text-2xl">Download</p>
                <p className="p-6 text-lg text-gray-700">Quickly you will get the results with several quality options, download what fits your needs.</p>
              </div>
            </div>
          </div>
        </section>

        <FAQ />
        
      </main>
    </div>
  );
}


export default Home;