<!doctype html>
<html lang="fr">

<head>
    <!--head-->
    @include('includes.header')

    <title>Podcast - Go Digital Technology</title>
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
            <div class="page-banner-content max-width">
                <h2>Podcast</h2>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Accueil</a>
                    </li>
                    <li>Podcast</li>
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

    <div class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <!--Podcast-->
                <div class="col-lg-4 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-author">
                            <img src="{{ asset('assets/images/favicon.png') }}" width="50" alt="image">
                            <p>The IT industry offers a sea of options.</p>
                            <span>Emma Kemeliy</span>
                        </div>
                        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84118776&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

                        <div class="article-author">
                            <img src="{{ asset('assets/images/favicon.png') }}" width="50" alt="image">
                            <p>The IT industry offers a sea of options</p>
                            <span>Emma Kemeliy</span>
                        </div>
                        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84118776&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                    </div>
                </div>
                <!--Podcast-->
                <div class="col-lg-4 col-md-12">
                    <div class="blog-details-desc">

                        <div class="article-author">
                            <img src="{{ asset('assets/images/favicon.png') }}" width="50" alt="image">
                            <p>The IT industry offers a sea of options, from</p>
                            <span>Emma Kemeliy</span>
                        </div>
                        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84118776&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

                        <div class="article-author">
                            <img src="{{ asset('assets/images/favicon.png') }}" width="50" alt="image">
                            <p>The IT industry offers a sea of options, from </p>
                            <span>Emma Kemeliy</span>
                        </div>
                        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84118776&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                    </div>
                </div>
                <!--Podcast-->
                <div class="col-lg-4 col-md-12">
                    <div class="blog-details-desc">

                        <div class="article-author">
                            <img src="{{ asset('assets/images/favicon.png') }}" width="50" alt="image">
                            <p>The IT industry offers a sea of options, from</p>
                            <span>Emma Kemeliy</span>
                        </div>
                        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84118776&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

                        <div class="article-author">
                            <img src="{{ asset('assets/images/favicon.png') }}" width="50" alt="image">
                            <p>The IT industry offers a sea of options, from </p>
                            <span>Emma Kemeliy</span>
                        </div>
                        <iframe width="100%" height="150" scrolling="no" frameborder="no"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/84118776&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
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