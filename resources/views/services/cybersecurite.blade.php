<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Cybersécurité et risques - Go Digital Technology</title>
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
                <h2>Cybersécurité et risques</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Services</a>
                    </li>
                    <li>Cybersécurité et risques</li>
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


    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="services-details-information">
                        <ul class="services-list">
                            <li><a href="{{ route('design') }}">Design graphique web et print
                                </a></li>
                            <li><a href="{{ route('data-analytic') }}">Data Analytics & marketing
                                </a></li>
                            <li><a href="{{ route('conception-ux') }}">Conception UX & UI
                                </a></li>
                            <li><a href="{{ route('developpement-web-mobile') }}">Développement web & mobile
                                </a></li>
                            <li><a href="{{ route('referencement-seo') }}">Référencement SEO & SEA
                                </a></li>
                            <li><a href="{{ route('cybersecurite') }}" class="active">Cybersécurité et risques
                                </a></li>
                        </ul>
                        <div class="services-contact-info">
                            <h3>Expertise Digitale & Innovation Technologique.</h3>
                            <div class="info-box-one">
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:+22961456464">(229) 61456464</a>
                            </div>
                            <div class="info-box-two">
                                <i class="ri-earth-line"></i>
                                <a
                                    href="{{ 'mailto:agence@godigital.technology'}}"><span>agence@godigital<br>.technology</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="services-details-overview-content">
                        <h3>Cybersécurité et risques</h3>
                        <div class="overview-image">
                            <img src="{{asset('assets/images/services-details/security.png')}}" alt="image">
                            <div class="shape-1" data-speed="0.08" data-revert="true">
                                <img src="{{asset('assets/images/services-details/shape-1.png')}}" alt="image">
                            </div>
                            <div class="shape-2" data-speed="0.08" data-revert="true">
                                <img src="{{asset('assets/images/services-details/shape-2.png')}}" alt="image">
                            </div>
                            <div class="shape-3" data-speed="0.08" data-revert="true">
                                <img src="{{asset('assets/images/services-details/shape-3.png')}}" alt="image">
                            </div>
                        </div><br>
                        <p>Les enjeux de la cybersécurité en entreprise restent mal connus,
                            donc mal pris en compte.
                            Or, les effets d’une cyberattaque, d’une défaillance technique ou d’une négligence humaine
                            peuvent sérieusement impacter l’activité d’une organisation. Il est indispensable d’ériger
                            des garde-fous pour se prémunir contre ces risques « cyber ».</p>
                        <p>Prévenir les attaques et renforcer votre cyberdéfense
                            Aujourd’hui le numérique est omniprésent. Nous disposons de plus en plus de moyens de
                            communication connectés, gagnant en simplicité et accessibilité.
                        </p>
                        <p>Autant d’outils aussi indispensables que vulnérables, garants
                            d’informations critiques et de
                            données sensibles. De la data dont il faut impérativement assurer la sécurité, prévenir les
                            failles et anticiper les menaces pour éviter toute perte économique ou stratégique
                            désastreuse.</p>
                        <p>Vous conseillez et vous accompagner dans la sécurisation
                            numérique de votre entreprise.</p>
                        <p>Notre univers numérique est extrêmement sensible face à des
                            risques et cyberattaques
                            inédites, qui visent l’ensemble des usagers et des infrastructures. Il est donc
                            indispensable d’en comprendre les écueils pour voir aboutir des solutions pérennes de
                            protection et de gestion des menaces.</p>
                        <p>Go Digital Technology vous accompagne dans tous vos projets de
                            transformation numérique, de
                            protection de données sensibles et vous aide à faire face aux nouveaux enjeux de la
                            cybersécurité ; et ce dans plusieurs sous-domaine comme : </p>

                        <p>
                            <li>AUDIT SSI (Connaître son niveau d'exposition aux cybermenaces) </li>
                            <li>CONSEIL SSI (Organiser, cadrer et accompagner les risques et la cybersécurité)
                            </li>
                            <li>SÉCURITÉ OPÉRATIONNELLE (Déployer des solutions technologiques de protection des SI)
                            </li>
                            <li>IDENTITÉ NUMÉRIQUE (Maîtriser ses identités et ses accès)</li>
                            <li>C-SIRT (Prévenir et anticiper les menaces et risques cyber)
                            </li>
                            <li>Cybersécurité INDUSTRIELLE (Organiser, cadrer et maitriser les menaces et vulnérabilités
                                au sein d’une industrie </li><br>
                        </p>
                        <div class="banner-btn">
                            <a href="{{ route('contact-projet') }}" class="default-btn wow fadeInRight"
                                data-wow-delay="200ms" data-wow-duration="1000ms">Demander un devis <i
                                    class="ri-arrow-right-line"></i><span></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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