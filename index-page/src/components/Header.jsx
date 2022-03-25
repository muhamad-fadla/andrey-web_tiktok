import React from 'react';


const Header = () => {
	return (
	  <header className="p-2 md:py-4 items-center bg-white max-w-7xl mx-auto">
        <div className="flex flex-row justify-between">
          <div>
            <div className="relative font-bold">
              <a className="relative z-10 block rounded-md p-2 focus:outline-none cursor-pointer flex flex-row items-center" href="/">Tiktoku<span className="uppercase m-1" /></a>
            </div>
          </div>
          <nav className="flex flex-row">
            <div className="relative font-bold hover:shadow-md hover:bg-blue-500 hover:text-white rounded-md">
              <a className="relative z-10 block rounded-md p-2 focus:outline-none cursor-pointer flex flex-row items-center" href="#faq">
                <span className="uppercase m-1">FAQ</span>
              </a>
            </div>
          </nav>
        </div>
      </header>
	)
}


export default Header;