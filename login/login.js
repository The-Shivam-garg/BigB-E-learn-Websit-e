const LoginForm = document.querySelector("#login_form");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const eye = document.getElementById("eye");

var eyeView = false;
eye.addEventListener("click", (e) => {
  eyeView = !eyeView;
  if (eyeView) {
    eye.setAttribute("class", "fas fa-eye eye");
    document.getElementById("password").setAttribute("type", "text");
  } else {
    eye.setAttribute("class", "fas fa-eye-slash eye");
    document.getElementById("password").setAttribute("type", "password");
  }
});
LoginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const { user, session, error } = _supabase.auth
    .signIn({
      email: email.value,
      password: password.value,
    })
    .then((res) => {
      console.log(res);
      if (res.error != null) {
        document.getElementById("err_msg").innerHTML = res.error.message;
      } else {
        location.reload();
      }
    });
});
