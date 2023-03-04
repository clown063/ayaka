const viewportWidth = window.innerWidth;
const viewportHeight = window.innerHeight;

$(function () {
    $(window).on('load', function () {
        $('.s1').css('height', viewportHeight + 'px');
        var s1_height = viewportHeight - 50;
        $('.s1-imgs').css('height', s1_height + 'px');
        $('.s1-bg').css('height', s1_height + 'px');
        $('.s3').css('height', viewportHeight + 'px');
        $('.s3-right').css('height', viewportHeight + 'px');
        $('.s4').css('height', viewportHeight + 'px');
        $('.s4-right').css('height', viewportHeight + 'px');
        $('.s4-left').css('height', viewportHeight + 'px');
        $('.s5').css('height', viewportHeight + 'px');
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
            $('.overlay, .enlarged-img, .arrow').fadeIn('fast');
            $('#navbar').css('z-index', '998');
        });

        $('#port-gallery').on('click', '.enlarged-img', function () {
            index = (index + 1) % images.length;
            var imgSrc = images.eq(index).attr('href');
            $('.enlarged-img').attr('src', imgSrc);
        });

        $('#port-gallery').on('click', '.overlay', function () {
            $('.overlay, .enlarged-img, .arrow').fadeOut('fast', function () {
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
        $('.s5-video-frame').hover(
            function () {
                $(this).find('a').find('div').find('.s5-play-icon').css('visibility', "visible");
            },
            function () {
                $(this).find('a').find('div').find('.s5-play-icon').css('visibility', "hidden");
            }
        );

    });

    /* Video Player */
    $(document).ready(function () {
        var videos = $('.video-link');
        var index = 0;

        $('.video-link').click(function (event) {
            // prevent the default action of clicking on the link
            event.preventDefault();
            /* to get or set an attribute value of an HTML element */
            var videoSrc = $(this).attr('href');
            index = videos.index(this);
            var videoHTML = '<div class="video-player"><iframe src="' + videoSrc + '" frameborder="0" allowfullscreen></iframe></div><i class="bi bi-chevron-left arrow arrow-left"></i><i class="bi bi-chevron-right arrow arrow-right"></i>';
            $('#port-gallery').append(videoHTML);
            $('.arrow').fadeIn('fast');
            $('#navbar').css('z-index', '998');
        });

        $('#port-gallery').on('click', '.video-player', function () {
            $(this).remove();
            $('.arrow').fadeOut('fast');
            $('#navbar').css('z-index', '1000');
        });

        $('#port-gallery').on('click', '.arrow-left', function () {
            index = (index - 1 + videos.length) % videos.length;
            var videoSrc = videos.eq(index).attr('href');
            $('.video-player iframe').attr('src', videoSrc);
        });

        $('#port-gallery').on('click', '.arrow-right', function () {
            index = (index + 1) % videos.length;
            var videoSrc = videos.eq(index).attr('href');
            $('.video-player iframe').attr('src', videoSrc);
        });
        $(document).keydown(function (e) {
            if (e.keyCode == 37) { // left arrow
                index = (index - 1 + videos.length) % videos.length;
                var videoSrc = videos.eq(index).attr('href');
                $('.video-player iframe').attr('src', videoSrc);
            } else if (e.keyCode == 39) { // right arrow
                index = (index + 1) % videos.length;
                var videoSrc = videos.eq(index).attr('href');
                $('.video-player iframe').attr('src', videoSrc);
            }
        });
    });

    /* Close the header on mobile when user go to the new page */
    $(document).ready(function () {
        // Add click event listener to navigation links
        $('.navs').on('click', function () {
            // Close the navigation menu
            $('.navbar-collapse').collapse('hide');
            // Remove the "active" class from the menu button
            $('.navbar-toggler').removeClass('active');
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
if (viewportWidth < 767) {
    new fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
        menu: '#header-nav',
        navigationTooltips: ['HOME', 'ABOUT ME', 'PROFILE', 'CAREER BACKGROUND', 'PORTFOLIO', 'CONTACT']
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
