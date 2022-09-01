<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Portfolio - Go Digital Technology</title>
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
                <h2>Portfolio</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Portfolio</a>
                    </li>
                    <li>Applications</li>
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

    <div class="cases-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.geen.rencontre">
                                <img src="{{ asset('assets/images/cases-study/mobile/1.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Mobile</div>
                            <div class="tag-2">Rencontre</div>
                            <h3>
                                <a target="_blank"
                                    href="https://play.google.com/store/apps/details?id=com.geen.rencontre">Geen</a>
                            </h3>
                            <p>Geen est une application de
                                rencontre qui offre des matchs
                                illimités en mode premium. La
                                confidentialité de vos informations
                                personnelles et de vos échanges via
                                sa messagerie.</p>
                        </div>
                    </div>
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
                            <a href="#">
                                <img src="{{ asset('assets/images/cases-study/mobile/3.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Mobile</div>
                            <div class="tag-2">Spectacle</div>
                            <h3>
                                <a href="#">What2Plan</a>
                            </h3>
                            <p>What2plan se définit comme étant la meilleure application sur laquelle les bons plans
                                sont disponibles. Découvrez avec ce dernier combien de fois, c'est facile de trouver
                                un restaurant, l'accès à un spectacle ou un événement.</p>
                        </div>
                    </div>
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
                            <a href="#">
                                <img src="{{ asset('assets/images/cases-study/mobile/6.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Mobile</div>
                            <div class="tag-2">Gouvernement</div>
                            <h3>
                                <a href="#">NESPRO-SR</a>
                            </h3>
                            <p>NESPRO-SR est une application qui a pour but de permettre aux gestionnaires des Dépôts
                                Répartiteurs de Zone (DRZ) installés sur toute l’étendue du
                                territoire béninois de notifier chaque semaine les SDU des produits SR disponibles dans
                                leur stock.</p>
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
                            <p>Kawacard est un moyen rapide et sécurisé d'acheter des cartes virtuelles Mastercard.
                                Achetez en ligne et sur tous les sites
                                acceptants les cartes MasterCard avec les cartes virtuelles Kawa.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://premierpaschezsoi.com">
                                <img src="{{ asset('assets/images/cases-study/11.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Immobilier</div>
                            <h3>
                                <a target="_blank" href="http://premierpaschezsoi.com">Premier pas chez soi</a>
                            </h3>
                            <p>Faites le premier pas chez vous en commandant votre plan de construction chez Premier
                                Pas Chez Soi, la plateforme immobilière qu'il vous fallait pour faire le premier pas
                                dans votre nouvelle maison.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="http://chaquemaisonpourchrist.com">
                                <img src="{{ asset('assets/images/cases-study/15.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Organisation</div>
                            <h3>
                                <a target="_blank" href="http://chaquemaisonpourchrist.com">Chaque maison pour
                                    christ</a>
                            </h3>
                            <p>CMC est au service de l’Église. Sa mission consiste à mobiliser et à équiper les églises
                                locales et chaque chrétien pour diffuser ensemble la Bonne Nouvelle dans chaque maison
                                du monde entier.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://onedating.love">
                                <img src="{{ asset('assets/images/cases-study/16.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Rencontre</div>
                            <h3>
                                <a target="_blank" href="http://onedating.love">Onedating</a>
                            </h3>
                            <p>Si les applications de rencontres virtuelles connaissent aujourd'hui un grand succès,
                                c'est bien parce qu'elles ont su répondre aux besoins de certains. ONE se différencie
                                par l'organisation de soirées de rencontres virtuelles privées et sur-mesure..</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://monterrain.online">
                                <img src="{{ asset('assets/images/cases-study/17.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Immobilier</div>
                            <h3>
                                <a target="_blank" href="http://monterrain.online">Mon Terrain</a>
                            </h3>
                            <p>Monterrain.online a été conçu par des experts du foncier pour apporter une solution
                                pratique aux propriétaires déjà aux prises ou à risque de l’être, avec des problèmes
                                sur leurs terrains.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://mysoccernetwork.co">
                                <img src="{{ asset('assets/images/cases-study/2.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Football</div>
                            <h3>
                                <a target="_blank" href="http://mysoccernetwork.co">My Soccer Network</a>
                            </h3>
                            <p>My Soccer Network, est un réseau social pour faciliter les rencontres entre acteurs du
                                monde du football amateur ! Le LinkedIn du foot, vous permet de
                                trouver un joueur, un club, un agent, un ostéopathe, et de gérer votre carrière !</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://piebarometre.com">
                                <img src="{{ asset('assets/images/cases-study/4.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Analyse</div>
                            <h3>
                                <a target="_blank" href="http://piebarometre.com">Piebarometre</a>
                            </h3>
                            <p>Le BAROMETRE est un outil technique qui offre aux décideurs politiques la possibilité
                                d’observer en temps réel les tendances des caractéristiques socio-économiques de leurs
                                populations, les indicateurs de développement d’une région, d’un village, ou d’une
                                commune.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://chancyondo.com">
                                <img src="{{ asset('assets/images/cases-study/5.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Finance</div>
                            <h3>
                                <a target="_blank" href="http://chancyondo.com">ChancyOndo</a>
                            </h3>
                            <p>Conseiller financier indépendant. Son métier consiste à vous conseiller et à vous
                                accompagner dans la gestion de vos placements financiers, simples et compréhensibles
                                avec un suivi sur le long terme, et un plan d'action personnel.</p>
                        </div>
                    </div>

                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://kawainfluenceurs.com">
                                <img src="{{ asset('assets/images/cases-study/7.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Influenceurs</div>
                            <h3>
                                <a target="_blank" href="http://kawainfluenceurs.com">Kawa Influenceurs</a>
                            </h3>
                            <p>Kawa, c’est la première plateforme au Bénin qui propose de mettre en relation les
                                promoteurs et les influenceurs. Ces derniers constituent aujourd’hui les acteurs
                                principaux de la politique de fidélisation de la clientèle des grandes filiales de
                                productions et de distribution de biens et de services.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://olaempire-fashion.com">
                                <img src="{{ asset('assets/images/cases-study/9.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Ecommerce</div>
                            <h3>
                                <a target="_blank" href="http://olaempire-fashion.com">Ola Empire</a>
                            </h3>
                            <p>Votre boutique en ligne de vente d'accessoire 100% africain au USA ; Le meilleur de la
                                mode en Afrique est ici !</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://coeurdenfantsbenin.com">
                                <img src="{{ asset('assets/images/cases-study/13.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Organisation</div>
                            <h3>
                                <a target="_blank" href="http://coeurdenfantsbenin.com"> Coeurs d'enfants du Bénin</a>
                            </h3>
                            <p>La plateforme cœur d’enfants Bénin, engagée pour la cause des enfants en situation
                                difficiles, est une organisation laïque, non politique et non gouvernementale.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://smspace.me">
                                <img src="{{ asset('assets/images/cases-study/14.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Service de sms</div>
                            <h3>
                                <a target="_blank" href="http://smspace.me">Smspace</a>
                            </h3>
                            <p>Smspace.me communiquer plus efficacement avec les solutions de sms à travers le monde
                                avec un système fiable et rapide ! Smspace offre un grand nombre de solutions
                                extensibles, évolutives et faites sur-mesure.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a target="_blank" href="http://fromscrash.com">
                                <img src="{{ asset('assets/images/cases-study/18.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">Site internet</div>
                            <div class="tag-2">Agile</div>
                            <h3>
                                <a target="_blank" href="http://fromscrash.com">Fromscrash</a>
                            </h3>
                            <p>Fromscrash.com est un outil de gestion de projet Agile qui prend en charge toute la
                                méthodologie Agile, que ce soit Scrum,
                                Kanban. Avec un seul outil, vous pouvez planifier, suivre et gérer tous vos projets de
                                développement Agile.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <div class="banner-btn">
            <a href="contact-projet" class="default-btn wow fadeInRight" data-wow-delay="200ms"
                data-wow-duration="1000ms">Demander
                un devis <i class="ri-arrow-right-line"></i><span></span></a>
        </div>
    </center>
    <div class="cases-shape-1" data-speed="0.04" data-revert="true">
        <img src="{{ asset('assets/images/cases-study/shape-1.png') }}" alt="image">
    </div>
    <div class="cases-shape-2" data-speed="0.04" data-revert="true">
        <img src="{{ asset('assets/images/cases-study/shape2.png') }}" alt="image">
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

    <!--calltoaction-->
    @include('includes.call-to-action')

    <footer class="footer-area pt-100">
        <!--head-->
        @include('includes.footer')
    </footer>

    <!--script-->
    @include('includes.script')
</body>

</html>