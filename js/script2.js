const newsletterEmail = document.getElementById("newsletterEmail");
const newsletterForm = document.forms["newsletter-form"];

var count = (function() {
    var counter = 0;
    return function() {
        return counter += 1;
    }
})();

function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function viewcount() {
    document.getElementById('counting').innerHTML = count();
}

newsletterForm.addEventListener("submit",(event)=>{
    event.preventDefault();
    if(!validateEmail(newsletterEmail.value)){
        swal("Error !","Please enter a valid email ","error");
    }
    else{
        swal("Thank You !","We will connect with you soon ! ","success");
        viewcount();
        newsletterForm.reset();
    }
})