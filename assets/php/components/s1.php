<div class="section container-fluid g-0 s1" data-anchor="home">
    <div class="s1-img-frame g-0">
        <?php $top_imgs = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];
        for ($i = 0; $i < COUNT($top_imgs); $i++): ?>
            <div style="background-image: url('assets/images/<?php echo $top_imgs[$i] ?>');" alt="Ayaka_Fukada"
                class="s1-imgs"></div>
        <?php endfor; ?>
    </div>
    <div class="top-img-dummy"></div>
    <div class="s1-title">
        <h1>Fukada Ayaka</h1>
        <p>Freelance Model</p>
    </div>
</div>