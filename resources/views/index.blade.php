<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Go Digital Technology - Accompagne la transformation digitale des grandes organisations</title>
</head>

<body>

    <!--preloader-->
    @include('includes.preloader')

    <!--navbar-->
    @include('includes.navbar')

    <div class="main-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="main-banner-content">
                        <div class="tag wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <img src="{{ asset('assets/images/favicon.png') }}" alt="image"
                                style="width:20px;height:20px;">
                            # Go Digital Technology
                        </div>
                        <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Expertise
                            Digitale & Innovation</h1>
                        <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Chez <b>Go Digital
                                Technology</b>, nous avons la conviction que la technologie mise au service de l’homme
                            permet d’accéder à un monde meilleur.
                            En conjuguant technologie, créativité & data, Go Digital Technology accompagne ses clients
                            dans la <b>transformation digitale</b> de leurs activités afin de libérer leur
                            <b>potentiel</b>.
                        </p>
                        <div class="banner-btn">
                            <a href="{{ route('contact-projet') }}" class="default-btn wow fadeInRight"
                                data-wow-delay="200ms" data-wow-duration="1000ms">Demander
                                un devis <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="main-banner-animation-image">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img1.png') }}" class="wow fadeInDown"
                            data-wow-delay="200ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img2.png') }}" class="wow fadeInDown"
                            data-wow-delay="300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img3.png') }}" class="wow fadeInDown"
                            data-wow-delay="400ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img4.png') }}" class="wow fadeInDown"
                            data-wow-delay="900ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img5.png') }}" class="wow fadeInUp"
                            data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img6.png') }}" class="wow fadeInDown"
                            data-wow-delay="700ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img7.png') }}" class="wow fadeInDown"
                            data-wow-delay="800ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img8.png') }}" class="wow fadeInDown"
                            data-wow-delay="800ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img9.png') }}" class="wow fadeInDown"
                            data-wow-delay="1000ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img10.png') }}" class="wow fadeInDown"
                            data-wow-delay="100ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img11.png') }}" class="wow fadeInDown"
                            data-wow-delay="300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img12.png') }}" class="wow fadeInLeft"
                            data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img13.png') }}" class="wow fadeInLeft"
                            data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img14.png') }}" class="wow fadeInLeft"
                            data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/img15.png') }}" class="wow fadeInLeft"
                            data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06"
                            data-revert="true">
                        <img src="{{ asset('assets/images/main-banner/banner-one/main-pic.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-shape-1">
            <img src="{{ asset('assets/images/main-banner/banner-one/shape-1.png') }}" alt="image">
        </div>
        <div class="main-banner-shape-2">
            <img src="{{ asset('assets/images/main-banner/banner-one/shape-2.png') }}" alt="image">
        </div>
        <div class="main-banner-shape-3">
            <img src="{{ asset('assets/images/main-banner/banner-one/shape-3.png') }}" alt="image">
        </div>
        <div class="main-banner-shape-4">
            <img src="{{ asset('assets/images/main-banner/banner-one/shape-4.png') }}" alt="image">
        </div>
    </div>


    <div class="partner-area">
        <div class="container">
            <div class="partner-box">
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-1.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-2.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-3.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-4.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-5.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-1.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-2.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-3.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-4.png') }}" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="{{ asset('assets/images/partner/partner-5.png') }}" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-shape-1" data-speed="0.06" data-revert="true">
            <img src="{{ asset('assets/images/partner/shape-1.png') }}" alt="image">
        </div>
        <div class="partner-shape-2" data-speed="0.06" data-revert="true">
            <img src="{{ asset('assets/images/partner/shape-2.png') }}" alt="image">
        </div>
    </div>


    <div class="features-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="{{ route('services') }}"><img src="{{asset('assets/images/features/features-1.png')}}"
                                alt="image"></a>
                        <h3>
                            <a href="{{ route('services') }}">Innovation</a>
                        </h3>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="{{ route('services') }}"><img
                                src="{{ asset('assets/images/features/features-2.png') }}" alt="image"></a>
                        <h3>
                            <a href="{{ route('services') }}">Performance </a>
                        </h3>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="{{ route('services') }}"><img
                                src="{{ asset('assets/images/features/features-3.png') }}" alt="image"></a>
                        <h3>
                            <a href="{{ route('services') }}">Réactivité</a>
                        </h3>


                    </div>
                </div>
            </div>
        </div>
        <div class="features-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/features/shape-1.png') }}" alt="image">
        </div>
        <div class="features-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/features/shape-2.png') }}" alt="image">
        </div>
        <div class="features-shape-3">
            <img src="{{ asset('assets/images/features/shape-3.png') }}" alt="image">
        </div>
        <div class="features-shape-4">
            <img src="{{ asset('assets/images/features/shape-4.png') }}" alt="image">
        </div>
    </div>

    <div class="experiences-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="experiences-item">
                        <div class="experiences-content">
                            <div class="tag">
                                <img src="{{ asset('assets/images/experiences/tag-icon.png') }}" alt="image">
                            </div>
                            <h3>Une expertise au service de nos clients</h3>
                            <p style="text-align:justify">Depuis 2018, Go Digital Technology met un point d’honneur à
                                proposer un accompagnement
                                personnalisé à chacun de ses clients, quelle que soit la taille de son entreprise, son
                                budget, et son secteur d’activité.</p>

                        </div>
                        <div class="experiences-inner-content">
                            <img src="{{ asset('assets/images/experiences/img1.png') }}" alt="image">
                            <p style="text-align:justify">Notre équipe met toute son expertise au service de ses
                                clients, pour faciliter la mise en
                                œuvre et en la pérennité de leurs projets de création de sites internet, d’applications
                                web
                                ou mobile et de marketing digital.</p>
                        </div>
                        <div class="experiences-inner-content">
                            <img src="{{ asset('assets/images/experiences/img2.png') }}" alt="image">
                            <p style="text-align:justify">Afin de vous garantir les meilleures performances,
                                l’ensemble de nos consultants assurent
                                un suivi 100 % personnalisé à l’ensemble de nos clients. Chacun de vos besoins et
                                objectifs est ainsi minutieusement pris en compte afin
                                de vous offrir une meilleure expérience. </p>
                        </div>
                        <div class="experiences-inner-content">
                            <img src="{{ asset('assets/images/experiences/img3.png') }}" alt="image">
                            <p style="text-align:justify">Où que vous soyez, nos consultants viennent à votre
                                rencontre pour discuter et construire
                                ensemble votre projet digital personnalisé, qui répondra à l’ensemble de vos besoins et
                                objectifs.
                            </p>
                        </div>
                        <div class="experiences-btn">
                            <a href="{{ route('portofolio-application') }}" class="default-btn">Portfolio <i
                                    class="ri-arrow-right-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experiences-image" data-speed="0.02" data-revert="true">
                        <img src="{{ asset('assets/images/experiences/experiences-1.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="experiences-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-1.png') }}" alt="image">
        </div>
        <div class="experiences-shape-2" data-speed="0.06" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-2.png') }}" alt="image">
        </div>
        <div class="experiences-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-3.png') }}" alt="image">
        </div>
        <div class="experiences-shape-4" data-speed="0.06" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-2.png') }}" alt="image">
        </div>
        <div class="experiences-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-3.png') }}" alt="image">
        </div>
        <div class="experiences-shape-6" data-speed="0.06" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-4.png') }}" alt="image">
        </div>
        <div class="experiences-shape-7" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/experiences/shape-5.png') }}" alt="image">
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


    <div class="support-area">
        <div class="container">
            <div class="support-content">
                <div class="tag">
                    <img src="{{ asset('assets/images/experiences/tag-icon.png') }}" alt="image">
                </div>
                <h3>Maximiser vos performances digitales à tous les niveaux. </h3>
                <p>Nous disposons d'une équipe entièrement dédié à l'innovation marketing
                    et technologique dont la
                    vision est d’assurer un arbitrage multi-leviers performant.
                </p>
            </div>
        </div>
        <div class="support-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/support/shape-1.png') }}" alt="image">
        </div>
        <div class="support-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/support/shape-2.png') }}" alt="image">
        </div>
        <div class="support-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/support/shape-3.png') }}" alt="image">
        </div>
        <div class="support-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/support/shape-4.png') }}" alt="image">
        </div>
        <div class="support-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{ asset('assets/images/support/shape-5.png') }}" alt="image">
        </div>
        <div class="support-shape-6" data-speed="0.02" data-revert="true">
            <img src="{{ asset('assets/images/support/shape-6.png') }}" alt="image">
        </div>
    </div>


    <div class="cases-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Nos réalisations</h2>
                <p>Go Digital Technology accompagne plus de 150 entreprises au quotidien dans l'innovation digitale et
                    l'identité de leurs marques.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.mysoccernetwork.godigital">
                                <img src="{{ asset('assets/images/cases-study/mobile/2.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Mobile</div>
                            <div class="tag-2">Réseau Social</div>
                            <h3>
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.mysoccernetwork.godigital">My
                                    Soccer Network</a>
                            </h3>
                            <p>My Soccer Network, est un
                                réseau social pour faciliter les
                                rencontres entre acteurs du
                                monde du football amateur ! Le
                                LinkedIn du foot, vous permet de
                                trouver un joueur, un club, un
                                agent, un ostéopathe, et de gérer
                                votre carrière !</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="">
                                <img src="{{ asset('assets/images/cases-study/mobile/3.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Mobile</div>
                            <div class="tag-2">Spectacle</div>
                            <h3>
                                <a target="_blank" href="">What2Plan</a>
                            </h3>
                            <p>What2plan se définit comme étant la meilleure application
                                sur laquelle les bons plans
                                sont disponibles. Découvrez avec ce dernier combien de fois, c'est facile de trouver
                                un restaurant, l'accès à un spectacle ou un événement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.comhairage.godigital">
                                <img src="{{ asset('assets/images/cases-study/mobile/5.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Mobile</div>
                            <div class="tag-2">Prestation</div>
                            <h3>
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.comhairage.godigital">Comhairage</a>
                            </h3>
                            <p>Comhairage est une application
                                mobile de prestation de services
                                qui permet de réserver un service
                                dans le domaine de la beauté. Elle
                                est rattachée à l’entreprise
                                Community Management Privé qui
                                est une société de communication,
                                créée en 2016.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="https://kawacard.com">
                                <img src="{{ asset('assets/images/cases-study/10.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Application web</div>
                            <div class="tag-2">Achat</div>
                            <h3>
                                <a target="_blank" href="https://kawacard.com">Kawacard</a>
                            </h3>
                            <p>Kawacard est un moyen rapide et sécurisé d'acheter des
                                cartes virtuelles Mastercard.
                                Achetez en ligne et sur tous les sites
                                acceptants les cartes MasterCard avec les cartes virtuelles Kawa.</p>
                        </div>
                    </div>
                </div>
                <div class="cases-view-all-btn">
                    <a href="{{ route('portofolio-application') }}" class="default-btn">Voir tous les projets <i
                            class="ri-briefcase-line"></i><span></span></a>
                </div>
            </div>
        </div>
        <div class="cases-shape-1" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-1.png') }}" alt="image">
        </div>
        <div class="cases-shape-2" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-2.png') }}" alt="image">
        </div>
        <div class="cases-shape-3" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-3.png') }}" alt="image">
        </div>
        <div class="cases-shape-4" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-4.png') }}" alt="image">
        </div>
        <div class="cases-shape-5" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-5.png') }}" alt="image">
        </div>
        <div class="cases-shape-6" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-4.png') }}" alt="image">
        </div>
        <div class="cases-shape-7" data-speed="0.04" data-revert="true">
            <img src="{{ asset('assets/images/cases-study/shape-5.png') }}" alt="image">
        </div>
    </div>


    <div class="clients-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Ce que disent nos clients</h2>
                <p>Nous croyons aux relations qui comptent !</p>
            </div>
            <div class="clients-slides owl-carousel owl-theme">
                <div class="clients-item">
                    <img src="{{ asset('assets/images/clients/clients-1.jpg') }}" alt="image"
                        style="width:85px;height:85px;">
                    <p>"Agence vraiment au top. Force de proposition. Très professionnel.
                        Je recommande à 100 %. Merci pour cette qualité de service qui est une réelle valeur ajoutée."
                    </p>
                    <div class="title-name">
                        <h3>Doris Sibi</h3>
                        <span>CEO My Soccer Network</span><br> <span>FRANCE</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="{{ asset('assets/images/clients/shape-4.png') }}" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('assets/images/clients/shape-5.png') }}" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="{{ asset('assets/images/clients/shape-6.png') }}" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="{{ asset('assets/images/clients/clients-2.jpg') }}" alt="image"
                        style="width:85px;height:85px;">
                    <p>"Une confiance acquise par un travail de qualité. Merci à l'équipe
                        de Go Digital Technology pour l'impact apporté à mon projet."</p>
                    <div class="title-name">
                        <h3>Chancy Ondo</h3>
                        <span>Conseiller financier</span><br>
                        <span>GABON</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1 ">
                        <img src=" {{ asset('assets/images/clients/shape-4.png') }}" alt="image ">
                    </div>
                    <div class="shape-2 ">
                        <img src=" {{ asset('assets/images/clients/shape-5.png') }}" alt="image ">
                    </div>
                    <div class="shape-3 ">
                        <img src=" {{ asset('assets/images/clients/shape-6.png') }}" alt="image ">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="{{ asset('assets/images/clients/clients-3.png') }}" alt="image"
                        style="width:85px;height:85px;">
                    <p>"Je tiens à souligner le professionnalisme de Go Digital Technology
                        pour sa disponibilité et sa fiabilité, tout au long des projets avec l'équipe du baromètre. Nous
                        en sommes heureux."</p>
                    <div class=" title-name ">
                        <h3>Déo Gracias HOUNDOLO
                        </h3>
                        <span>CEO Baromètre</span><br>
                        <span>BENIN</span>
                    </div>
                    <div class="star-rating ">
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                    </div>
                    <div class="shape-1 ">
                        <img src=" {{ asset('assets/images/clients/shape-4.png') }}" alt="image ">
                    </div>
                    <div class="shape-2 ">
                        <img src=" {{ asset('assets/images/clients/shape-5.png') }}" alt="image ">
                    </div>
                    <div class="shape-3 ">
                        <img src=" {{ asset('assets/images/clients/shape-6.png') }}" alt="image ">
                    </div>
                </div>
                <div class="clients-item ">
                    <img src=" {{ asset('assets/images/clients/clients-4.jpeg') }}" alt="image "
                        style="width:85px;height:85px;">
                    <p>"Une très belle collaboration, dans le respect et la confiance. Une
                        vraie force de propositions, un suivi personnalisé et une grande disponibilité pour chacun de
                        mes projets."</p>
                    <div class="title-name ">
                        <h3>Jean Philippe GUIDIBI</h3>
                        <span>Entrepreneur, spécialiste du foncier et de l'immobilier en Afrique</span><br>
                        <span>CANADA</span>
                    </div>
                    <div class="star-rating ">
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                    </div>
                    <div class="shape-1 ">
                        <img src=" {{ asset('assets/images/clients/shape-4.png') }}" alt="image ">
                    </div>
                    <div class="shape-2 ">
                        <img src=" {{ asset('assets/images/clients/shape-5.png') }}" alt="image ">
                    </div>
                    <div class="shape-3 ">
                        <img src=" {{ asset('assets/images/clients/shape-6.png') }}" alt="image ">
                    </div>
                </div>
                <div class="clients-item ">
                    <img src=" {{ asset('assets/images/clients/clients-5.jpg') }}" alt="image "
                        style="width:85px;height:85px;">
                    <p>"Ce fut un grand plaisir de travailler avec Go Digital Technology,
                        Je n’hésiterai pas à collaborer de nouveau avec eux sur de nouveaux projets."</p>
                    <div class="title-name ">
                        <h3>Agathe Mensah</h3>
                        <span>CEO Finance Horizons</span><br>
                        <span>FRANCE </span>
                    </div>
                    <div class="star-rating ">
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                        <i class="ri-star-fill "></i>
                    </div>
                    <div class="shape-1 ">
                        <img src=" {{ asset('assets/images/clients/shape-4.png') }}" alt="image ">
                    </div>
                    <div class="shape-2 ">
                        <img src=" {{ asset('assets/images/clients/shape-5.png') }}" alt="image ">
                    </div>
                    <div class="shape-3 ">
                        <img src=" {{ asset('assets/images/clients/shape-6.png') }}" alt="image ">
                    </div>
                </div>

            </div>
        </div>
        <div class="clients-shape-1 " data-speed="0.08 " data-revert="true ">
            <img src=" {{ asset('assets/images/clients/shape-1.png') }}" alt="image ">
        </div>
        <div class="clients-shape-2 " data-speed="0.08 " data-revert="true ">
            <img src=" {{ asset('assets/images/clients/shape-2.png') }}" alt="image ">
        </div>
        <div class="clients-shape-3 " data-speed="0.08 " data-revert="true ">
            <img src=" {{ asset('assets/images/clients/shape-3.png') }}" alt="image ">
        </div>
    </div>

    <div class="blog-area pt-100 pb-70 ">
        <div class="container ">
            <div class="section-title ">
                <h2>Article de blog populaire</h2>
                <p>Les articles les plus lus</p>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-blog ">
                        <div class="blog-image ">
                            <a
                                href="{{ url('https://godigital.technology/blog/quelles-sont-les-synergies-entre-le-seo-et-lux/') }}"><img
                                    src=" {{ asset('assets/images/blog/blog-1.jpg') }}" alt="image "></a>
                        </div>
                        <div class="blog-content ">
                            <ul class="entry-meta ">
                                <li class="tag ">UX/DESIGN</li>
                                <li class="tag ">SEO</li>

                            </ul>
                            <h3>
                                <a
                                    href="{{ url('https://godigital.technology/blog/quelles-sont-les-synergies-entre-le-seo-et-lux/') }}">Quelles
                                    sont les synergies entre le SEO et l’UX ?
                                </a>
                            </h3>
                            <p>c’est un mot qui évolue chaque jour, et ceci est fonction des domaines qu’il brasse.
                                Certains penseront qu’il touche uniquement le monde numérique, mais cela va au-delà.</p>
                            <a href="{{ url('https://godigital.technology/blog/quelles-sont-les-synergies-entre-le-seo-et-lux/') }}"
                                class="blog-btn ">Voir plus <i class="ri-arrow-right-line "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-blog ">
                        <div class="blog-image ">
                            <a
                                href="{{ url('https://godigital.technology/blog/google-devoile-la-puissance-de-son-nouveau-moteur-de-recherche-lors-du-google-io-2021/') }} "><img
                                    src=" {{ asset('assets/images/blog/blog-2.png') }}" alt="image "></a>
                        </div>
                        <div class="blog-content ">
                            <ul class="entry-meta ">
                                <li class="tag ">SEO</li>

                            </ul>
                            <h3>
                                <a
                                    href="{{ url('https://godigital.technology/blog/google-devoile-la-puissance-de-son-nouveau-moteur-de-recherche-lors-du-google-io-2021/') }}">Google
                                    dévoile la puissance de son nouveau moteur de recherche lors du Google IO 2021
                                </a>
                            </h3>
                            <P>La nouvelle génération du moteur de recherche (MUM) , elle est la nouvelle technologie de
                                google.</P>
                            <a href="{{ url('https://godigital.technology/blog/google-devoile-la-puissance-de-son-nouveau-moteur-de-recherche-lors-du-google-io-2021') }} "
                                class="blog-btn ">Voir plus <i class="ri-arrow-right-line "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-blog ">
                        <div class="blog-image ">
                            <a
                                href="{{ url('https://godigital.technology/blog/votre-strategie-marketing-psg-puissante-surprenante-gagnante/') }}"><img
                                    src=" {{ asset('assets/images/blog/blog-3.png') }}" alt="image "></a>
                        </div>
                        <div class="blog-content ">
                            <ul class="entry-meta ">
                                <li class="tag ">Marketing</li>

                            </ul>
                            <h3>
                                <a
                                    href="{{ url('https://godigital.technology/blog/votre-strategie-marketing-psg-puissante-surprenante-gagnante/') }}">VOTRE
                                    STRATEGIE MARKETING PSG (PUISSANTE – SURPRENANTE – GAGNANTE)</a>
                            </h3>
                            <p>Il arrive toujours un moment où vous serez amenés à mettre au point un plan marketing
                                digital.</p>
                            <a href="{{ url('https://godigital.technology/blog/votre-strategie-marketing-psg-puissante-suprenante-gagnante/') }}"
                                class="blog-btn ">Voir plus <i class="ri-arrow-right-line "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-shape-1 " data-speed="0.08 " data-revert="true ">
            <img src=" {{ asset('assets/images/blog/shape-1.png') }}" alt="image ">
        </div>
        <div class="blog-shape-2 " data-speed="0.08 " data-revert="true ">
            <img src=" {{ asset('assets/images/blog/shape-2.png') }}" alt="image ">
        </div>
    </div>

    <!--calltoaction-->
    @include('includes.call-to-action')


    <footer class="footer-area pt-100 ">
        <!--head-->
        @include('includes.footer')
    </footer>

    <!--script-->
    @include('includes.script')

</body>

</html>