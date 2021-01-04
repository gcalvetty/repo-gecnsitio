<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GECN-Dev</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
</head>
<body class="antialiased">    
    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    </div>


    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">GECN-Dev</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/dashboard') }}">Dashboard</a></li>
                        @else
                        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('login') }}">Login</a></li>
                        @endif
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="masthead bg-primary text-white text-center">        
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="assets/img/profile.png">
            <h1>Guillermo Calvetty</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Web Developer - User Experience Designer</h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Portfolio</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-1">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/cabin.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-2">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/cake.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-3">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/circus.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-4">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/game.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-5">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/safe.png">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-6">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/submarine.png">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="bg-primary text-white mb-0">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">About</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-12 ml-auto">                   

                    <h4 class="text-uppercase mb-4">¿What do we create?</h4>
                    <p class="lead mb-0"><span>We put all our skills in creating what you have devised and being able to carry it out.</span></p>
                    <ul>
                        <li>Modern design - We create modern and clean theme for your business company.</li>
                        <li>Powerful templates - We create modern and powerful Templates with animation and particular features.</li>
                        <li>Clean Code - We create your sites using modern and powerful HTML5 and CSS3 code Easy to Read and Customize.</li>
                    </ul>
                    <p>GECN-Dev, It is created from a concern for development and collaboration in the Web environment since 2002. During these years they have seen different ways of applying radical changes in web design and development, the last 5 years being the most notorious On it.</p>
                    <p>With the rise of content management tools, as well as new ways of promoting and selling products to the consumer. Taking advantage of the staggered growth of social networks.</p>
            </div>            
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Contact Me</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <livewire:send-mail />                  
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p>Isaac Aranibar and Av. Sexta</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">Around the Web</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.facebook.com/GecnDev" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.linkedin.com/in/gcalvetty/" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://gcalvetty.wordpress.com/" target="_blank"><i class="fa fa-wordpress fa-fw"></i></a></li>
                        <li class="list-inline-item"></li>                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">Freelancer</h4>                    
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;GECN-Dev 2020</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Red Psi</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/cabin.png">
                                <p class="mb-5">Desarrollo Consultorio Psicologico<br>RedPsi.org</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">AXIOMA</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/cake.png">
                                <p class="mb-5">AXIOMA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">sis - ccc</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/circus.png">
                                <p class="mb-5">Development App Control and assignment of school activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">descrubre iguazu</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/game.png">
                                <p class="mb-5">Virtual Guide of the tourist attraction IGUAZU</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">ACASalud</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/safe.png">
                                <p class="mb-5">Intranet for the Health system</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">surdays</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/submarine.png">
                                <p class="mb-5">Real estate project</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    @livewireScripts
</body>
</html>
