let navMenu = document.getElementById('nav-menu');
let navIcon = document.getElementById('mobile-nav-icon');
let header = document.getElementById('header-container');


navIcon.addEventListener("click", showNavMenu);

function showNavMenu(){
  // alert("I'm working");

  if(navMenu.classList.contains('hidden')){

    navMenu.classList.remove('hidden');
    header.style.position = "fixed";
    header.style.width = "100%";
    navIcon.src='./assets/icons/mobile-close-icon.svg';
  }
  else {
    navMenu.classList.add('hidden');
    header.style.position = "sticky";
    navIcon.src='./assets/icons/mobile-nav-icon.svg';
  }
}


