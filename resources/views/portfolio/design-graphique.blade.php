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
                    <li>Design</li>
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
                            <a href="#">
                                <img src="{{ asset('assets/images/design/1.png') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">

                            <h3>
                                <a href="#">BIRDLAND</a>
                            </h3>

                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/2.png') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">

                            <h3>
                                <a href="#">CHANCY ONDO</a>
                            </h3>

                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/3.png') }}" alt="image">
                            </a>
                        </div>

                        <div class="cases-content">

                            <h3>
                                <a href="#">FINANCE HORIZONS</a>
                            </h3>

                        </div>
                    </div>

                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/4.png') }}" alt="image">
                            </a>
                        </div>

                        <div class="cases-content">

                            <h3>
                                <a href="#">ONE DATING</a>
                            </h3>

                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/5.png') }}" alt="image">
                            </a>
                        </div>

                        <div class="cases-content">

                            <h3>
                                <a href="#">KAWAINFLUENCEURS</a>
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/6.png') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">

                            <h3>
                                <a href="#">FROMSCRASH</a>
                            </h3>

                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/7.png') }}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">

                            <h3>
                                <a href="#">KAWASTACK</a>
                            </h3>

                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/8.png') }}" alt="image">
                            </a>
                        </div>

                        <div class="cases-content">


                            <h3>
                                <a href="#">KIDO PAY</a>
                            </h3>

                        </div>
                    </div>

                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/9.png') }}" alt="image">
                            </a>
                        </div>

                        <div class="cases-content">

                            <h3>
                                <a href="#">LE BAROMETRE</a>
                            </h3>

                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="#">
                                <img src="{{ asset('assets/images/design/10.png') }}" alt="image">
                            </a>
                        </div>

                        <div class="cases-content">

                            <h3>
                                <a href="#">COFFEE CUP MOCKUP</a>
                            </h3>

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