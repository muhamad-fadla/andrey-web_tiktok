import React from 'react'
import ReactDOM from 'react-dom'
import './styles/index.css'
// import './styles/flowbite.css';
import App from './App'
import './alpine.js';

let tempConfig = {};

document.querySelectorAll('meta[name="config"]').forEach((config, i) => {

  Object.assign(tempConfig, {
    [config.getAttribute('key') || i]: config.getAttribute('value')
  });
});

window.ENV = window.ENV || tempConfig;



ReactDOM.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
  document.getElementById('root')
)
