var topIndex = 0;

swapImages();

function swapImages() {
    var s1_imgs = document.getElementsByClassName("s1-imgs");
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

// Header
var navs = document.querySelectorAll(".navs");
var dropdown_navs_parent = document.getElementById('dropdown-navs-parent');
function active_remove() {
    navs.forEach(nav => {
        nav.classList.remove('active');
    });
    dropdown_navs_parent.classList.remove('active');
};
navs.forEach(nav => {
    nav.addEventListener('click', function () {
        active_remove();
        if (this.classList.contains("drowdown-navs")) {
            dropdown_navs_parent.classList.add('active');
        } else {
            this.classList.add('active');
        }
    });
});