<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top <?php if (isset($page)):?> port <?php endif;?>" style="display: block;" id="navbar">
        <div class="container-fluid">
            <div></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav header-nav" id="header-nav">
                    <li class="nav-item me-3 nav-li active" data-menuanchor="home">
                        <a class="nav-link navs" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item me-3 nav-li" data-menuanchor="about-me">
                        <a class="nav-link navs" href="index.php#about-me">About Me</a>
                    </li>
                    <li class="nav-item me-3 nav-li" data-menuanchor="profile">
                        <a class="nav-link navs" href="index.php#profile">Profile</a>
                    </li>
                    <li class="nav-item me-3 nav-li" data-menuanchor="career-background">
                        <a class="nav-link navs" href="index.php#career-background">Career Background</a>
                    </li>
                    <li class="nav-item dropdown me-3 nav-li" data-menuanchor="portfolio">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-navs-parent">
                            Portfolio
                        </a>
                        <ul class="dropdown-menu">
                            <li class="navs drowdown-navs nav-li"><a class="dropdown-item"
                                    href="index.php#portfolio">All</a></li>
                            <li class="navs drowdown-navs nav-li"><a class="dropdown-item" href="port.php?page=beauty">Beauty</a></li>
                            <li class="navs drowdown-navs nav-li"><a class="dropdown-item" href="port.php?page=bridal">Bridal</a></li>
                            <li class="navs drowdown-navs nav-li"><a class="dropdown-item" href="port.php?page=apparel">Apparel</a></li>
                            <li class="navs drowdown-navs nav-li"><a class="dropdown-item" href="port.php?page=movie">Movie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3 nav-li" data-menuanchor="contact">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>