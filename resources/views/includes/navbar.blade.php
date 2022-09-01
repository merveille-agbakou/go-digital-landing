<!-- ==========Navbar-Section========== -->

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img width="200" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link active">
                                Agence
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Academy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Solution by Go
                                <i class="ri-add-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" target="_blank"
                                        class="nav-link">Kawastack</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('https://kawainfluenceurs.com') }}" target="_blank"
                                        class="nav-link">Kawa
                                        Influenceurs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('https://kawacard.com') }}" target="_blank"
                                        class="nav-link">Kawacard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('https://xohaya.net') }}" target="_blank"
                                        class="nav-link">Xohaya</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" target="_blank"
                                        class="nav-link">iMagic Creative</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" target="_blank" class="nav-link">Omix Secure</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Portfolio
                                <i class="ri-add-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('portofolio-application') }}" class="nav-link">Application</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('design-graphique') }}" class="nav-link">Design</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class="ri-add-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ url('https://godigital.technology/blog') }}"
                                        class="nav-link">Articles</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">PodCast</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Vidéos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact
                            </a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{ route('contact-projet') }}" class="default-btn">Avoir un devis <i
                                    class="ri-message-line"></i><span></span></a>
                        </div>
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search..." type="text">
                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                            <a href="{{ route('contact-projet') }}" class="default-btn">Demander un devis <i
                                    class="ri-message-line"></i><span></span></a>
                        </div>
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <div class="title">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="sidebar-content">
                    <h3>A propos de nous</h3>
                    <p>Agence de conseil et d’ingénierie spécialisé dans les métiers du
                        Système d’informations et Marketing.</p>
                    <div class="sidebar-btn">
                        <a href="{{ route('contact-projet') }}" class="default-btn">Demander un devis <i
                                class="ri-message-line"></i><span></span></a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:+22961456464">+ 229 61 45 64 64</a></li>
                        <li><i class="ri-mail-line"></i>
                            <a> <span class="__cf_email__">agence@godigital.technology</span> </a>
                        </li>
                        <li><i class="ri-map-pin-line"></i> Cotonou, Bénin Kindonou </li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com/godigitalcommunication" target="_blank">
                            <i class="ri-facebook-line"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/godigitalbenin/" target="_blank">
                            <i class="ri-instagram-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/go-digital-benin/" target="_blank">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UClqbO3J5ZO07vCEECrGroXw" target="_blank">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- ==========Navbar-Section========== -->