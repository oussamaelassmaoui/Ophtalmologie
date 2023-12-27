<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('name', 'Ophtalmologie') }}</title>
    <link href="assets/img/Logo.png" rel="icon">
    <link href="assets/img/Logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/04746b7ca9.js" crossorigin="anonymous"></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File --->
    <link href="assets/css/variables.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="assets/css/style-FAQ.css" rel="stylesheet">
    <link href="assets/css/style-blog.css" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="assets/css/style-nav.css" rel="stylesheet">
</head>

<body class="antialiased">

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            {{-- <div class="container"> --}}
            <div class="main-navbar shadow-sm sticky-top">
                <div class="top-navbar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <ul class="nav">
                                    <li class="nav-item {{ 'FAQ' == request()->path() ? 'active2' : '' }}">
                                        <a class="nav-link" href="{{ route('FAQ') }}">
                                            FOIRE AUX QUESTIONS
                                        </a>
                                    </li>
                                    <li class="nav-item {{ 'Prendre_RDV' == request()->path() ? 'active2' : '' }}">
                                        <a class="nav-link" href="{{ route('Prendre_RDV') }}">
                                            DEMANDER UN RENDEZ-VOUS
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 my-auto">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="tel:0771838254">
                                            <i class="fi fi-sr-phone-call"></i> 0771838254
                                        </a>
                                    </li>
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">
                                                Se connecter
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">
                                                S'inscrire
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{ route('login') }}"
                                                id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa fa-user"></i> {{ auth()->user()->name }}
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                                            class="fa fa-user"></i> Profile</a></li>

                                                <li> <a class="dropdown-item" href="#"
                                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                                            class="fa fa-sign-out"></i> Logout</a>
                                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                                        @csrf

                                                    </form>
                                                </li>
                                            </ul>



                                        @endguest
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar">
                <video autoplay loop muted plays-inline>
                    <source src="{{ asset('assets/video/Ophtalmologie.mp4') }}" type="video/mp4">
                </video>
                <div class="flex-video">
                    <nav class="header__menu">
                        <ul>
                            <li>
                                <div class="container">
                                    <a class="navbar-brand" href="/" style="color: black">
                                        <img src="assets/img/Logo.png" alt=""
                                            width="40" height="40">
                                        Ophtalmologie
                                    </a>
                                </div>
                            </li>
                           
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a   href="/">ACCUEIL</a></li>
                            <li>
                                <a class="{{ 'Clinique' == request()->path() ? 'active' : '' }}" href="{{ route('Clinique') }}">LA CLINIQUE</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('Clinique') }}">LA CLINIQUE</a></li>
                                    <li><a href="{{ route('Equipe') }}">NOTRE ÉQUIPE</a></li>
                                    <li><a href="{{ route('Recrutement') }}">RECRUTEMENT</a></li>
                                </ul>
                            </li>
                            <li class="{{ 'poles-dexcellence' == request()->path() ? 'active' : '' }}"><a href="{{ route('poles-dexcellence') }}">NOS PÔLES D'EXCELLENCE</a></li>
                            <li>
                                <a href="#">INFOS</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('Guide') }}">GUIDE DU PATIENT ET DU VISITEUR</a></li>
                                    <li><a href="{{ route('Prendre_RDV') }}">DEMANDE DE RENDEZ-VOUS</a></li>
                                    <li><a href="{{ route('Assurances') }}">PRISE EN CHARGE ET ASSURANCES</a></li>
                                    <li><a href="{{ route('FAQ') }}">FOIRE AUX QUESTIONS</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">ACTIVITÉS</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('Pôle-social') }}">PÔLE SOCIAL ET HUMANITAIRE</a></li>
                                </ul>
                            </li>
                            <li class="{{ 'Article' == request()->path() ? 'active' : '' }}"><a href="{{ route('Article') }}">BLOG ET ACTUALITÉS</a></li>
                            <li class="{{ 'Contact' == request()->path() ? 'active' : '' }}"><a href="{{ route('Contact') }}">CONTACT</a></li>

                        </ul>
                    </nav>
                    <div class="content">
                        <h1>Nous prenons soin <br>
                            de vos yeux</h1><br>
                        <a href="{{ route('Prendre_RDV') }}">
                            <button>Prendre RDV</button>
                        </a>
                        <div class="espa">

                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{--  mobile-menu --}}
        <div class="mobile-menu">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/Logo.png" alt="Ophtalmologie" width="40"
                        height="40">
                    Ophtalmologie

                </a>

            </div>

            <img src="assets/img/menu-burger.svg" alt="menu-burger" class="toggle-sidebar-btn">

            <div class="menu-espas"></div>


            <!-- ======= Sidebar ======= -->


            <aside id="sidebar" class="sidebar">

                <ul class="sidebar-nav" id="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/">

                            <span>ACCUEIL</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('Prendre_RDV') }}">

                            <span> DEMANDER UN RENDEZ-VOUS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('FAQ') }}">

                            <span>FOIRE AUX QUESTIONS</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                            href="#">
                            <span>LA CLINIQUE</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="{{ route('Clinique') }}">
                                    <i class="bi bi-circle"></i><span>LA CLINIQUE</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Equipe') }}">
                                    <i class="bi bi-circle"></i><span>NOTRE ÉQUIPE</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Recrutement') }}">
                                    <i class="bi bi-circle"></i><span>RECRUTEMENT</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('poles-dexcellence') }}">
                            <span>NOS PÔLES D'EXCELLENCE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                            href="#">
                            <span>INFOS</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="{{ route('Guide') }}">
                                    <i class="bi bi-circle"></i><span>
                                        GUIDE DU PATIENT ET DU VISITEUR </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Prendre_RDV') }}">
                                    <i class="bi bi-circle"></i><span>DEMANDE DE RENDEZ-VOUS</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Assurances') }}">
                                    <i class="bi bi-circle"></i><span>PRISE EN CHARGE ET ASSURANCES</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('FAQ') }}">
                                    <i class="bi bi-circle"></i><span>FOIRE AUX QUESTIONS</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                            href="#">
                            <span>ACTIVITÉS</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="{{ route('Pôle-social') }}">
                                    <i class="bi bi-circle"></i><span>PÔLE SOCIAL ET HUMANITAIRE</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('Article') }}">
                            <span>BLOG ET ACTUALITÉS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('Contact') }}">
                            <span>CONTACT</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#Profile-nav" data-bs-toggle="collapse"
                            href="#">
                            <span>
                                My Profile
                            </span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="Profile-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            
                            @guest
                            <li>
                                <a href="{{ route('login') }}">
                                      Se connecter
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                     S'inscrire
                                </a>
                            </li>
                        @else
                            
                                
                            
                                    <li><a href="{{ route('profile.edit') }}">
                                        
                                       My Profile</a></li>

                                    <li> <a  href="#"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                             Logout</a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                                            @csrf

                                        </form>
                                    </li>
                                



                            @endguest

                        </ul>
                    </li>
                </ul>

            </aside><!-- End Sidebar-->
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <div>

            <div class="footer-1">

                <a class="navbar-brand" href="/">
                    <img src="assets/img/Logo.png" alt="" width="40"
                        height="40">
                    Ophtalmologie
                </a>
                <span></span>
                <div class="flex-footer-1">
                    <div class="row">
                        <div class="col">
                            <h6> CLINIQUE DE LA VISION DE FRANCE </h6>
                            <span></span>
                            <div class="paragraphe">
                                Rassembler sous un même toit des ophtalmologues de diverses sous spécialités et du
                                personnel
                                passionné par le service en milieu médical, pour créer une équipe dynamique et
                                harmonieuse à
                                l’écoute des patients et des collègues .
                            </div>
                            <span></span>
                            <span></span>
                            <a href="tel:0771838254"><i class="fa-solid fa-phone"></i> 0771838254</a><br>
                            <a href="mailto:ophtalmologie.contact.clinique@gmail.com"><i
                                    class="fa-solid fa-envelope"></i>
                                ophtalmologie.contact.clinique@gmail.com</a><br>
                            <a
                                href="https://www.google.com/maps/place/Clinique+de+la+Vision+de+Rabat/@34.0072665,-6.8463435,17z/data=!3m1!4b1!4m5!3m4!1s0xda76c878962bd7d:0xf3d8a602e769754c!8m2!3d34.0072621!4d-6.8441548">
                                <i class="fa-solid fa-location-dot"></i> 26 Avenue Ibn Khaldoune Agdal - France</a><br>
                            <a href="https://api.whatsapp.com/send?phone=212771838254"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <span></span>

                        </div>
                        <div class="col">
                            <h6> LIENS RAPIDES </h6>
                            <span></span>
                            <span><a class="{{ 'Prendre_RDV' == request()->path() ? 'active2' : '' }}" href="{{ route('Prendre_RDV') }}">DEMANDE DE RENDEZ-VOUS</a></span>
                            <span><a class="{{ 'FAQ' == request()->path() ? 'active2' : '' }}" href="{{ route('FAQ') }}">FOIRE AUX QUESTIONS</a></span>
                            <span><a class="{{ 'Equipe' == request()->path() ? 'active2' : '' }}" href="{{ route('Equipe') }}">NOTRE EQUIPE</a></span>
                            <span><a class="{{ 'Clinique' == request()->path() ? 'active2' : '' }}" href="{{ route('Clinique') }}">LA CLINIQUE</a></span>
                            <span><a class="{{ 'Recrutement' == request()->path() ? 'active2' : '' }}" href="{{ route('Recrutement') }}">RECRUTEMENT</a></span>
                            <span><a class="{{ 'Pôle-social' == request()->path() ? 'active2' : '' }}" href="{{ route('Pôle-social') }}">PÔLE SOCIAL ET HUMANITAIRE</a></span>
                            <span><a class="{{ 'Guide' == request()->path() ? 'active2' : '' }}" href="{{ route('Guide') }}">GUIDE DU PATIENT ET DU VISITEUR</a></span>
                            <span><a class="{{ 'Assurances' == request()->path() ? 'active2' : '' }}" href="{{ route('Assurances') }}">PRISE EN CHARGE ET ASSURANCES</a></span>
                            <span><a class="{{ 'Article' == request()->path() ? 'active2' : '' }}" href="{{ route('Article') }}">BLOG ET ACTUALITÉS</a></span>
                            <span><a class="{{ 'Contact' == request()->path() ? 'active2' : '' }}" href="{{ route('Contact') }}">CONTACT</a></span>
                        </div>
                        <div class="col">
                            <h6> NOS PÔLES D’EXCELLENCE </h6>
                            <span></span>
                            <span><a  href="{{ route('poles1') }}">CHIRURGIE RÉFRACTIVE</a></span>
                            <span><a href="{{ route('poles2') }}">CHIRURGIE VITRÉO RÉTINIENNE</a></span>
                            <span><a href="{{ route('poles3') }}">OPÉRATION DE LA CATARACTE – CHIRURGIE DU SEGMENT
                                    ANTÉRIEUR</a></span>
                            <span><a href="{{ route('poles4') }}">EXPLORATION ET ORTHOPTIE</a></span>
                            <span><a href="{{ route('poles5') }}">OPHTALMOLOGIE PÉDIATRIQUE</a></span>
                            <span><a href="{{ route('poles6') }}">CHIRURGIE ORBITO PALPÉBRALE & DES VOIES
                                    LACRYMALES</a></span>
                            <span><a href="{{ route('poles7') }}">ANESTHÉSIE ET BLOC OPÉRATOIRE</a></span>
                        </div>
                    </div>
                </div>
                <span></span>
            </div>
        </div>
    </footer>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- jquery -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="assets/js/main-blog.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    {{-- whatsapp  --}}
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-87de5326-af64-4477-928a-1c7c8e1bcd58" data-elfsight-app-lazy></div>
    {{-- END whatsapp --}}



</body>

</html>
