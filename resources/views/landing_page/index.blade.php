<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Software IT</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('landing/assets/images/favicon.png') }}" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css') }}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/LineIcons.css') }}">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/font-awesome.min.css') }}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css') }}">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/default.css') }}">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
    
</head>

<body> 
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('landing/assets/images/logo2.png') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Services </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Caractéristiques </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">À propos </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#footer">Contact</a>
                                    </li> 
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                                @guest
                                <a class="main-btn" data-scroll-nav="0" href="{{url('/login')}}">Login</a>
                                @else
                                <a class="main-btn  wow fadeInUp" data-scroll-nav="0" href="{{url('/profile')}}">Profile</a>
                                @endguest
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(landing/assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s"> Adapter à tout type d'établissement </h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">E-madrassati </h2>
                            <!--<p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Une application de gestion d'école sécurisée, simple et pratique.</p> -->
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">une solution sur mesure pour répondre au mieux à vos besoins .</p> 
                            
                            @guest
                                <a href="{{url('/login')}}" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s"> Démo &nbsp;&nbsp;<i class="lni-rocket"></i></a>
                            @else
                                <a href="{{url('/profile')}}" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s"> Démo &nbsp;&nbsp;<i class="lni-rocket"></i></a>
                            @endguest
                        
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="{{ asset('landing/assets/images/header-hero.png') }}" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
    
    <!--====== BRAMD PART START======-->
    
    <div id="services" class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        <div class="single-logo">
                            <img src="{{ asset('landing/assets/images/services.PNG') }}" alt="brand">
                        </div> 
                       <!--======  <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{ asset('landing/assets/images/brand-2.png') }}" alt="brand">
                        </div> 
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="{{ asset('landing/assets/images/brand-3.png') }}" alt="brand">
                        </div> 
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="{{ asset('landing/assets/images/brand-4.png') }}" alt="brand">
                        </div> 
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="{{ asset('landing/assets/images/brand-5.png') }}" alt="brand">
                        </div> ======-->
                    </div>  
                </div>
            </div>    
        </div>  
    </div>
    
    <!--======  BRAMD PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->
    
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title"> <span> Gérer </span> votre établissement scolaire en toute simplicité.</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="{{ asset('landing/assets/images/services-shape.svg') }}" alt="shape">
                            <img class="shape-1" src="{{ asset('landing/assets/images/services-shape-1.svg') }}" alt="shape">
                            <i class="lni-pointer-up"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Facile</a></h4>
                            <p class="text">  en quelques clics .Tout sera prêt pour gérer et controler votre établissement scolaire .</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="{{ asset('landing/assets/images/services-shape.svg') }}" alt="shape">
                            <img class="shape-1" src="{{ asset('landing/assets/images/services-shape-2.svg') }}" alt="shape">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Simple</a></h4>
                            <p class="text">Vous permet d’éditer n’importe quelle information avec facilité et sans demandé une grosse connaissance dans le monde informatique.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="{{ asset('landing/assets/images/services-shape.svg') }}" alt="shape">
                            <img class="shape-1" src="{{ asset('landing/assets/images/services-shape-3.svg') }}" alt="shape">
                            <i class="lni-lock"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Sécurité</a></h4>
                            <p class="text">Conception et architecture respectant les normes de développement des systèmes d’informations.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Administration</h3>
                        </div> <!-- section title -->
                        <p class="text">Gestion du dossier de l'élève</p>
                        <p class="text">Gestion des payments</p>
                        <p class="text">Gestion des professeurs</p>
                        <p class="text">Gestion des emplois du temps, notes et absences</p>
                        <p class="text">Consultation les messages des parents</p>                        
                     </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('landing/assets/images/about1.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('landing/assets/images/about-shape-1.svg') }}" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('landing/assets/images/about-shape-2.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Enseignants</h3>
                        </div> <!-- section title -->
                        <p class="text">Communication avec l’administration</p>                        
                        <p class="text">Consulter l'emplois du temps </p>
                        <p class="text">Gérer les absences et les retards</p>
                        <p class="text">Gérer les notes des élèves </p>
                     </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('landing/assets/images/about2.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Parents-Elèves </h3>
                        </div> <!-- section title -->
                        <p class="text">Communication avec l’administration</p>
                        <p class="text">Calendrier des séances prévues et informations sur le cour</p>
                        <p class="text">Consultation les payments</p>
                        <p class="text">Consultation les notes</p>
                        <p class="text">Consultation les absences et les retards</p>
                     </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('landing/assets/images/about3.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('landing/assets/images/about-shape-1.svg') }}" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    
    <!--====== ABOUT PART ENDS ======-->
    
    
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title" style="text-align: center;">CONTACTEZ-NOUS</h2>
                        </div>
                    </div> 
                </div> 
                <br>
                <br>
                    <form method="post" action="{{ url('formcontact') }}">
                    @csrf
                      <div class="row justify-content-center">
                        <div class="col-lg-12"> 
                            <input name="name" type="text" class="form-control" placeholder="Nom Complet" required> <br>
                        </div>
                        <div class="col-lg-12"> 
                            <input name="objet" type="text" class="form-control" placeholder="Objet" required> <br>
                        </div>                        
                        <div class="col-lg-12"> 
                            <input name="telephone" type="numero" class="form-control" placeholder="Téléphone" required> <br>
                        </div> 
                        <div class="col-lg-12"> 
                            <input name="email" type="email" class="form-control" placeholder="Email"> <br>
                        </div>                         
                        <div class="col-lg-12"> 
                            <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea><br>
                        </div> 
                        <div class="col-lg-12"> 
                            <button class="main-btn">Envoyer</button>
                        </div> 
                       </div> 
                    </form>  
             </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="landing/assets/images/logo2.png" alt="logo">
                            </a>
                            <p class="text"><strong>Le logiciel de gestion d’école</strong> vous suffit pour <strong>gérer en toute simplicité votre école</strong>. Sur écran et avec quelques clics, vous <strong>pilotez votre école</strong>, toutes les opérations et les documents nécessaires pour la <strong>scolarité</strong> seront traités en quelques secondes .</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">  
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Conditions d'utilisation</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#features">Caractéristiques</a></li>
                                    <li><a href="#about">A propos</a></li> 
                                    <li><a href="#footer">Contact</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contactez-nous</h4>
                            </div>
                            <ul class="contact">
                                <li>+809272561823</li>
                                <li>info@gmail.com</li>
                                <li>www.yourweb.com</li>
                                <li>Anfa , Casablanca <br> Maroc.</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Copyright 2021 <a href="#" rel="nofollow"> E-Madrassati </a> tous les droits sont résérvés.</p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ asset('landing/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('landing/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script>
    
    <!--====== Plugins js ======-->
    <script src="{{ asset('landing/assets/js/plugins.js') }}"></script>
    
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('landing/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/scrolling-nav.js') }}"></script>
    
    <!--====== wow js ======-->
    <script src="{{ asset('landing/assets/js/wow.min.js') }}"></script>
    
    <!--====== Particles js ======-->
    <script src="{{ asset('landing/assets/js/particles.min.js') }}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>
    
</body>

</html>
