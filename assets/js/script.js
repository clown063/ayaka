$(function () {
    $(window).on('load', function () {
        var innerHeight = window.innerHeight;
        $('.s1').css('height', innerHeight + 'px');
        $('.s1-imgs').css('height', innerHeight + 'px');
        $('.s1-bg').css('height', innerHeight + 'px');
        $('.s3').css('height', innerHeight + 'px');
        $('.s3-right').css('height', innerHeight + 'px');
        $('.s4').css('height', innerHeight + 'px');
        $('.s4-right').css('height', innerHeight + 'px');
        $('.s4-left').css('height', innerHeight + 'px');
    });
    $(document).ready(function () {
        $("ul.navbar-nav > li").click(function (e) {
            $("ul.navbar-nav > li").removeClass("active");
            $(this).addClass("active");
        });
    });
    /* S5 */
    $(document).ready(function () {
        var images = $('.s5-img-frame a');
        var index = 0;

        $('.s5-img-frame a').click(function (event) {
            // prevents the default action of following the link
            event.preventDefault();
            var imgSrc = $(this).attr('href');
            index = images.index(this);
            $('#port-gallery').append('<div class="overlay"></div><img src="' + imgSrc + '" class="enlarged-img"><i class="bi bi-chevron-left arrow arrow-left"></i><i class="bi bi-chevron-right arrow arrow-right"></i>');
            $('.overlay, .enlarged-img').fadeIn('fast');
            $('#navbar').css('z-index', '0');
        });

        $('#port-gallery').on('click', '.enlarged-img', function () {
            index = (index + 1) % images.length;
            var imgSrc = images.eq(index).attr('href');
            $('.enlarged-img').attr('src', imgSrc);
        });

        $('#port-gallery').on('click', '.overlay', function () {
            $('.overlay, .enlarged-img').fadeOut('fast', function () {
                $(this).remove();
                $('#navbar').css('z-index', '1000');
            });
        });

        $('#port-gallery').on('click', '.arrow-left', function () {
            index = (index - 1 + images.length) % images.length;
            var imgSrc = images.eq(index).attr('href');
            $('.enlarged-img').attr('src', imgSrc);
        });

        $('#port-gallery').on('click', '.arrow-right', function () {
            index = (index + 1) % images.length;
            var imgSrc = images.eq(index).attr('href');
            $('.enlarged-img').attr('src', imgSrc);
        });
        $(document).keydown(function (e) {
            if (e.keyCode == 37) { // left arrow
                index = (index - 1 + images.length) % images.length;
                var imgSrc = images.eq(index).attr('href');
                $('.enlarged-img').attr('src', imgSrc);
            } else if (e.keyCode == 39) { // right arrow
                index = (index + 1) % images.length;
                var imgSrc = images.eq(index).attr('href');
                $('.enlarged-img').attr('src', imgSrc);
            }
        });
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

// Responsive Design
var screenW = window.screen.width;
if (screenW < 767) {
    new fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
        menu: '#header-nav',
        navigationTooltips: ['HOME', 'ABOUT ME', 'PROFILE', 'CAREER BACKGROUND', 'PORTFOLIO', 'CONTACT'],
    });
} else {
    new fullpage('#fullpage', {
        //options here
        autoScrolling: true,
        navigation: true,
        anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
        menu: '#header-nav',
        navigationTooltips: ['HOME', 'ABOUT ME', 'PROFILE', 'CAREER BACKGROUND', 'PORTFOLIO', 'CONTACT'],
        normalScrollElements: '#s3-container, #s4-container'
    });
}

