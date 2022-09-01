<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Design graphique web et print - Go Digital Technology</title>
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
                <h2>Data Analytics & web marketing</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Services</a>
                    </li>
                    <li>Data Analytics & web marketing</li>
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
                            <li><a href="{{ route('data-analytic') }}" class="active">Data Analytics & marketing
                                </a></li>
                            <li><a href="{{ route('conception-ux') }}">Conception UX & UI
                                </a></li>
                            <li><a href="{{ route('developpement-web-mobile') }}">Développement web & mobile
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
                        <h3>Data Analytics & web marketing</h3>
                        <div class="overview-image">
                            <img src="{{asset('assets/images/services-details/web-marketing.jpg')}}" alt="image">
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
                        <p>Connaître votre marché et les tendances du moment. Être
                            conseillé par des experts en
                            communication web et être épaulé par des graphistes dédiés pour votre projet. De
                            l'expression de vos besoins aux conseils permettant de mieux exprimer votre identité
                            visuelle</p>
                        <p>La Data Analytics se définit comme la science de l’examen et de
                            l’analyse de données brutes
                            afin de parvenir à en tirer des conclusions. Plébiscitée par les entreprises et les
                            organisations, l’objectif de la data analytics est bien d’aider à la prise de décision, et
                            d’orienter les stratégies de l’entreprise vers plus de rentabilité et de succès.</p>
                        <p>Le marketing, quant à lui, reste une fonction clé dans la vie et
                            le dynamisme des
                            organisations. Confronté à l’essor du digital et du numérique, la fonction marketing a
                            cependant dû s’adapter, pour tirer profit des nouvelles techniques et technologies de
                            l’information et de la communication.</p>
                        <p>Mis ensemble, le marketing, dans sa version digitale, et la data
                            analytics poursuivent donc
                            une mission claire : allier l’élaboration de stratégies digitales de marketing à l’analyse
                            directe des données ; afin de les optimiser, que cela soit avant le lancement d’une
                            opération, ou après pour en mesurer l’efficacité.</p>
                        <p>Le secteur du digital marketing et de la data analytics
                            constitue donc un véritable levier
                            pour votre entreprise.</p>
                        <p>Go Digital Technology vous accompagne dans le développement de
                            votre entreprise en
                            proposant des solutions innovantes pour améliorer votre notoriété.</p>
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