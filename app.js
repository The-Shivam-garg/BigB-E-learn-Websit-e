// Select The Elements
var toggle_btn;
var big_wrapper;
var hamburger_menu;

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");




declare();

function toggleAnimation() {
  // Clone the wrapper
  console.log(" theme "+localStorage.getItem("theme"));
  if (localStorage.getItem("theme") === null)
    { localStorage.setItem("theme", "dark"); }
  let clone = big_wrapper.cloneNode(true);
  if (localStorage.getItem("theme") === "light") {
    clone.classList.remove("light");
    clone.classList.add("dark");
    localStorage.setItem("theme", "dark");
  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
    localStorage.setItem("theme", "light");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");

    console.log(" theme "+localStorage.getItem("theme"));
    // Reset Variables
    declare();
    events();
  });
}

function events() {
    
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
}

// restart with same
console.log(" theme "+localStorage.getItem("theme"));
  let clone = big_wrapper.cloneNode(true);
  if (localStorage.getItem("theme") === "light") {
    
    clone.classList.add("light");
  } else {
    
    clone.classList.add("dark");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");
  document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
events();