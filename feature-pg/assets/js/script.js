const scrollbtn = document.getElementById('scrollbtn');
console.log(scrollbtn);
scrollbtn.addEventListener("click", myFunction);

function myFunction() {
  window.scrollTo({
    top:0,
    left:0,
    behavior:"smooth",
  })
}
