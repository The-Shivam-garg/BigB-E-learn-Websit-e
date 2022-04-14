const SignUpForm = document.getElementById("signup_form");
const username = document.getElementById("username");
const signup_email = document.getElementById("signup_email");
const phone = document.getElementById("mobile_number");
const signup_password = document.getElementById("signup_password");
const signup_confirm_password = document.getElementById(
  "confirm_signup_password"
);
const confirm_eye = document.getElementById("confirm_signup_eye");

var passwordEyeView = false;

document.getElementById("signup_eye").addEventListener("click", (e) => {
  passwordEyeView = !passwordEyeView;
  if (passwordEyeView) {
    document
      .getElementById("signup_eye")
      .setAttribute("class", "fas fa-eye eye");
    document.getElementById("signup_password").setAttribute("type", "text");
  } else {
    document
      .getElementById("signup_eye")
      .setAttribute("class", "fas fa-eye-slash eye");
    document.getElementById("signup_password").setAttribute("type", "password");
  }
});

var confirmPasswordEyeView = false;

document.getElementById("confirm_signup_eye").addEventListener("click", (e) => {
  confirmPasswordEyeView = !confirmPasswordEyeView;
  if (confirmPasswordEyeView) {
    document
      .getElementById("confirm_signup_eye")
      .setAttribute("class", "fas fa-eye eye");
    document
      .getElementById("confirm_signup_password")
      .setAttribute("type", "text");
  } else {
    document
      .getElementById("confirm_signup_eye")
      .setAttribute("class", "fas fa-eye-slash eye");
    document
      .getElementById("confirm_signup_password")
      .setAttribute("type", "password");
  }
});

SignUpForm.addEventListener("submit", (e) => {
  e.preventDefault();
  if (signup_password.value !== signup_confirm_password.value) {
    alert("Password doesn't match");
  } else {
    const { user, session, error } = _supabase.auth
      .signUp(
        {
          email: signup_email.value,
          password: signup_password.value,
        },
        {
          data: {
            phone: phone.value,
            username: username.value,
          },
        }
      )
      .then((res) => {
        console.log(res);
        if (res.error != null) {
          console.log(res.error.message);
          document.getElementById("err_msg_signup").innerHTML =
            res.error.message;
        }
        if (res.error == null) {
          alert("Sign-Up Successfully");
          document.getElementById("err_msg_signup").innerHTML =
            "Confirm Your Mail And The Login";
        }
      });
  }
});
