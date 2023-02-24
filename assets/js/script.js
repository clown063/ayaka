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

// Responsive Design
var screenW = window.screen.width;
if (screenW < 767) {
    new fullpage('#fullpage', {
        //options here
        autoScrolling: true,
        navigation: false,
        anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
        menu: '#header-nav'
    });
} else {
    new fullpage('#fullpage', {
        //options here
        autoScrolling: true,
        navigation: true,
        anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
        menu: '#header-nav',
        navigationTooltips: ['HOME', 'ABOUT ME', 'PROFILE', 'CAREER BACKGROUND', 'PORTFOLIO', 'CONTACT'],
        normalScrollElements: '#s3-container'
    });
}


