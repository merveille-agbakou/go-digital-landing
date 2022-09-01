<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-6">
            <div class="single-footer-widget">
                <div class="widget-logo">
                    <a href="{{ route('index') }}">
                        <img width="250" src="{{ asset('assets/images/logo.png') }}" alt="image">
                    </a>
                </div>
                <p>Agence de conseil et d’ingénierie spécialisé dans les métiers du Système d’informations et
                    Marketing.</p>
                <ul class="widget-info">
                    <li>
                        <i class="ri-customer-service-line"></i>
                        <a href="tel:+22961456464">(229) 61 45 64 64</a>
                    </li>
                    <li>
                        <i class="ri-global-line"></i>
                        <a> <span class="__cf_email__">agence@godigital.technology</span> </a>
                    </li>
                    <li>
                        <i class="ri-map-pin-line"></i> Cotonou, Bénin Kindonou
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-3">
            <div class="single-footer-widget">
                <h3>Plan du site</h3>
                <ul class="footer-links-list">
                    <li><a href="{{ url('https://godigital.technology/blog') }}">Actualités</a></li>
                    <li><a href="{{ route('index') }}">Agence</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="#">Academy</a></li>
                    <li><a href="#">Solution by Go</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-3">
            <div class="single-footer-widget">
                <h3>Services</h3>
                <ul class="footer-links-list">
                    <li><a href="{{ route('developpement-web-mobile') }}">Applications, testing</a></li>
                    <li><a href="{{ route('conception-ux') }}">Transformation & Innovation</a></li>
                    <li><a href="{{ route('data-analytic') }}">Digital & Data</a></li>
                    <li><a href="{{ route('referencement-seo') }}">SEO / SEA</a></li>
                    <li><a href="{{ route('cybersecurite') }}">Cybersécurité et risques</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-6">
            <div class="single-footer-widget">
                <h3>Agence</h3>
                <ul class="footer-links-list">
                    <li><a href="{{ route('contact-carriere') }}">Carrières</a></li>
                    <li><a href="#">Locaux</a></li>
                    <li><a href="#">Conditions générales</a></li>
                    <li><a href="#">Données personnelles</a></li>
                    <li><a href="#">Politique relative aux cookies</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-footer-widget">
                <h3>Newsletter</h3>
                <div class="widget-newsletter">
                    <div class="newsletter-content">
                        <p>Rejoignez notre newsletter pour avoir des informations et nos offres au quotidien.</p>
                    </div>
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Adresse email" name="EMAIL" required
                            autocomplete="off">
                        <button type="submit"><i class="ri-send-plane-2-line"></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <ul class="widget-social">
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
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <p>
                Copyright © 2022 Go Digital Technology. Tous droits réservés par
                <a href="{{ route('index') }}" target="_blank">Go Digital Technology</a>
            </p>
        </div>
    </div>
</div>
<div class="footer-shape-1" data-speed="0.08" data-revert="true">
    <img src="{{ asset('assets/images/footer/shape-1.png') }}" alt="image">
</div>
<div class="footer-shape-2" data-speed="0.08" data-revert="true">
    <img src="{{ asset('assets/images/footer/shape-2.png') }}" alt="image">
</div>
<div class="footer-shape-3" data-speed="0.08" data-revert="true">
    <img src="{{ asset('assets/images/footer/shape-3.png') }}" alt="image">
</div>
<div class="footer-shape-4" data-speed="0.08" data-revert="true">
    <img src="{{ asset('assets/images/footer/shape-4.png') }}" alt="image">
</div>
<div class="footer-shape-5" data-speed="0.08" data-revert="true">
    <img src="{{ asset('assets/images/footer/shape-5.png') }}" alt="image">
</div>