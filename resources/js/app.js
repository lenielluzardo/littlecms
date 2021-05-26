let header = document.getElementById('header');
let navIcon = document.getElementById('mobile-nav-button');
let overlay = document.getElementById('overlay');

navIcon.addEventListener("click", showNavMenu);
showNavClass = 'show-nav';

function showNavMenu(){
//   alert("I'm working");

  if(!header.classList.contains(showNavClass)){
      header.classList.add(showNavClass);
      navIcon.innerHTML = 'X';
      navIcon.style.fontSize = '25px';
    }
    else {

    header.classList.remove(showNavClass);
    navIcon.innerHTML = '| | |';
    navIcon.style.fontSize = 'initial';
  }
}

let closeButton = document.getElementById('modal-close-button');

closeButton.addEventListener('click', closeModal);

function closeModal(){
    // alert("I'm working!");
    modal.style.animation = 'modalSlideToTop .7s ease-in-out 0s forwards';
    overlay.style.display = 'none';
}


