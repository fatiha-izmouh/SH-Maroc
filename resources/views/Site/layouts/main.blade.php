<!DOCTYPE html>
<html lang="ar" dir="rtl" id="html-tag">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHMAROC</title>

    <link rel="icon" href="{{asset('site\images\Logos\shmaroc.png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSS FILES -->
    <link href="{{ asset('site/css/footer/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/navbar/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/Accueil/accueil.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/css/Accueil/backToTop.css') }}">
    <link href="{{ asset('site/css/responsive/media.css') }}" rel="stylesheet">


    <!--  Animations  -->
    <script src="{{ asset('site/js/animation-all.js') }}"></script>

    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
    <!-- NAV PART  -->
    <div class="container py-2">


        <nav class="navbar-section d-flex align-items-center justify-content-between">

            <!-- LOGO -->
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{asset('site/images/Logos/shmaroc.png')}}" alt="Logo">
                </a>
            </div>

            <!-- LINKS -->
            <ul class="links my-2">
                <li>
                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'activn' : '' }}">الرئيسية</a>
                </li>
                <li>
                    <a href="{{ url('/qui-sommes-nous') }}" class="{{ Request::is('qui-sommes-nous') ? 'activn' : '' }}">من نحن</a>
                </li>

                <!-- Nos Projets-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ Request::is('nos_projets') || Request::is('JEA') || Request::is('CF') || Request::is('TS') ? 'activn' : '' }}" data-bs-toggle="dropdown">مشاريعنا</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/JEA') }}" class="{{ Request::is('JEA') ? 'activn' : '' }}">JEA-Maroc</a></li>
                        <li><a href="{{ url('/CF') }}" class="{{ Request::is('CF') ? 'activn' : '' }}">مركز المرأة</a></li>
                        <li><a href="{{ url('/TS') }}" class="{{ Request::is('TS') ? 'activn' : '' }}">العمل الاجتماعي</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ Request::is('nos_projets') || Request::is('Actualite-JEA') || Request::is('Actualite-CF') || Request::is('Actualite-TS') ? 'activn' : '' }}" data-bs-toggle="dropdown">الأخبار</a>
                     <ul class="dropdown-menu">
                        <li><a href="{{ url('/Actualite-JEA') }}" class="{{ Request::is('Actualite-JEA') ? 'activn' : '' }}">JEA-Maroc</a></li>
                        <li><a href="{{ url('/Actualite-CF') }}" class="{{ Request::is('Actualite-CF') ? 'activn' : '' }}">مركز المرأة</a></li>
                        <li><a href="{{ url('/Actualite-TS') }}" class="{{ Request::is('Actualite-TS') ? 'activn' : '' }}">العمل الاجتماعي</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/benevolat') }}" class="{{ Request::is('benevolat') ? 'activn' : '' }}">التطوع</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'activn' : '' }}">اتصل بنا</a>
                </li>
            </ul>


            <!-- Toggle  -->
            <div class="menu-icon">
                <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
            </div>
            </nav>
    </div>


    <!-- CONTAINER PART  -->
    <main>
        @yield('container')
    </main>

    <!-- FOOTER PART -->

    <footer class="container-fluid">

        <div class="row">

            <div class="footer-infos col-xl-4 col-lg-4 col-md-12 col-12 p-3">
            <h4 class="footer-t p-2">معلومات إضافية</h4>
                <div class="footer-title my-3"> <img src="{{ asset('site/images/logos/shmaroc.png') }}" alt="Logo SHMAROC"></div>
                <p class="footer-desc col-xl-10">جمعية صناع الحياة المغرب SH MAROC هي جمعية مستقلة للتنمية الاجتماعية والثقافية، تنشط منذ 5 ديسمبر 2005 في منطقة سوس ماسة وخاصة أكادير الكبير.</p>
            </div>

            <ul class="footer-links col-xl-4 col-lg-4 col-md-12 col-12 p-3">
                <h4 class="footer-t p-2">روابط</h4>
                <li><a href="{{ url('/qui-sommes-nous') }}">> من نحن</a></li><hr>
                <li><a href="{{ url('/benevolat') }}">> لماذا التطوع</a></li><hr>
                <li><a href="{{ url('/contact') }}">> اتصل بنا</a></li><hr>
                <li><a href="{{ url('/FAQ') }}">> الأسئلة الشائعة</a></li><hr>
                <li><a href="{{ url('/conditions-utilisation') }}">> شروط الاستخدام</a></li><hr>

            </ul>

            <div class="footer-contact col-xl-4 col-lg-4 col-md-12 col-12 p-3">
                <h4 class="footer-t p-2">اتصل بنا</h4>
                <div class="contact-p my-2"><i class="fa-solid fa-location-dot mx-1"></i><strong class="mx-1">العنوان :</strong>
                    شارع مسعود الوفقاوي، الطابق الثالث، السلام، قرب ساحة سيارات الأجرة الصغيرة، أكادير، 80070 حي السلام
                </div>
                <div class="phone-p my-2"><i class="fa-solid fa-phone mx-1"></i><strong class="mx-1">الهاتف :</strong>+212 618151929</div>
                <div class="email-p my-2"><i class="fa-regular fa-envelope mx-1"></i><strong class="mx-1">البريد الإلكتروني :</strong>shmaroc@gmail.com</div>

                 <div class="footer-social-media my-5">
                    <a href="https://www.instagram.com/shmaroc/" class="mx-2 instagram" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://web.facebook.com/shmaroc/" class="mx-2 facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://wa.me/+212618151929" class="mx-2 whatsapp" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://www.youtube.com/@Shmaroc" class="mx-2 youtube" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/shmaroc" class="mx-2 linkedin" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>

                <div class="copyright-div" id="copyright">
                جميع الحقوق محفوظة &copy; <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script> <a href="/">SHMAROC</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright Div  -->


    <button id="backToTop" class="btn btn-secondary py-2 px-3"><i class="fa-solid fa-chevron-up"></i></button>

    <div class="whatsapp-icon">
         <a href="https://wa.me/212618151929" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="{{ asset('site/js/backToTop.js') }}"></script>

    <!-- Navbar Script  -->
    <script>
        function toggleMenu() {
            const links = document.querySelector('.links');
            const icon = document.querySelector('.menu-icon i');

            if (links.classList.contains('show')) {
                links.classList.remove('show');
                links.classList.add('hide');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                links.classList.remove('hide');
                links.classList.add('show');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        }
    </script>

    <!-- ANIMATIONS -->

    <script src="https://unpkg.com/scrollreveal"></script>



    <!-- ========================  TRANSLATE SCRIPT  =============================  -->


    <!-- TRANSLATE FUNCTION  -->
    <script>
        function translateLanguage() {
            var language = document.getElementById("language-selector").value;
            var googleTranslateFrame = document.querySelector("iframe.goog-te-menu-frame");
            if (!googleTranslateFrame) return;

            var innerFrameDocument = googleTranslateFrame.contentDocument || googleTranslateFrame.contentWindow.document;
            innerFrameDocument.querySelector('select.goog-te-combo').value = language;
            innerFrameDocument.querySelector('select.goog-te-combo').dispatchEvent(new Event('change'));
        }
    </script>


    <script>
            function translateWithDeepL(text, targetLanguage) {
                // Example function to use DeepL API for translation
                fetch('https://api.deepl.com/v2/translate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `auth_key=YOUR_DEEPL_API_KEY&text=${encodeURIComponent(text)}&target_lang=${targetLanguage}`
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Translation:', data.translations[0].text);
                });
            }
    </script>


    <!-- FUNCTION TO CONTROL ARABIC  -->

    <script>
        function handleLanguageChange() {
    var googleTranslateFrame = document.querySelector("iframe.goog-te-menu-frame");
    if (!googleTranslateFrame) return;

    var innerFrameDocument = googleTranslateFrame.contentDocument || googleTranslateFrame.contentWindow.document;
    var selectedLanguage = innerFrameDocument.querySelector('select.goog-te-combo').value;

    if (selectedLanguage === 'ar') {
        document.documentElement.classList.add('rtl');
    } else {
        document.documentElement.classList.remove('rtl');
    }
}

// Trigger the function when the language is changed
document.querySelector("iframe.goog-te-menu-frame").addEventListener("load", function() {
    var innerFrameDocument = this.contentDocument || this.contentWindow.document;
    innerFrameDocument.querySelector('select.goog-te-combo').addEventListener('change', handleLanguageChange);
});

    </script>


</body>
</html>
