let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].style.backgroundColor = "#bbb";
       }
       slides[slideIndex-1].style.display = "block";  
       dots[slideIndex-1].style.backgroundColor = "#717171";
       slideIndex++;
       setTimeout(showSlides,5000,slideIndex);
}


// ********************************************************

let nums = document.querySelectorAll(".num-counter");
let numSection = document.querySelector(".why-section");
let started = false;

window.onscroll = function () {
    if (window.scrollY > 700) {
        if (!started) {
            nums.forEach((num) => startCount(num));
        }
        started = true;
    }
};

function startCount(elem) {
    let target = elem.dataset.target;
    let count = setInterval(() => {
        elem.textContent++;
        if (elem.textContent == target) {
            clearInterval(count);
        }
    }, 2500 / target);
}

let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

searchBtn.addEventListener("click", () => {
  // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
  }
}
const scrollbtn = document.getElementById("scrollbtn");
console.log(scrollbtn);
scrollbtn.addEventListener("click", myFunction);

function myFunction() {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
}


let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}
}

