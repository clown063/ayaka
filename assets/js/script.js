$(function(){
    $(window).on('load', function () {
        var innerHeight = window.innerHeight;
        $('.s1').css('height', innerHeight + 'px'); 
        $('.s1-imgs').css('height', innerHeight + 'px');
        $('.s1-bg').css('height', innerHeight + 'px');
        $('.s3').css('height', innerHeight + 'px');
        $('.s3-left').css('height', innerHeight + 'px'); 
        if (window.screen.height > 767) {
            $('.s3-right').css('height', innerHeight*9/10 + 'px'); 
            $('.s3-right').css('margin-top', innerHeight*1/10 + 'px'); 
        } else if (window.screen.height > 575) {
            $('.s3-right').css('height', innerHeight + 'px'); 
        } else {
            $('.s3-right').css('height', innerHeight + 'px'); 
            $('.s3-right').css('margin-top', 0 + 'px'); 
        }
    });
});

var topIndex = 0;
var s1_imgs = document.getElementsByClassName("s1-imgs");

swapImages();

function swapImages() {
    for (var i = 0; i < s1_imgs.length; i++) {
        s1_imgs[i].style.display = "none";
    }
    topIndex++;
    if (topIndex > s1_imgs.length) {
        topIndex = 1;
    }

    s1_imgs[topIndex - 1].style.display = "block";
    setTimeout(swapImages, 8000);
}

new fullpage('#fullpage', {
    //options here
    autoScrolling: true,
    navigation: true,
    anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
    menu: '#header-nav',
    navigationTooltips: ['HOME', 'ABOUT ME', 'PROFILE', 'CAREER BACKGROUND', 'PORTFOLIO', 'CONTACT'],
    normalScrollElements: '#s3-container',
    scrollOverflowMacStyle: true
});


