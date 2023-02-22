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
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <div></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav header-nav" id="header-nav">
                    <li class="nav-item me-3" data-menuanchor="home">
                        <a class="nav-link navs" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-3" data-menuanchor="about-me">
                        <a class="nav-link navs" href="#about-me">About Me</a>
                    </li>
                    <li class="nav-item me-3" data-menuanchor="profile">
                        <a class="nav-link navs" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item me-3" data-menuanchor="career-background">
                        <a class="nav-link navs" href="#career-background">Career Background</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-navs-parent">
                            Portfolio
                        </a>
                        <ul class="dropdown-menu">
                            <li class="navs drowdown-navs" data-menuanchor="portfolio"><a class="dropdown-item"
                                    href="#portfolio">All</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#beauty">Beauty</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#bridal">Bridal</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#apparel">Apparel</a></li>
                            <li class="navs drowdown-navs"><a class="dropdown-item" href="#movie">Movie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3" data-menuanchor="contact">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="fullpage">
        <div class="section container-fluid g-0 s1" data-anchor="home">
            <div class="s1-img-frame g-0">
                <?php $top_imgs = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];
                for ($i = 0; $i < COUNT($top_imgs); $i++): ?>
                    <img data-src="assets/images/<?php echo $top_imgs[$i] ?>" alt="Ayaka_Fukada" class="s1-imgs" />
                <?php endfor; ?>
            </div>
            <div class="top-img-dummy"></div>
            <div class="s1-title">
                <h1>Fukada Ayaka</h1>
                <p>Freelance Model</p>
            </div>
        </div>
        <div class="section container-lg s2 g-0" data-anchor="about-me">
            <div class="row m-auto g-0 justify-content-center">
                <div class="col-12 col-md-6 g-0 left">
                    <div class="name s2-name">
                        <h1>Ayaka</h1>
                    </div>
                    <div class="brief-profiles">
                        <div class="brief-profile sm">
                            <ul>
                                <li>深田彩華 / freelance model</li>
                                <li>📍Tokyo / 163cm / Model</li>
                                <li>Born in Fukuoka City, Fukuoka Prefecture</li>
                                <li>1998.05.02 (24)</li>
                            </ul>
                        </div>
                        <div class="brief-profile lg">
                            <ul>
                                <li>広告、ビューティー、ブライダル、アパレルetc...</li>
                                <li>ミスチャペル2023 グランプリ👰🏼</li>
                                <li>撮影のご依頼はDMへお願いします💌</li>
                            </ul>
                        </div>
                    </div>
                    <nav class="s2-nav">
                        <ul>
                            <li><a href="https://www.instagram.com/fukada_ayaka/"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li><a href="https://twitter.com/ayakapartner"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="https://vt.tiktok.com/ZSeQMN273/"><i class="bi bi-tiktok"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-none d-md-flex col-md-6 right g-0">
                    <div class="s2-img-frame">
                        <img data-src="assets/images/2.jpg" alt="Ayaka_Fukada" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section container-lg s3" data-anchor="profile">
            <div class="row m-auto g-0">
                <div class="d-none d-md-flex col-md-6 g-0 left s3-left">
                    <div class="s3-img-frame">
                        <img data-src="assets/images/3.jpg" alt="Ayaka_Fukada" />
                    </div>
                    <div class="name s3-name">
                        <h1>Ayaka</h1>
                        <p>Freelance model</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 g-0 s3-right">
                    <div class="s3-container" id="s3-container">
                        <div class="s3-title">
                            <h1>Profile</h1>
                        </div>
                        <div class="s3-title-p">
                            <p>深田彩華と言います。ミスチャペル2023でグランプリを獲りました。よろしくお願いします。</p>
                        </div>
                        <div class="profile-contents">
                            <div class="tiles top">
                                <div class="tiles-title">
                                    <h2>出身・誕生日</h2>
                                </div>
                                <div class="tiles-p-container">
                                    <div class="tiles-p">
                                        <p>福岡県・1998年5月2日 (24歳)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-contents">
                            <div class="tiles">
                                <div class="tiles-title">
                                    <h2>モデル歴</h2>
                                </div>
                                <div class="tiles-p-container">
                                    <div class="tiles-p">
                                        <p>11年</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-contents">
                            <div class="tiles">
                                <div class="tiles-title">
                                    <h2>趣味</h2>
                                </div>
                                <div class="tiles-p-container">
                                    <div class="tiles-p">
                                        <p>料理</p>
                                        <p>サウナ</p>
                                        <p>温泉巡り</p>
                                        <p>美容</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-contents">
                            <div class="tiles">
                                <div class="tiles-title">
                                    <h2>サイズ</h2>
                                </div>
                                <div class="tiles-p-container">
                                    <div class="tiles-p">
                                        <p>洋服: S-Mサイズ</p>
                                        <p>ドレス: 5-7号</p>
                                        <p>指輪: 7,8号</p>
                                    </div>
                                    <div class="tiles-p">
                                        <p>Height: 163</p>
                                        <p>Bust: 78</p>
                                        <p>Waist: 57</p>
                                        <p>Hip: 83</p>
                                        <p>Shoes: 24.5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-contents">
                            <div class="tiles">
                                <div class="tiles-title">
                                    <h2>コンポジット</h2>
                                </div>
                                <div class="tiles-p-container">
                                    <div class="tiles-p">
                                        <p><a href="composite/コンポジット2023.02- copy.pdf" rel="noopener"
                                                target="_blank">Click
                                                Here
                                                to Download</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section container border s4" data-anchor="career-background"></div>
        <div class="section container border s5" data-anchor="portfolio"></div>
        <div class="section container border s6" data-anchor="contact"></div>
    </div>
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
            anchors: ['home', 'about-me', 'profile', 'career-background', 'portfolio', 'contact'],
            menu: '#header-nav',
            navigationTooltips: ['HOME', 'ABOUT ME', 'PROFILE', 'CAREER BACKGROUND', 'PORTFOLIO', 'CONTACT'],
            normalScrollElements: '#s3-container'
        });
    </script>
</body>

</html>