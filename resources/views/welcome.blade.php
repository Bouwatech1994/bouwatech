<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bouwatechnologie.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset("img/logo.png")}}" rel="icon">
    <link href="{{asset("img/logo.png")}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("assets1/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/icofont/icofont.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/ionicons/css/ionicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/venobox/venobox.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/vendor/aos/aos.css")}}" rel="stylesheet">
    <link href="{{asset("assets1/css/style.css")}}" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.html">Bouwatech</a></h1>
                {{-- <a href="/" class="logo mr-auto"><img src="{{asset("img/logo.png")}}" alt="" class="img-fluid"></a>--}}
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="/">Accueil</a></li>
                        <li><a href="#about">Apropos de Nous</a></li>
                        <li><a href="#services">Nos Services</a></li>
                        <li><a href="#portfolio">Nos Produits</a></li>
                        <li><a href="#team">Nos Partenaires</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="{{route('register')}}">Créer un Compte</a></li>
                        <li><a href="{{route('login')}}">Connexion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ======= Intro Section ======= -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('{{asset('assets1/img/intro-carousel/3.jpg')}}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Nous sommes un groupe de développeur passionné originaires de la guinée</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Nous développons principalement des applications mobile et des sites internet. Nous réalisons des projets complets. Ex: API, Back-Office, site internet, App Android et/ou iOS. Nous utilisons les dernières technologies comme React.                             </p>
                            <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{asset('assets1/img/intro-carousel/2.jpg')}}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Nous sommes passionnés par le Web et le design graphique  </h2>
                            <p class="animate__animated animate__fadeInUp">Nous croyons que le Web est l'innovation la plus marquante des 20 dernières années. Ce mode de communication change le monde et le rend meilleur.</p>
                            <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{asset('assets1/img/intro-carousel/3.jpg')}}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Nous aimons servir nos clients</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Nous considérons que c’est un honneur et une joie de servir notre clientèle , c’est pourquoi nous consacrons temps et efforts pour vous faire sourire. La vie peut être simple, laissez-nous vous la simplifier grâce notre expertise.
                            </p>
                            <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{asset('assets1/img/intro-carousel/4.jpg')}}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Une relation de confiance</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Nous croyons aux relations de confiance, aux relations durables et nous voulons pour cela un modèle d’échange authentique et transparent avec tous nos clients, partenaires et collaborateurs.                            </p>
                            <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                {{--<div class="carousel-item" style="background-image: url('{{asset('assets1/img/intro-carousel/5.jpg')}}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contactez-nous</a>
                        </div>
                    </div>
                </div>--}}
            </div>
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section><!-- End Intro Section -->

<main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box">
                    <i class="ion-ios-bookmarks-outline"></i>
                    <h4 class="title"><a href="">Création de sites Web</a></h4>
                    <p class="description">
                        Un site Internet se doit d’être attrayant, c’est pour cela que les sites imaginés par notre équipe sauront attirer l’attention.
                    </p>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-stopwatch-outline"></i>
                    <h4 class="title"><a href="">Logo & Design</a></h4>
                    <p class="description">Votre identité visuelle doit clairement symboliser vos services, inspirer confiance, être simple, constante et posséder sa personnalité propre.</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    <h4 class="title"><a href="">Image de marque</a></h4>
                    <p class="description">Pour augmenter l’impact publicitaire de votre nom, de votre image ou de votre produit, confiez-nous votre projet.</p>
                </div>

            </div>
        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Appropos de Nous</h3>
                <p>
                    Pour Le Groupe Bouwatech, bien connaître les aînés c’est aussi bien comprendre et anticiper leurs attentes en matière de developpement. C’est pourquoi nous concevons, développons et gérons chacun de nos projets de bout en bout. Cet engagement nous permet ainsi d’apporter le meilleur de nos connaissances et de l’innovation dans chaque détail de nos futures projets.
                </p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('assets1/img/about-mission.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Nos Mission</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('assets1/img/about-plan.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Nos Plan</a></h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('assets1/img/about-vision.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Nos Vision</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header wow fadeInUp">
                <h3>Services</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="ion-ios-people-outline"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container text-center" data-aos="zoom-in">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Nos Outils</h3>
                <p>Les Outils de dévéloppements les plus utilisers par nos dévéloppeurs </p>
            </header>
            <div class="skills-content">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">HTML <i class="val">100%</i></span></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Laravel <i class="val">80%</i></span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">CSS <i class="val">90%</i></span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-maroon" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Framework javascript (Ionic,Angular, Réact ...) <i class="val">50%</i></span>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Nos Réalisations</h3>
                <p>La Plus part de nos réalisation sont gratuites</p>
            </header>
            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">5</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">10</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">2</span>
                    <p>Partenaires</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">6</span>
                    <p>Travailleurs</p>
                </div>
            </div>
            <div class="facts-img">
                <img src="{{asset('assets1/img/facts-img.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </section><!-- End Facts Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3 class="section-title">Nos Produits</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class=" col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Web</li>
                        <li data-filter=".filter-card">Mobile</li>
                        <li data-filter=".filter-web">Desktop</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">App 1</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Web 3</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">App 2</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets1/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('assets1/img/portfolio/card2.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Card 2</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets1/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('assets1/img/portfolio/web2.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Web 2</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('assets/img/portfolio/app3.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">App 3</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets1/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('assets1/img/portfolio/card1.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Card 1</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets1/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('assets1/img/portfolio/card3.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Card 3</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets1/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('assets1/img/portfolio/web1.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Web 1</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="{{asset('assets1/img/clients/client-1.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-2.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-3.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-4.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-5.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-6.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-7.png')}}" alt="">
                <img src="{{asset('assets1/img/clients/client-8.png')}}" alt="">
            </div>

        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Site web</h3>
                        <address>bouwatech.com</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Numéro Téléphone</h3>
                        <p><a href="tel:+155895548855">+224 628-822-024</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">bouwatech@gmail.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="{{route('contacts.store')}}" method="post" role="form" class="php-email-form">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Svp ecrivez quelque chose ici" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button class="rounded" type="submit">Envoyer le Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Bouwatech</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>bouwatech</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bouwatech
          -->
            Designed by <a href="https://bootstrapmade.com/">fodé camara</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- Vendor JS Files -->
<script src="{{asset("assets1/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("assets1/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets1/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
<script src="{{asset("assets1/vendor/php-email-form/validate.js")}}"></script>
<script src="{{asset("assets1/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("assets1/vendor/counterup/counterup.min.js")}}"></script>
<script src="{{asset("assets1/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("assets1/vendor/venobox/venobox.min.js")}}"></script>
<script src="{{asset("assets1/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets1/vendor/aos/aos.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("assets1/js/main.js")}}"></script>

</body>
</html>
