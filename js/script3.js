const popup = document.querySelector('.popup');
const close = document.querySelector('.close');
const overlayser = document.querySelector('.overlayser')

window.onload = function() {
    setTimeout(function() {
        popup.style.display = "block";
        overlayser.style.display = "block";
    }, 2000)
}

close.addEventListener('click', () => {
    popup.style.display = "none";
    overlayser.style.display = "none";

})