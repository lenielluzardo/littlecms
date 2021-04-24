/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

var navMenu = document.getElementById('header-navigation');
var navIcon = document.getElementById('mobile-nav-button');
navIcon.addEventListener("click", showNavMenu);

function showNavMenu() {
  //   alert("I'm working");
  if (navMenu.classList.contains('hidden')) {
    navMenu.classList.remove('hidden');
    header.style.position = "sticky";
    navIcon.innerHTML = 'X';
    navIcon.style.fontSize = '25px';
  } else {
    navMenu.classList.add('hidden');
    header.style.position = "static";
    navIcon.innerHTML = '| | |';
    navIcon.style.fontSize = 'initial';
  }
}

/***/ }),

/***/ "./resources/less/index.less":
/*!***********************************!*\
  !*** ./resources/less/index.less ***!
  \***********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/less-loader/dist/cjs.js):\n\n\n}\n\n^\nUnrecognised input. Possibly missing something\n      Error in E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\components\\navigation.less (line 31, column 0)\n    at processResult (E:\\dev\\pro\\2021-lluzardocom\\node_modules\\webpack\\lib\\NormalModule.js:676:19)\n    at E:\\dev\\pro\\2021-lluzardocom\\node_modules\\webpack\\lib\\NormalModule.js:778:5\n    at E:\\dev\\pro\\2021-lluzardocom\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at E:\\dev\\pro\\2021-lluzardocom\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (E:\\dev\\pro\\2021-lluzardocom\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.lessLoader (E:\\dev\\pro\\2021-lluzardocom\\node_modules\\less-loader\\dist\\index.js:49:5)\n    at processTicksAndRejections (internal/process/task_queues.js:97:5)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/less/index.less"]();
/******/ 	
/******/ })()
;