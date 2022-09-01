<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>

<script src="{{ asset('assets/js/odometer.min.js') }}"></script>

<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>

<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>

<script src="{{ asset('assets/js/scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/js/horizontal-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Analytics -->

<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyBXFRFUceXJ-Pxr0Sqx-xIGqtmrjJHuOOI",
        authDomain: "go-digital-technology.firebaseapp.com",
        projectId: "go-digital-technology",
        storageBucket: "go-digital-technology.appspot.com",
        messagingSenderId: "770957194248",
        appId: "1:770957194248:web:3cb89f2a5d7eb816f50dbd",
        measurementId: "G-MZ49G60F1M"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>

<!-- Performance -->

<script>
    import { initializeApp } from "firebase/app";
    import { getPerformance } from "firebase/performance";

    // TODO: Replace the following with your app's Firebase project configuration
    // See: https://firebase.google.com/docs/web/learn-more#config-object
    const firebaseConfig = {
        apiKey: "AIzaSyBXFRFUceXJ-Pxr0Sqx-xIGqtmrjJHuOOI",
        authDomain: "go-digital-technology.firebaseapp.com",
        projectId: "go-digital-technology",
        storageBucket: "go-digital-technology.appspot.com",
        messagingSenderId: "770957194248",
        appId: "1:770957194248:web:3cb89f2a5d7eb816f50dbd",
        measurementId: "G-MZ49G60F1M"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    // Initialize Performance Monitoring and get a reference to the service
    const perf = getPerformance(app);
</script>

<!-- Crsip script -->
<script
    type="text/javascript">window.$crisp = []; window.CRISP_WEBSITE_ID = "e52382aa-300e-4a6c-9649-8318e4b909f5"; (function () { d = document; s = d.createElement("script"); s.src = "https://client.crisp.chat/l.js"; s.async = 1; d.getElementsByTagName("head")[0].appendChild(s); })();</script>

<!-- PWA  -->
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("{{ asset('/sw.js') }}").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>