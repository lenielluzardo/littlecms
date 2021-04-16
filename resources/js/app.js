let navMenu = document.getElementById('header-navigation-container');
let navIcon = document.getElementById('mobile-nav-icon-container');
let header = document.getElementById('header-section-container');
let welcomePopup = document.getElementById('home-welcome-card');

document.addEventListener('DOMContentLoaded', showWelcomePopup);

function showWelcomePopup(){
    if(document.readyState === 'complete'){
        alert("I'm working");
    }
}

navIcon.addEventListener("click", showNavMenu);

function showNavMenu(){
//   alert("I'm working");

  if(navMenu.classList.contains('hidden')){

    navMenu.classList.remove('hidden');
    header.style.position = "sticky";
    navIcon.src='./assets/icons/mobile-close-icon.svg';
  }
  else {
    navMenu.classList.add('hidden');
    header.style.position = "static";
    navIcon.src='./assets/icons/mobile-nav-icon.svg';
  }
}


