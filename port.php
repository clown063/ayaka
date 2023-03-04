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
                <h1>Movie</h1>
            </div>
            <div class="s5-contents">
                <?php $videos = ['bXwoQD3NOr8', 'SCS0bZucQ20', 'bXwoQD3NOr8', 'SCS0bZucQ20', 'bXwoQD3NOr8', 'SCS0bZucQ20', 'bXwoQD3NOr8', 'SCS0bZucQ20', 'bXwoQD3NOr8', 'SCS0bZucQ20', 'bXwoQD3NOr8', 'SCS0bZucQ20'];
                $video_caps = ['クマのプーさん、実はダイエット中？', 'パンダの大好物はパンデミック？', '私、脳みそよりもお腹が賢いんです', '私の人生哲学：ピザは常に正解！', '人生は短い。だから、常にクッキーを食', '夢中になれることを見つけよう！', 'クマのプーさん、実はダイエット中？', 'パンダの大好物はパンデミック？', '私、脳みそよりもお腹が賢いんです', '私の人生哲学：ピザは常に正解！', '人生は短い。だから、常にクッキーを食', '夢中になれることを見つけよう！'];
                for ($i = 0; $i < COUNT($videos); $i ++):?>
                <div class="s5-video-frame">
                    <a class="video-link" href="https://www.youtube.com/embed/<?php echo $videos[$i] ?>?modestbranding=1">
                        <img src="https://img.youtube.com/vi/<?php echo $videos[$i] ?>/maxresdefault.jpg">
                        <div><i class="bi bi-play-circle s5-play-icon"></i></div>
                    </a>
                    <!-- 18 letters limitation -->
                    <p><?php echo $video_caps[$i] ?></p>
                </div>
                <?php endfor; ?>
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