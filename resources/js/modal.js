let overlay = document.getElementById('overlay');

let closeButton = document.getElementById('modal-close-button');

closeButton.addEventListener('click', closeModal);

function closeModal(){
    // alert("I'm working!");
    modal.style.animation = 'modalSlideToTop .7s ease-in-out 0s forwards';
    overlay.style.display = 'none';
}
