const form = document.forms["form-sheet"];
const courses = document.getElementById("choose");
const email = document.getElementById("email");
const name = document.getElementById("name");

function isEmail(email) {
    let regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regexp.test(String(email).toLowerCase());
}


form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (name.value == "") {
        swal("Error !", "Please enter a valid name", "error");
    } else if (!isEmail(email.value)) {
        swal("Error !", "Please enter a valid email", "error");
    } else if (courses.value == "") {
        swal("Error !", "Please select a course", "error");
    } else {
        swal("Welcome to Bigb", "Thanks for joining us !", "success");
        form.reset();
    }

})