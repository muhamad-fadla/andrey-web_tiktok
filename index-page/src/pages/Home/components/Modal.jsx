import React, { useState, Fragment, useRef } from 'react';
import './Modal.css';
import AdSense from 'react-adsense';

const ModalDownload = ({show,setShow, data}) => {
	const [hasDownload, setHasDownload] = useState(false)

	const toRef = (url) => {
		setHasDownload(true);
		setShow(false);

		window.open(url,'_blank');
	}

	const AlertStyles = {
		backgroundColor: '#e6fffa',
		borderColor: '#38b2ac',
		border: '1px solid #38b2ac',
		borderBottomRightRadius: '0.25rem',
    	borderBottomLeftRadius: '0.25rem',
    	color: '#234e52',
    	boxShadow: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
    	paddingRight: '0.75rem',
    	paddingLeft: '0.75rem',
    	padding: '1rem'
	}


  return (
  	<>
  		{show && (
			<div className="modal fixed mt-2 top-0 left-0 w-full h-full fade justify-center items-center flex overflow-x-hidden overflow-y-auto" id="exampleModalTwo" tabIndex={-1} role="dialog">
			  <div className="modal-dialog relative w-auto pointer-events-none max-w-lg my-8 mx-auto sm:px-0" role="document">
			    <div className="relative flex flex-col w-full pointer-events-auto bg-white border border-gray-300 rounded-lg">
			      <div className="relative flex">
			        <section className="max-w-7xl mx-auto p-4">
					  <div className="">
					    <div className="md:p-1 ">
					      <div className="bg-white rounded-sm max-w-md">
					        <div className="flex items-center px-2 py-2">
					          <div className="ml-3">
					            <span className="text-sm font-semibold antialiased block leading-tight">@{data.author}</span>				            
					          </div>
					        </div>
					        <img style={{height: '250px', margin: 'auto'}} src={data.thumb} />
					        <div className="flex items-center mx-4 my-3 text-gray-600">
					          <div className="flex flex-row justify-between">
					            <svg fill="#262626" height={20} viewBox="0 0 48 48" width={24}>
					              <path clipRule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fillRule="evenodd" />
					            </svg>
					            <span className="font-bold text-sm mx-2">uploaded on <b>{""}</b></span>
					          </div>
					        </div>
					        <div className="px-4 text-center text-white font-semibold mb-4">
					        	<div className="grid grid-cols-1 grid-cols-2 gap-4">
						          <button className="bg-blue-600 py-2 mt-1 rounded-md ring-1 ring-blue-500 border-b-4 border-blue-800 hover:bg-blue-700" onClick={() => toRef('/dl.php?url=' + data.without_watermark)}>Download Video</button>
						          <button className="bg-blue-600 py-2 mt-1 rounded-md ring-1 ring-blue-500 border-b-4 border-blue-800 hover:bg-blue-700" onClick={() => toRef('/dl.php?url=' + data.without_watermark)}>Video Without Watermark</button>
					        	</div>
					          	<div className="grid grid-cols-1 grid-cols-1 gap-4 mt-2">
					          	<button className="bg-blue-600 py-2 mt-1 rounded-md ring-1 ring-blue-500 border-b-4 border-blue-800 hover:bg-blue-700 col-span-2 lg:col-span-2" onClick={() => toRef('/mp3.php?url='+data.music_only)}>Download Audio</button>
					          	</div>
					        </div>
					      </div>
					    </div>
					  </div>
					</section>

			      </div>
			    </div>
			  </div>
			</div>

		)}

		{hasDownload && (
			<div className="modal fixed mt-2 top-0 left-0 w-full h-full fade justify-center items-center flex overflow-x-hidden overflow-y-auto" tabIndex={-1} role="dialog">
			  <div className="modal-dialog relative w-auto pointer-events-none max-w-lg my-8 mx-auto px-4 sm:px-0" role="document">
			    <div className="relative flex flex-col w-full pointer-events-auto bg-white border border-gray-300 rounded-lg">
			      <div className="flex items-start justify-between p-4 border-b border-gray-300 rounded-t">
			        <h5 className="mb-0 text-lg leading-normal">Thanks for Download</h5>
			        <button type="button" className="close" onClick={() => setHasDownload(false)}>×</button>
			      </div>
			      <div className="relative flex p-4">
			       	<div style={AlertStyles} className="px-4 py-3 shadow-md" role="alert">
				      <p>Video anda telah di unduh!</p>
					</div>
			      </div>
			    </div>
			  </div>
			</div>

		)}
	</>

	);
}

export default ModalDownload;