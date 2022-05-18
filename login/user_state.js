const welcome = document.getElementById('signed_user_welcome');
const hide = document.querySelectorAll('.user_logged_in');
const title = document.getElementById('logged_user');
const logout_button = document.querySelector('.logout');
const user = _supabase.auth.user();
if(user){
  alert(`${user.user_metadata.username} You are already logged in`);
  welcome.innerHTML = "Welcome Here";
  console.log(user);
  for (var i = 0; i < hide.length; i++) {
    hide[i].style.display="none";
  }
  title.innerHTML = `Welcome ${user.user_metadata.username}`;
  logout_button.style.display="block";
}

logout_button.addEventListener('click',e =>{
    e.preventDefault();
    const { error } = _supabase.auth.signOut();
    location.reload();
  })
  