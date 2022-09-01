<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Développement web & mobile - Go Digital Technology</title>
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
                <h2>Développement web & mobile
                </h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Services</a>
                    </li>
                    <li>Développement web & mobile
                    </li>
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
                            <li><a href="{{ route('developpement-web-mobile') }}" class="active">Développement web &
                                    mobile
                                </a></li>
                            <li><a href="{{ route('referencement-seo') }}">Référencement SEO & SEA
                                </a></li>
                            <li><a href="{{ route('cybersecurite') }}">Cybersécurité et risques
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
                        <h3>Développement web & mobile</h3>
                        <div class="overview-image">
                            <img src="{{asset('assets/images/services-details/webmobile.jpg')}}" alt="image">
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
                        <p>Vous êtes une entreprise de communication et vous recherchez un
                            pure player pour vous
                            épauler et développer votre pôle interactif ? Vous êtes un entreprise et rechercher une
                            agence capable de vous accompagner sur toutes les technologies web ?</p>
                        <p><b>C’est quoi le développement web et mobile ?</b></p>
                        <p>Le développement web est une discipline qui consiste, par
                            l’usage de langages de
                            programmation web, à programmer des sites web ou applications web (ou web mobile) destiné
                            à être publiés sur des serveurs. Le métier de développeur web demande de savoir manier des
                            outils tels que les CMS ou les frameworks (comme Bootstrap ou bien le framework Symfony par
                            exemple). De plus, maîtriser les langages tels que le HTML et CSS, le JavaScript ou bien le
                            PHP est nécessaire pour être en mesure de répondre aux besoins des clients. </p>
                        <p>En fonction de vos besoins, le développement peut être constitué
                            uniquement de textes et
                            d’éléments graphiques ou être interactif en affichant des informations qui évoluent comme
                            des animations. </p>
                        <p>Les internautes sont devenus très exigeants et votre présence
                            sur le web doit être étudiée
                            et parfaite si vous souhaitez développer votre image de marque et profiter des innombrables
                            opportunités que vous offre le web.</p>
                        <p>Et de toute évidence, cela n’est possible qu’au travers d’un
                            service de développement web
                            sur-mesure expérimenté et adapté à votre service.</p>
                        <p>Notre équipe, expérimentée de développeurs web et mobile, est
                            capable de vous fournir un site
                            ou une application entièrement fonctionnel qui retiendra les visiteurs et incitera à les
                            faire interagir, les convertissant ainsi en clients fidèles.</p>
                        <p>Notre expérience nous permet de répondre aux demandes les plus
                            complexes qui vont de la
                            simple intégration HTML/CSS à l’optimisation du référencement en passant par le
                            développement d’applications métiers complexes.</p>
                        <p>Nous sommes rigoureux sur la qualité de nos livrables, et
                            déterminés à être votre meilleure
                            partenaire digital.</p>
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