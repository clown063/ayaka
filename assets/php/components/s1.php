<div class="section container-fluid g-0 s1" data-anchor="home" id="s1">
    <div class="s1-bg"></div>
    <?php $top_imgs = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];
    for ($i = 0; $i < COUNT($top_imgs); $i++): ?>
        <div style="background-image: url('assets/images/<?php echo $top_imgs[$i] ?>');" alt="Ayaka_Fukada"
            class="s1-imgs bg-image"></div>
    <?php endfor; ?>
    <div class="top-img-dummy"></div>
    <div class="s1-title">
        <h1>Fukada Ayaka</h1>
        <p>Freelance Model</p>
    </div>
</div>