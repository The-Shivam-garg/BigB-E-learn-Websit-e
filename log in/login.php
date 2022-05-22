<?php
session_start();

// logged in user shouldn't access this page
if (isset($_SESSION['uid'])) {
    header('Location: profile.php');
}
?>
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
    function handleCredentialResponse(response) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if ('success' == this.responseText) {
                    // redirect to profile page
                    location.href = 'index.html';
                }
            }
        };
        xhttp.open("POST", "save-user.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("response=" + response.credential);
    }
    window.onload = function() {
        google.accounts.id.initialize({
            // here you have to write your own google client id - nikunj
            client_id: "GOOGLE_CLIENT_ID",
            callback: handleCredentialResponse
        });
        google.accounts.id.renderButton(
            document.getElementById("buttonDiv"), {
                theme: "outline",
                size: "large",
                width: "200"
            } // customization attributes
        );
        google.accounts.id.prompt(); // also display the One Tap dialog
    }
</script>
<div id="buttonDiv"></div>