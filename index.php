<!DOCTYPE html>
<html lang="js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayaka Fukada</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- fullpage.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.css"
        integrity="sha512-JIWkx/Vz4qw2gIbB6CCH0f8TdElaUt22FCIIytW9C792hpBivsgmsBqoIMtlDTbqLI9mCA+PXw4/v6BCRLbtKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka&family=Fredoka+One&family=Hind&family=Inter&family=Laila&family=League+Gothic&family=League+Script&family=League+Spartan:wght@300;500;600;700;800&family=Montserrat&family=Old+Standard+TT&family=Pontano+Sans&family=Poppins&family=Press+Start+2P&family=Quicksand&family=Roboto&family=Share+Tech+Mono&display=swap"
        rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="header-height">
        <div class="container-fluid">
            <div></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav header-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link navs active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link navs" href="#about-me">About Me</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link navs" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link navs" href="#career-background">Career Background</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#portfolio" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-navs-parent">
                            Portfolio
                        </a>
                        <ul class="dropdown-menu">
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#beauty">Beauty</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#bridal">Bridal</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#apparel">Apparel</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#movie">Movie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main id="fullpage">
        <div class="section container-fluid g-0 s1">
            <div class="s1-img-frame g-0">
                <?php $top_imgs = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];
                for ($i = 0; $i < COUNT($top_imgs); $i++): ?>
                    <img src="assets/images/<?php echo $top_imgs[$i] ?>" alt="Ayaka_Fukada" class="s1-imgs" />
                <?php endfor; ?>
            </div>
            <div class="top-img-dummy"></div>
            <div class="s1-title">
                <h1>Fukada Ayaka</h1>
                <p>Freelance Model</p>
            </div>
        </div>
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>
    </main>
    <!-- Bootstrap -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- fullpage.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.js"
        integrity="sha512-zAHJKGyoPf2Y20Wi4uo32sa/vSvwKfY4tYUt6gJfmkA79X0wt5ZfaxL5GqJ5cMnmvGslWi5PKTo51rHRZqYbJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
    <script>
        new fullpage('#fullpage', {
            //options here
            autoScrolling: true,
            navigation: true,
            anchors: ['section1', 'section2', 'section3', 'section4'],
            navigationTooltips: ['Home', 'About us', 'hey', 'min']
        });
    </script>
</body>

</html>