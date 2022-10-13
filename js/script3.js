const popup = document.querySelector('.popup');
const close = document.querySelector('.close');
const popupBG = document.querySelector(".popupBG");

const hideall = () =>{
    popup.style.display = "none";
    popupBG.style.display = "none";
}

window.onload = function() {
    setTimeout(function() {
        popup.style.display = "block";
        popupBG.style.display = "grid";
    }, 2000)
}

close.addEventListener('click', () => hideall())

popupBG.addEventListener('click',()=> hideall())