let navMenu = document.getElementById('header-navigation');
let navIcon = document.getElementById('mobile-nav-button');

navIcon.addEventListener("click", showNavMenu);

function showNavMenu(){
//   alert("I'm working");

  if(navMenu.classList.contains('hidden')){

    navMenu.classList.remove('hidden');
    header.style.position = "sticky";
    navIcon.innerHTML = 'X';
    navIcon.style.fontSize = '25px';
  }
  else {
    navMenu.classList.add('hidden');
    header.style.position = "static";
    navIcon.innerHTML = '| | |';
    navIcon.style.fontSize = 'initial';
  }
}


