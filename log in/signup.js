const SignUpForm = document.getElementById('signup_form');
const username = document.getElementById('username');
const signup_email = document.getElementById('signup_email');
const phone = document.getElementById('mobile_number');
const signup_password = document.getElementById('signup_password');

SignUpForm.addEventListener('submit', e => {
    e.preventDefault();
    const { user, session, error } = _supabase.auth.signUp({
        email: signup_email.value,
        password: signup_password.value,
      },
      {
        data: {
          phone : phone.value,
          username : username.value,
        }
      }
    ).then(res=>{
      console.log(res);
      if(res.error!=null){
        console.log(res.error.message);
        document.getElementById('err_msg_signup').innerHTML = res.error.message;
      }
      if(res.error==null){
        alert("Sign-Up Successfully");
        document.getElementById('err_msg_signup').innerHTML = "Confirm Your Mail And The Login"
      }
    })
});