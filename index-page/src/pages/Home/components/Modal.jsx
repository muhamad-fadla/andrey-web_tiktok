import React, { useState, Fragment, useRef } from 'react';
import './Modal.css';

const ModalDownload = ({show,setShow, data}) => {

	const toRef = (url) => {
		window.location.href = url;
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
			        			<span className="">X</span>


					        </div>
					        <img src={data.thumb} />
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
					          	<button className="bg-blue-600 py-2 mt-1 rounded-md ring-1 ring-blue-500 border-b-4 border-blue-800 hover:bg-blue-700 col-span-2 lg:col-span-2" onClick={() => toRef('/mp3.php?url'+data.music_only)}>Download Audio</button>
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
	</>

	);
}

export default ModalDownload;