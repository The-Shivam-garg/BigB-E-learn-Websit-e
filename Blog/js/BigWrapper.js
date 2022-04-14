let big_wrapper = document.querySelector(".big-wrapper");
let hamburger_menu = document.querySelector(".hamburger-menu");
hamburger_menu.addEventListener("click", () => {
big_wrapper.classList.toggle("active");
});