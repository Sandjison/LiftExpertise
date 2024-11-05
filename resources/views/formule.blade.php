<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <title>Galerie</title>
</head>

<body>
    <header>
        <!-- menu responsive -->

        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <a href="#" class="nav_logo">
                <img src="{{ asset('assets/images/Remove-bg.ai_1723043103315.png') }}" alt="logo">
                LiftExpertise
            </a>
        </div>

        <div class="menu ">
            <li><a href="/">Acceuil</a></li>
            <li><a href="{{ route('galerie') }}">Galerie</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    Présentation
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('us') }}">Qui sommes-nous ?</a>
                    <a class="dropdown-item" href="{{ route('mission') }}">Notre mission</a>
                    <a class="dropdown-item" href="{{ route('formation') }}">Fiche de renseignements</a>
                </div>
            </li>
            <li><a href="{{ route('formule') }}">Formation</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>

        </div>

        <button class="login_btn"> <a href="{{ route('login') }}" class="text-white">Se connecter</a> </button>

    </header>

    <section class="bluz">

        <h3>Nos formules de formation</h3>

    </section>

    <div class="container-fluid price ">
        <div class="container py-3">

            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text-dark border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Normale</p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5" style="color: #202DE6;">100
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">

                                <p class="mb-0" style="color: #000;"><span>1
                                        mois ( CHARIOT ÉLEVATEUR ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5 ">
                            <p>
                                <i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>

                                Connaissance de
                                l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Suspension temporaire</p>

                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 1]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Accélérée</p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5">120
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">
                                <p class="mb-0" style="color: #000;"><span>2
                                        semaines ( CHARIOT ÉLEVATEUR ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Suspension temporaire</p>
                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 2]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Premium
                                ou VIP</p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5">150
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">
                                <p class="mb-0" style="color: #000;"><span>1
                                        mois ( CHARIOT ÉLEVATEUR ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Suspension temporaire</p>
                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 3]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
         
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text-dark border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Normale</p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5" style="color: #202DE6;">350
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">

                                <p class="mb-0" style="color: #000;"><span>3 ou 4
                                        mois ( CHARGEUSE ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5 ">
                            <p>
                                <i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>

                                Connaissance de
                                l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Suspension temporaire</p>

                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 4]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Normale</p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5">450
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">
                                <p class="mb-0" style="color: #000;"><span>2 ou 3
                                        mois ( GRUE PPM ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Suspension temporaire</p>
                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 5]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Normale </p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5">350
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">
                                <p class="mb-0" style="color: #000;"><span>2 ou 3
                                        mois ( PELLE HYDRAULIQUE ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Suspension temporaire</p>
                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 6]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text border-bottom d-flex flex-column justify-content-center p-4"
                            style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0" style="color: #000;">
                                Normale </p>
                            <div class="d-flex justify-content-center">
                                <p class="mb-0"><span class="display-5">300
                                        000 F
                                        Cfa</span></p>
                            </div>
                            <div class="justify-content-center">
                                <p class="mb-0" style="color: #000;"><span>1 ou 2
                                        mois ( CAMION BENNE ) </span></p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de
                                l'automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Cours théorique</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Entretien de l'
                                automobile</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Psychologie du
                                conducteur</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Paiement par tranche</p>
                            <p><i class="far fa-check-square"
                                    style="color: #202DE6; background-color: transparent;"></i>
                                Connaissance de l'automobile
                            </p>
                            <p><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Cours de conduite sur
                                rendez-vous</p>
                            <p class="mb-4"><i class="far fa-check-square"
                                    style="color: red; background-color: transparent;"></i>
                                Suspension temporaire</p>
                            <button class="btn btn-primary py-2 px-3 px-md-4 fs-6 fs-md-5" type="button"
                                onclick="window.location.href='{{ route('souscription', ['id' => 7]) }}'">
                                Commencer maintenant
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br/> <br/>

    <div class="bg_footer">
        <div class="heading__p">
            <h4>Contactez LiftExpertise plus au plus vite !</h4><br />
            <h6>Pour toute demande d’information ou de prise de
                rendez-vous,
                contactez-nous au +228 98742882 ou par courriel <br />
                via le formulaire de contact. Au plaisir de vous
                rencontrer
                !</h6>
        </div>
        <div class="footer_column">
            <div class="footer_1">
                <img src="{{ asset('assets/images/icons8-téléphone-100.png') }}">
                <h6>Téléphone</h6>
                <p>+228 98742882</p>
            </div>
            <div class="footer_2">
                <img src="{{ asset('assets/images//icons8-email-100.png') }}">
                <h6>Courriel</h6>
                <p>ekoueblasandjison@gmail.com</p>
            </div>
            <div class="footer_3">
                <img src="{{ asset('assets/images/icons8-position-100.png') }}">
                <h6>Ville</h6>
                <p>Lomé</p>
            </div>
        </div>
    </div>
    <div class="heading__p">Créé par <strong>Mr EKOUE-BLA Sandjison</strong> | Voir la vie du bon coté.</div>


    <script>
        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function() {
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
    </script>

</body>

</html>
