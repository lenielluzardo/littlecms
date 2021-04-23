/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

var navMenu = document.getElementById('header-navigation-container');
var navIcon = document.getElementById('mobile-nav-icon-container');
var header = document.getElementById('header-section-container');
var welcomePopup = document.getElementById('home-welcome-card');
document.addEventListener('DOMContentLoaded', showWelcomePopup);

function showWelcomePopup() {
  if (document.readyState === 'complete') {
    alert("I'm working");
  }
}

navIcon.addEventListener("click", showNavMenu);

function showNavMenu() {
  //   alert("I'm working");
  if (navMenu.classList.contains('hidden')) {
    navMenu.classList.remove('hidden');
    header.style.position = "sticky";
    navIcon.src = './assets/icons/mobile-close-icon.svg';
  } else {
    navMenu.classList.add('hidden');
    header.style.position = "static";
    navIcon.src = './assets/icons/mobile-nav-icon.svg';
  }
}

/***/ }),

/***/ "./resources/less/index.less":
/*!***********************************!*\
  !*** ./resources/less/index.less ***!
  \***********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/less-loader/dist/cjs.js):\n\n\n@import 'mod-notification.less';\n@import 'mod-admin.less';\n^\nLess resolver error:\n'mod-admin.less' wasn't found. Tried - E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\mod-admin.less,npm://mod-admin.less,mod-admin.less\n\nWebpack resolver error details:\nresolve 'mod-admin.less' in 'E:\\dev\\pro\\2021-lluzardocom\\resources\\less'\n  Parsed request is a module\n  using description file: E:\\dev\\pro\\2021-lluzardocom\\package.json (relative path: ./resources/less)\n    using description file: E:\\dev\\pro\\2021-lluzardocom\\package.json (relative path: ./resources/less/mod-admin.less)\n      no extension\n        E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\mod-admin.less doesn't exist\n      .less\n        E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\mod-admin.less.less doesn't exist\n      .css\n        E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\mod-admin.less.css doesn't exist\n      as directory\n        E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\mod-admin.less doesn't exist\n    resolve as module\n      E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\node_modules doesn't exist or is not a directory\n      E:\\dev\\pro\\2021-lluzardocom\\resources\\node_modules doesn't exist or is not a directory\n      looking for modules in E:\\dev\\pro\\2021-lluzardocom\\node_modules\n        single file module\n          using description file: E:\\dev\\pro\\2021-lluzardocom\\package.json (relative path: ./node_modules/mod-admin.less)\n            no extension\n              E:\\dev\\pro\\2021-lluzardocom\\node_modules\\mod-admin.less doesn't exist\n            .less\n              E:\\dev\\pro\\2021-lluzardocom\\node_modules\\mod-admin.less.less doesn't exist\n            .css\n              E:\\dev\\pro\\2021-lluzardocom\\node_modules\\mod-admin.less.css doesn't exist\n        E:\\dev\\pro\\2021-lluzardocom\\node_modules\\mod-admin.less doesn't exist\n      E:\\dev\\pro\\node_modules doesn't exist or is not a directory\n      E:\\dev\\node_modules doesn't exist or is not a directory\n      E:\\node_modules doesn't exist or is not a directory\n\nWebpack resolver error missing:\nundefined\n\n\n      Error in E:\\dev\\pro\\2021-lluzardocom\\resources\\less\\index.less (line 164, column 0)\n    at processResult (E:\\dev\\pro\\2021-lluzardocom\\node_modules\\webpack\\lib\\NormalModule.js:676:19)\n    at E:\\dev\\pro\\2021-lluzardocom\\node_modules\\webpack\\lib\\NormalModule.js:778:5\n    at E:\\dev\\pro\\2021-lluzardocom\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at E:\\dev\\pro\\2021-lluzardocom\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (E:\\dev\\pro\\2021-lluzardocom\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.lessLoader (E:\\dev\\pro\\2021-lluzardocom\\node_modules\\less-loader\\dist\\index.js:49:5)\n    at processTicksAndRejections (internal/process/task_queues.js:97:5)");

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