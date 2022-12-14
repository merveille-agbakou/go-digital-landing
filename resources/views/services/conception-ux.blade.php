<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Conception UX & UI - Go Digital Technology</title>
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
                <h2>Conception UX & UI</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Services</a>
                    </li>
                    <li>Conception UX & UI</li>
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
                            <li><a href="{{ route('conception-ux') }}" class="active">Conception UX & UI
                                </a></li>
                            <li><a href="{{ route('developpement-web-mobile') }}">D??veloppement web & mobile
                                </a></li>
                            <li><a href="{{ route('referencement-seo') }}">R??f??rencement SEO & SEA
                                </a></li>
                            <li><a href="{{ route('cybersecurite') }}">Cybers??curit?? et risques
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
                        <h3>Conception UX & UI</h3>
                        <div class="overview-image">
                            <img src="{{asset('assets/images/services-details/ux.jpg')}}" alt="image">
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
                        <p>L'ergonomie d'un site Internet doit le rendre intuitif ??
                            comprendre et ?? utiliser. L'UX
                            Design couvre ?? la fois l'ergonomie, l'??tude du comportement, l'ethnologie, le contenu et
                            la navigation.</p>
                        <p>Aujourd???hui, l???exp??rience utilisateur repr??sente le pilier de la
                            cr??ation d???un site web.
                            Avant de savoir comment vous allez vendre vos services ou vos produits vous devez d??j??
                            savoir ?? qui vous allez vous adresser et quel est le meilleur moyen de le faire.
                        </p>
                        <p>Une bonne conception UX design permet d?????liminer les points de
                            friction dans la conversion
                            de vos utilisateurs. Si vos utilisateurs sont satisfait,??car l???utilisation de votre site
                            est simple et??agr??able, vous aurez de fortes chances d???am??liorer votre taux de
                            conversion,??d???augmenter votre nombre d???utilisateurs et de diminuer les abandons??de panier.
                            Une bonne exp??rience utilisateur fait la diff??rence entre un produit qui se vend et un
                            produit qui ne se vend pas.
                        </p>
                        <p>Notre accompagnement UX se construit autour de la rencontre de
                            vos utilisateurs afin
                            d???analyser leurs usages, de comprendre leurs besoins et leurs attentes lors d???entretiens
                            individuels et de sessions d???observations. Nous structurons notre approche et concevons
                            avec vous l???interface de votre service via des phases de sketching, wireframing puis
                            prototyping. Enfin, nous testons aupr??s de vos utilisateurs cible les interfaces afin de
                            valider leur efficience lors de sessions de tests.</p>
                        <p>Go Digital Technology emploie une??m??thodologie UX??permettant
                            d'observer les utilisateurs en
                            situation r??elle, de comprendre les besoins et de concevoir des produits finaux de
                            meilleure qualit??.
                            <li>Comprendre les attentes??et les besoins de vos utilisateurs.</li>
                            <li>Concevoir les premi??res fonctionnalit??s??de votre produit en se basant sur les r??sultats
                                de l?????tape pr??c??dente</li>
                            <li>??laborer une structure en s??lectionnant les ??l??ments qui doivent ??tre pr??sents pour
                                satisfaire vos utilisateurs et les organiser.</li>
                            <li>R??aliser les premiers sch??mas en cr??ant des repr??sentations visuelles non d??taill??es de
                                vos pages</li>
                            <li>Mettre en place un focus group qui permettra d???obtenir les retours de vos utilisateurs
                                et de modifier les premi??res id??es en fonction de leurs r??ponses.</li>
                            <li>R??it??rer les focus group et les modifications jusqu????? obtenir un prototype le plus en
                                ad??quation possible avec les attentes de vos utilisateurs.</li>
                            <li>Concevoir la conception??et le design de votre interface utilisateur.</li>

                        </p>
                        <p><b>L???UX DESIGN EST-IL VRAIMENT UTILE POUR MON SITE???</b></p>
                        <p>Aujourd???hui, tous les sites internet se retrouvent dans un
                            environnement de plus en plus
                            concurrentiel. Il faut donc se d??marquer. Vous pourrez vous d??marquer avec votre image,
                            votre ligne de conduite, votre marque, vos produits, votre savoir-faire ou votre
                            r??putation, mais l???outil indispensable avec lequel il faut composer sur le web, c???est le
                            design de l???exp??rience utilisateur !</p>
                        <p>Quelle que soit votre entreprise, ce que vous proposez ou
                            vendez, si vous voulez conna??tre
                            le succ??s vous devez proposer ?? vos utilisateurs des interfaces utilisateur qui r??pondent
                            voire d??passent leurs attentes. Voil?? o?? par rapport ?? vos concurrents, vous pourrez faire
                            la diff??rence. Pour l???achat de produits ou services identiques, nous pr??f??rerons toujours
                            aller sur le site qui nous a laiss?? une bonne impression, une bonne exp??rience de
                            navigation, une bonne ??motion???</p>
                        <p>Notre agence web est capable de r??pondre ?? tous vos besoins et
                            d'??laborer une v??ritable
                            strat??gie digitale. Contactez-nous maintenant.</p>
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