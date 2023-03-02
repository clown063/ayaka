<?php
$page = $_GET['page'];

include 'assets/php/components/head.php';
include 'assets/php/components/nav.php';
?>
<div class="container-lg g-0" id="port-gallery">
    <?php if ($page == "beauty"): ?>
        <div class="s5-container">
            <div class="s5-title">
                <h1>Beauty</h1>
            </div>
            <div class="s5-contents">
                <?php $top_imgs = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg"];
                for ($i = 0; $i < COUNT($top_imgs); $i++): ?>
                    <div class="s5-img-frame">
                        <a href="assets/images/<?php echo $top_imgs[$i] ?>"><img src="assets/images/<?php echo $top_imgs[$i] ?>"
                                alt="Ayaka Fukada"></a>
                    </div>
                <?php endfor;
                ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($page == "movie"): ?>
        <div class="s5-container">
            <div class="s5-title">
                <h1>Beauty</h1>
            </div>
            <div class="s5-contents">
                <div class="s5-img-frame movie">
                    <iframe width="560" height="315" src="https://youtube.com/shorts/ZyLCi3p4J9Q?feature=share"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<!-- Bootstrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<!-- fullpage.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.js"
    integrity="sha512-zAHJKGyoPf2Y20Wi4uo32sa/vSvwKfY4tYUt6gJfmkA79X0wt5ZfaxL5GqJ5cMnmvGslWi5PKTo51rHRZqYbJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JavaScript -->
<script src="assets/js/script.js"></script>
</body>

</html>