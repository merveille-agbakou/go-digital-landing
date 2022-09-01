<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Contact - Go Digital Technology</title>
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
                <h2>Votre carrière à Go Digital Technology</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Contact</a>
                    </li>
                    <li>Carrière</li>
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


    <div class="contact-area ptb-100">
        <div class="container">
            <div class="contact-form">
                <h3>Oui, nous pouvons vous accompagner pendant votre <br />stage professionel, académique ou votre
                    carrière professionelle.</h3>
                <form id="contactForm" action="{{route('post.contact',['contactType' => 'carriere'])}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error="Entrer votre nom" placeholder="Nom *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="surname" id="surname" class="form-control" required
                                    data-error="Entrer votre prénom" placeholder="Prénom *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error="Entrer votre adresse email" placeholder="Adresse Email *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required
                                    data-error="Entrer votre numéro" class="form-control" placeholder="Téléphone *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="objectif" id="objectif" class="form-control" required
                                    data-error="Entrer votre message? " placeholder="Pourquoi nous rejoindre ? *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="domaine">
                                    <option value="0">Quel domaine :  </option>
                                    <option value="1">Ux/Ui design </option>
                                    <option value="2">Marketing et Com Digitale </option>
                                    <option value="3">Design Graphique </option>
                                    <option value="4">SEO</option>
                                    <option value="5">Développement Web et Mobile </option>
                                    <option value="6">Gestion de projet </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="contact-address">
                                    <label for="file-input" class="form-control-label">
                                        <h4>Déposez votre CV </h4>
                                    </label>
                                    <br /> <br />
                                    <input type="file" id="file-input" name="file-input" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Envoyer le message <i
                                    class="ri-arrow-right-line"></i><span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <br />
                    <div class="col-lg-12 col-md-6">
                        <div class="contact-address">
                            <p>La collecte des informations demandées est nécessaire au traitement de votre demande par
                                Go Digital Technology, responsable de traitement. Elle vous permettra d'être contacté
                                (e) dans le cadre
                                de votre requête. Ces informations collectées pourront être utilisées à des fins de
                                prospection. Vous disposez d’un droit d’accès, de rectification, d’opposition et de
                                suppression des données qui vous concernent. Pour les exercer, contactez-nous
                                simplement
                                par email à l’adresse suivante donnees@godigital.technology. Nous vous invitons à
                                prendre
                                connaissance de notre politique de protection des données.</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="contact-info-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-address">
                        <h3>GoDigital Technology</h3>
                        <p>Expertise Digitale & Innovation Technologique.</p>
                        <ul class="address-info">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:+22961456464">(229) 61 45 64 64</a>
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <a> <span class="__cf_email__">agence@godigital.technology</span></a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                Cotonou, Bénin Kindonou
                            </li>
                        </ul>
                        <ul class="address-social">
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
                <div class="col-lg-8 col-md-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.13631356178!2d2.382645315361059!3d6.376398426623529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102357b60e16a69f%3A0xe8c280b6d35a5ee5!2sGO%20DIGITAL%20TECHNOLOGY!5e0!3m2!1sfr!2sfr!4v1643214947017!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-area pt-100">
        <!--footer-->
        @include('includes.footer')
    </footer>

    <!--script-->
    @include('includes.script')

</body>

</html>