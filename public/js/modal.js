/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
var overlay = document.getElementById('overlay');
var closeButton = document.getElementById('modal-close-button');
closeButton.addEventListener('click', closeModal);

function closeModal() {
  // alert("I'm working!");
  modal.style.animation = 'modalSlideToTop .7s ease-in-out 0s forwards';
  overlay.style.display = 'none';
}
/******/ })()
;