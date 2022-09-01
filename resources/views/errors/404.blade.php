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

    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="{{ asset('assets/images/404.png') }}" alt="error">
                        <h3>Erreur 404 : page non trouvé</h3>
                        <p>La page que vous recherchez a peut-être été supprimée, son nom a changé ou est temporairement
                            indisponible.</p>
                        <a href="/" class="default-btn">Page d'accueil
                            <i class="ri-arrow-right-line"></i>
                            <span></span>
                        </a>
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