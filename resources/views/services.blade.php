<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Services - Go Digital Technology</title>
</head>

<body>

    <!--preloader-->
    @include('includes.preloader')

    <!--header-info-->
    @include('includes.header-info')

    <!--navbar-->
    @include('includes.navbar')

    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Services</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Accueil</a>
                    </li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/page-banner/shape-1.png') }}" alt="image">
        </div>
        <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/page-banner/shape-2.png') }}" alt="image">
        </div>
        <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/page-banner/shape-3.png') }}" alt="image">
        </div>
        <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/page-banner/shape-4.png') }}" alt="image">
        </div>
    </div>


    <div class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
                <p>Proximité, Réactivité, Performance pour une relation optimale avec nos clients.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="ri-quill-pen-line"></i>
                        </div>
                        <h3>
                            <a href="{{ route('design') }}">Design graphique web et print</a>
                        </h3>
                        <p>La fonction première du design est d'améliorer l'expérience que
                            l'on a d'un produit ou service. Il n'est pas que décoratif, mais fait le lien entre vous la
                            technologie et la
                            qualité de nos services.</p>
                        <a href="{{ route('design') }}" class="services-btn">Voir plus <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon bg-36CC72">
                            <i class="ri-line-chart-fill"></i>
                        </div>
                        <h3>
                            <a href="{{ route('data-analytic') }}">Data Analytics & marketing </a>
                        </h3>
                        <p>Connaître votre marché et les tendances du moment. Être
                            conseillé par des experts en
                            communication web et être épaulé par des graphistes dédiés pour votre projet.
                        </p>
                        <a href="{{ route('data-analytic') }}" class="services-btn">Voir plus <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon bg-FF414B">
                            <i class="ri-lightbulb-line"></i>
                        </div>
                        <h3>
                            <a href="{{ route('conception-ux') }}">Conception UX & UI </a>
                        </h3>
                        <p>L'ergonomie d'un site Internet doit le rendre intuitif à
                            comprendre et à utiliser. L'UX Design couvre à la fois l'ergonomie, l'étude du comportement,
                            l'ethnologie, le contenu et
                            la navigation.
                        </p>
                        <a href="{{ route('conception-ux') }}" class="services-btn">Voir plus <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon bg-FF6D3D">
                            <i class="ri-code-s-slash-line "></i>
                        </div>
                        <h3>
                            <a href="{{ route('developpement-web-mobile') }}">Développement web & mobile </a>
                        </h3>
                        <p>Vous êtes une entreprise de communication et vous recherchez un
                            pure player pour vous épauler
                            et développer votre pôle interactif ? Nous restons disponibles pour vous !</p>
                        <a href="{{ route('developpement-web-mobile') }} " class="services-btn ">Voir plus <i
                                class="ri-arrow-right-line "></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-services ">
                        <div class="icon bg-8932F8 ">
                            <i class="ri-file-search-line "></i>
                        </div>
                        <h3>
                            <a href="{{ route('referencement-seo') }}">Référencement SEO & SEA </a>
                        </h3>
                        <p>Le référencement a pour objectif d'intégrer, de positionner et
                            de maintenir votre site
                            internet en tête des classements des moteurs de recherche afin de générer le plus fort
                            trafic.
                        </p>
                        <a href="{{ route('referencement-seo') }}" class="services-btn ">Voir plus <i
                                class="ri-arrow-right-line "></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-services ">
                        <div class="icon bg-FFCA40 ">
                            <i class="ri-shield-keyhole-line "></i>
                        </div>
                        <h3>
                            <a href="{{ route('cybersecurite') }}">Cybersécurité et risques</a>
                        </h3>
                        <p>Les enjeux de la cybersécurité en entreprise restent mal connus,
                            donc mal pris en compte. Or,
                            les effets d’une cyberattaque, d’une défaillance technique, d’une négligence humaine ou
                            d'une faille système.
                        </p>
                        <a href="{{ route('cybersecurite') }}" class="services-btn ">Voir plus <i
                                class="ri-arrow-right-line "></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shape-1 " data-speed="0.02 " data-revert="true ">
            <img src="{{ asset('assets/images/services/shape-1.png') }}" alt="image ">
        </div>
        <div class="services-shape-2 " data-speed="0.02 " data-revert="true ">
            <img src=" {{ asset('assets/images/services/shape-2.png') }}" alt="image ">
        </div>
        <div class="services-shape-3 " data-speed="0.02 " data-revert="true ">
            <img src=" {{ asset('assets/images/services/shape-3.png') }} " alt="image ">
        </div>
        <div class="services-shape-4 " data-speed="0.02 " data-revert="true ">
            <img src=" {{ asset('assets/images/services/shape-4.png') }}" alt="image ">
        </div>
    </div>


    <div class="process-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box">
                        <i class="ri-hard-drive-line"></i>
                        <p>Research</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box bg-36CC72">
                        <i class="ri-pie-chart-line"></i>
                        <p>Analyse</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box bg-FF414B">
                        <i class="ri-quill-pen-line"></i>
                        <p>Design</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box bg-FF6D3D">
                        <i class="ri-focus-line"></i>
                        <p>Testing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="technology-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="technology-content">
                        <div class="tag">
                            <img src="{{ asset('assets/images/technology/tag-icon.png') }}" alt="image">
                        </div>
                        <h3>Maximiser vos performances digitales à tous les niveaux.</h3>
                        <p>Nous disposons d'une équipe entièrement dédiée à l'innovation
                            marketing et technologique dont
                            la vision est d’assurer un arbitrage multi-levier performant.</p>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="technology-image">
                        <img src="{{ asset('assets/images/technology/technology-1.jpg') }}" alt="image">
                        <a href="https://www.youtube.com/watch?v=od7_8LFha5A" class="video-btn popup-youtube">
                            <i class="ri-play-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="technology-shape-1" data-speed="0.02" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-1.png') }}" alt="image">
        </div>
        <div class="technology-shape-2" data-speed="0.03" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-2.png') }}" alt="image">
        </div>
        <div class="technology-shape-3" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-1.png') }}" alt="image">
        </div>
        <div class="technology-shape-4" data-speed="0.05" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-2.png') }}" alt="image">
        </div>
        <div class="technology-shape-5" data-speed="0.06" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-3.png') }}" alt="image">
        </div>
        <div class="technology-shape-6" data-speed="0.07" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-4.png') }}" alt="image">
        </div>
        <div class="technology-shape-7" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-3.png') }}" alt="image">
        </div>
        <div class="technology-shape-8" data-speed="0.09" data-revert="true">
            <img src="{{ asset('assets/images/technology/shape-4.png') }}" alt="image">
        </div>

    </div>

    <center>
        <div class="banner-btn">
            <a href="{{ route('contact-projet') }}" class="default-btn wow fadeInRight" data-wow-delay="200ms"
                data-wow-duration="1000ms">Demander un devis <i class="ri-arrow-right-line"></i><span></span></a>
        </div>
    </center>

    <!--calltoaction-->
    @include('includes.call-to-action')

    <footer class="footer-area pt-100">
        <!--footer-->
        @include('includes.footer')
    </footer>

    <!--script-->
    @include('includes.script')

</body>

</html>