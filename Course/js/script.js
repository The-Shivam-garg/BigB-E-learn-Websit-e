let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}

let mainVid = document.querySelector('.main-video');

document.querySelectorAll('.course-3 .box .video video').forEach(vid =>{

    vid.onclick = () =>{
        let src = vid.getAttribute('src');
        mainVid.classList.add('active');
        mainVid.querySelector('video').src = src;
    }

});

document.querySelector('#close-vid').onclick = () =>{
    mainVid.classList.remove('active');
}


        // floating button to the top 
        $(document).ready(function() {
            $(document).scroll(function(){
                if($(this).scrollTop() > 100){
                    $("#scroll").fadeIn();
                } else{
                    $("#scroll").fadeOut();
                }
            });
            $("#scroll").click(function () {
                $("html,body").animate({scrollTop:0},600);
                return false;
            });
        });

