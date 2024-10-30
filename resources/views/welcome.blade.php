<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slide.css') }}">
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


</head>

<body>

    <!-- header  -->
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
            <li><a href="#home">Acceuil</a></li>
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

        <button class="login_btn "> <a href="{{ route('login') }}" class="text-white">Se connecter</a> </button>

    </header>

    <!-- section Acceuil -->

    <div class="loader"></div>

    <section class="cd-slider  main-content">
        <ul>
            <li>
                {{-- data-color="#FF384B" --}}
                <section id="home" class="section home">
                    <div class="left  home__data home__container container grid">
                        <h2>CONDUITE DE</h2>

                        <h1> <span>CHARIOT ÉLÉVATEUR</span> </h1>
                        <p>Cette formation pratique vous offre l’opportunité de
                            développer
                            une expertise dansle marché du travail et
                            d’améliorer vos
                            perspectives d’emploi grâce à l’obtention d’une
                            attestation.</p>
                        <a href="{{ route('registration') }}" class="login_btn">S'inscrire</a>
                    </div>
                    <div class="right">
                        <img src="{{ asset('assets/images/Remove-bg.ai_1723043103315.png') }}">
                    </div>

                    <div class="home__triangle home__triangle-1 home__img"></div>

                </section>
            </li>
            <li>
                {{-- data-color="#FF9C00" --}}
                <section id="home" class="section home">
                    <div class="left  home__data home__container container grid">
                        <h2>CONDUITE DE</h2>

                        <h1> <span>PELLE HYDRAULIQUE</span> </h1>
                        <p>Cette formation pratique vous offre l’opportunité de
                            développer
                            une expertise dansle marché du travail et
                            d’améliorer vos
                            perspectives d’emploi grâce à l’obtention d’une
                            attestation.</p>
                        <a href="{{ route('registration') }}" class="login_btn">S'inscrire</a>
                    </div>
                    <div class="right">
                        <img src="{{ asset('assets/images/Remove-bg.ai_1730225168299.png') }}">
                    </div>

                    <div class="home__triangle home__triangle-1 home__img"></div>

                </section>
            </li>
            <li>
                {{-- data-color="#002AFF" --}}
                <section id="home" class="section home">
                    <div class="left  home__data home__container container grid">
                        <h2>CONDUITE DE</h2>

                        <h1> <span>CHARGEUSE</span> </h1>
                        <p>Cette formation pratique vous offre l’opportunité de
                            développer
                            une expertise dansle marché du travail et
                            d’améliorer vos
                            perspectives d’emploi grâce à l’obtention d’une
                            attestation.</p>
                        <a href="{{ route('registration') }}" class="login_btn">S'inscrire</a>
                    </div>
                    <div class="right">
                        <img src="{{ asset('assets/images/Remove-bg.ai_1730223390785.png') }}">
                    </div>

                    <div class="home__triangle home__triangle-1 home__img"></div>

                </section>
            </li>
            <li>
                {{-- data-color="#002AFF" --}}
                <section id="home" class="section home">
                    <div class="left  home__data home__container container grid">
                        <h2>CONDUITE DE</h2>

                        <h1> <span>GRUE PPM</span> </h1>
                        <p>Cette formation pratique vous offre l’opportunité de
                            développer
                            une expertise dansle marché du travail et
                            d’améliorer vos
                            perspectives d’emploi grâce à l’obtention d’une
                            attestation.</p>
                        <a href="{{ route('registration') }}" class="login_btn">S'inscrire</a>
                    </div>
                    <div class="right">
                        <img src="{{ asset('assets/images/264_fbc9ac5b6aeb025de9ba7f24e163d516.png') }}">
                    </div>

                    <div class="home__triangle home__triangle-1 home__img"></div>

                </section>
            </li>
        </ul>
        <nav>
            <div><a class="prev" href="#"></a>
            </div>
            <div><a class="next" href="#"></a></div>
        </nav>
    </section>

    <section class="features" id="features">
        <div class="heading__p ">
            <h1 class="heading"><span>
                    Notre Fierté</span></h1><br />
            <h3>Ce qui nous distingue des autres</h3><br />
            <p>Nous donnons de notre temps et de nos moyens pour vous
                fournir un travail de
                <br /> qualité. En témoignent les chiffres suivants.
            </p>
        </div>
        <div class="container mt-5">
            <div class="row g-4">
                <div class="col-md-4 d-flex justify-content-end">
                    <div class="box_1">
                        <h4 id="counter1">0%</h4>
                        <h3>Taux de réussite</h3>
                        <p>Un excellent taux de réussite, avec nos méthodes
                            efficaces pour vous garantir votre réussite à
                            l'examen du permis.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <div class="box_1">
                        <h4 id="counter2">0%</h4>
                        <h3>Clients satisfaits</h3>
                        <p>Avis positifs de nos apprenants à l'issue de leurs
                            examens ainsi que les personnes ayant utilisé
                            nos services.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <div class="box_1">
                        <h4 id="counter3">0%</h4>
                        <h3>Disponibilité de nos formateurs</h3>
                        <p>Une équipe très engagée et disponible tout le
                            temps pour répondre à vos besoins.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="bg_blue">
        <section class="formation" id="formation">
            <div class="heading__p">
                <h1 class="heading"><span>Nos
                        Formation</span></h1><br />
                <h3>Choisissez l'offre qui vous convient le
                    mieux</h3><br />
                <p>Que vous soyez fonctionnaire, homme d'affaire ou
                    encore
                    étudiant,<br />
                    nos offres conviennent à tous.</p>
            </div>

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
                    </div>
                </div>
            </div>

            <div class="heading__p">
                <button onclick="window.location.href='{{ route('notreEquipe') }}'">
                    Plus de formule
                    <img src="{{ asset('assets/images/icons8-flèche-droite-50.png') }}">
                </button>
            </div>

        </section>
    </div>
    <section>
        <div class="heading__p">
            <h1 class="heading"><span>Notre Équipe</span></h1><br />
            <h3>Une équipe très dynamique à votre disposition</h3><br />
            <p>Toujours attentifs à vos besoins, nous sommes prêts à vous
                offrir<br />
                des solutions adaptées avec rapidité et efficacité.</p>
        </div>

        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <img class="w-100" src="{{ asset('assets/images/homme1.jpg') }}" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Florent</h4>
                                <!-- <h4 style="font-weight:300">4.5</h4> -->
                            </div>
                            <p class="card-text">Formateur</p>
                            <button class="btn btn-primary w-100" data-img="{{ asset('assets/images/homme1.jpg') }}"
                                onclick="showProfile(this)">Lire plus</button>

                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <img class="w-100" src="{{ asset('assets/images/homme2.jpg') }}" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Williams</h4>
                                <!-- <h4 style="font-weight:300">5</h4> -->
                            </div>
                            <p class="card-text">Formateur en chef</p>
                            <button class="btn btn-primary w-100" data-img="{{ asset('assets/images/homme2.jpg') }}"
                                onclick="showProfile(this)">Lire
                                plus</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <img class="w-100" src="{{ asset('assets/images/femme2.png') }}" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Sarah</h4>
                                <!-- <h4 style="font-weight:300">5</h4> -->
                            </div>
                            <p class="card-text">Assistante formateur</p>
                            <button class="btn btn-primary w-100" data-img="{{ asset('assets/images/femme2.png') }}"
                                onclick="showProfile(this)">Lire
                                plus</button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <img class="w-100" src="./assets/images/homme1.jpg" alt="Erica">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">John</h4>
                                <!-- <h4 style="font-weight:300">2.5</h4> -->
                            </div>
                            <p class="card-text">Formateur</p>
                            <button class="btn btn-primary w-100" data-img="{{ asset('assets/images/homme1.jpg') }}"
                                onclick="showProfile(this)">Lire
                                plus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Modal -->
            <div class="row d-flex flex-wrap align-content-center p-3 border" id="profile">
                <div class="w-100">
                    <span class="close float-end" onclick="hideProfile()">&times</span>
                </div>
                <div class="col-md-3 border-end p-4">
                    <img class="w-100" id="profile-img" alt="Profile Image">
                    <div>
                        <h2 class="display-6 text-center" id="profile-rating">Rating</h2>
                        <p class="card-text text-center" id="profile-skill">(Skill)</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1 class="display-6 mt-2">Notation</h1>
                    <span id="profile-rating">4.5/5</span>
                    <div class="progress">
                        <div class="progress-bar bg-blue" id="profile-rating-bar" style="width: 90%">
                        </div>
                    </div>
                    <h1 class="display-6 mt-2">Expérience</h1>
                    <span id="profile-completion">90/100</span>
                    <div class="progress">
                        <div class="progress-bar bg-blue" id="profile-completion-bar" style="width: 90%"></div>
                    </div>
                    <h1 class="display-6 my-2">Temps de réponse</h1>
                    <span id="profile-response-time">Moy 4 Heure
                        /Jour</span>
                    <div class="progress">
                        <div class="progress-bar bg-blue" id="profile-response-time-bar" style="width: 16.67%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading__p">

            <button onclick="window.location.href='{{ route('notreEquipe') }}'">
                Toute l'équipe
                <img src="{{ asset('assets/images/icons8-flèche-droite-50.png') }}">
            </button>
        </div>

    </section>

    <div class="bg_blue">
        <section>
            <div class="heading__p">
                <h1 class="heading"><span>Nos Engagements</span></h1><br />
                <h3>Un véritable engagement à vos côtés</h3><br />
                <p>Avec une détermination sans faille, nous vous proposons
                    des solutions sur mesure,<br />
                    en alliant expertise et réactivité.</p>
            </div>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">

                        <div class="menu__card">
                            <div class="box_3">
                                <h3>Collaboration</h3>
                                <img src="{{ asset('assets/images/3a90cf40-3134-482a-bd3f-2cb48a89aacb.png') }}">
                                <br /><br />
                                <p>Ensemble, nous accomplissons plus.
                                    Votre succès est le nôtre, et c'est
                                    ainsi quenous avançons, main dans
                                    la main.</p>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="menu__card">
                            <div class="box_2">
                                <h3>Efficacité</h3>
                                <img src="{{ asset('assets/images/0ca00cfe-83c8-4d2f-84ab-22a249651226.png') }}">
                                <br /><br />
                                <p>Notre exigence pédagogique n’aura
                                    d’égal que notre bienveillance. On
                                    réussit quand vous réussissez. Et ça,
                                    c’est la meilleure des motivations.</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="menu__card">
                            <div class="box">
                                <h3>Plaisir</h3>
                                <img src="{{ asset('assets/images/67c18b47-56e7-4b52-8b8a-45be37730a36.png') }}">
                                <br /><br />
                                <p>On t’accompagne dans un moment
                                    clé de ton histoire. Comme le voyage
                                    compte autant que la destination, on
                                    fera tout pour te procurer un
                                    moment de plaisir, de joie et de
                                    fierté.</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="menu__card">
                            <div class="box_3">
                                <h3>Liberté</h3>
                                <img src="{{ asset('assets/images/7db3eff4-66e4-407b-b055-9cb3fa7fb299.png') }}">
                                <br /><br />
                                <p>Pour te permettre d’aller où tu veux,
                                    quand tu veux, on est prêts à prendre
                                    certaines libertés. Celle d’innover et
                                    d’inventer de nouvelles routes s’il le
                                    faut.</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="menu__card">
                            <div class="box_2">
                                <h3>Simplicité</h3>
                                <img src="{{ asset('assets/images/d71f603a-5f40-42e6-bcf0-f06be6684062.png') }}">
                                <br /><br />
                                <p>Où que tu sois, on se rapproche de
                                    toi. C’est notre façon à nous de
                                    rendre la mobilité plus agréable.</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="menu__card">
                            <div class="box">
                                <h3>Transparence</h3>
                                <img src="{{ asset('assets/images/7daaa26d-1a0a-49f3-8b40-bc9b6702f154.png') }}">
                                <br /><br />
                                <p>Parce qu’on ne s’engage pas sur une
                                    nouvelle route sans visibilité. Nos
                                    démarches sont claires, nos actions
                                    limpides. Si vous roulez avec nous,
                                    ce sera en toute confiance.</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <section class="other-feature-area">
        <div class="heading__p">
            <h1 class="heading"><span>À Propos</span></h1><br />
        </div><br /><br /><br />
        <div class="container">
            <div class="feature-inner row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <h2>
                            L'excellence en formation,<br /> votre succès en action
                        </h2>
                        <p>
                            Spécialisé en formation, nous proposons des programmes de qualité pour
                            développer vos
                            compétences et vous accompagner vers le succès.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="other-feature-item">
                        <i class="fas fa-truck"></i>

                        <h4><strong>Choix d'engin et équipement</strong></h4>
                        <div>
                            <p>
                                Savoir choisir l'engin de manutention et l'équipement porte-charge adaptés
                                est essentiel
                                pour garantir l'efficacité et la sécurité des opérations. Cela implique de
                                comprendre
                                les spécificités de chaque engin en fonction du type de charge, de
                                l'environnement de
                                travail et des exigences logistiques, afin d'assurer une manutention
                                optimale et sans
                                risque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--160">
                    <div class="other-feature-item">

                        <i class="bi bi-person-badge"></i>
                        <h4><Strong>Choix d'engin et équipement</Strong></h4>
                        <div>
                            <p>
                                Effectuer les contrôles à la prise de poste est une étape cruciale pour
                                garantir la
                                sécurité et la conformité des équipements avant le début des opérations.
                                Cela consiste à
                                vérifier le bon état de fonctionnement, le respect des normes de sécurité et
                                le bon
                                réglage des outils et machines, assurant ainsi un environnement de travail
                                sûr et
                                efficace.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--260">
                    <div class="other-feature-item">
                        {{-- <i class="ti-medall-alt"></i> --}}
                        <i class="ti-layers"></i>

                        <h4><strong>Classement des équipements</strong></h4>
                        <div>
                            <p>
                                Le classement des équipements porte-charge consiste à organiser et
                                identifier les
                                différents outils de manutention en fonction de leurs caractéristiques et de
                                leurs
                                usages. Cette démarche permet d'optimiser l'espace de stockage, de faciliter
                                l'accès aux
                                équipements nécessaires et d'assurer une gestion efficace et sécurisée des
                                ressources de
                                manutention.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="other-feature-item">
                        <i class="ti-briefcase"></i>
                        <h4><strong>Guides et manuels</strong></h4>
                        <div>
                            <p>
                                Utiliser les guides des constructeurs et les manuels d’utilisation est
                                essentiel pour
                                garantir un fonctionnement correct et sécuritaire des équipements. Ces
                                documents
                                fournissent des instructions détaillées sur l'installation, l'utilisation et
                                l'entretien
                                des machines, permettant de maximiser leur performance tout en minimisant
                                les risques
                                d'erreurs et d'accidents.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--160">
                    <div class="other-feature-item">
                        {{-- <i class="ti-crown"></i> --}}
                        <i class="fas fa-hard-hat"></i>
                        <h4><strong>Hygiene et securite</strong></h4>
                        <div>
                            <p>
                                L'hygiène et la sécurité sont fondamentales pour créer un environnement de
                                travail sûr
                                et sain. Elles impliquent la mise en place de pratiques et de protocoles
                                visant à
                                prévenir les risques sanitaires et les accidents, tout en assurant le
                                bien-être des
                                employés. Cela comprend des mesures telles que le nettoyage régulier des
                                installations,
                                la gestion des déchets, la prévention des risques ergonomiques, et le
                                respect des normes
                                de sécurité au travail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt--260">
                    <div class="other-feature-item">
                        {{-- <i class="ti-headphone-alt"></i> --}}
                        <i class="fas fa-cogs"></i> <!-- Pour des équipements plus généraux -->

                        <h4><strong>Opérations chariot</strong></h4>
                        <div>
                            <p>
                                Le conducteur de chariot élévateur a pour mission d’effectuer des opérations
                                de
                                transport, stockage et déchargement en utilisant un chariot élévateur
                                adapté. Il doit
                                suivre strictement les consignes de sécurité et assurer la maintenance de
                                base du
                                chariot. L’utilisation d’un système d’information facilite la recherche
                                d’informations
                                pertinentes et la saisie des données liées aux opérations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <!-- Features Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative me-lg-4">
                            <img class="img-fluid w-100"
                                src="{{ asset('assets/images/chariot-elevateur-categorie-4.webp') }}">
                            <span
                                class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                                style="width: 120px; height: 120px;"></span>
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/w46hy1RML4s?autoplay=1"
                                data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="fw-medium text-uppercase text mb-2">POUR NOUS CHOISIR !</p>
                        <h1 class="display-5 mb-4">Quelques raisons pour lesquelles les gens nous
                            choisissent !</h1>
                        <p class="mb-4">Grâce à notre expertise, à notre service client exceptionnel
                            et à notre engagement indéfectible à fournir des solutions personnalisées, nous
                            sommes
                            devenus
                            le choix privilégié pour ceux qui recherchent une qualité inégalée et une
                            attention
                            particulière
                            à leurs besoins uniques.</p>
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-blue">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h4>Travailleurs expérimentés</h4>
                                        <span>Un service client exceptionnel et des solutions sur
                                            mesure.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-blue">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h4>Des services de formation fiables</h4>
                                        <span>Nos formations assurent une qualité et une fiabilité
                                            exceptionnelles.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-blue">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h4>Assistance clientèle 24h/24 et 7j/7</h4>
                                        <span>Des solutions sur mesure font de nous le choix parfait.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- Video Modal Start -->
        <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe id="video" src="" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->

    </section>

    <div class="bg_footer">
        <div class="heading__p">
            <h4>Contactez LiftExpertise plus au plus vite !</h4><br />
            <h6>Pour toute demande d’information ou de prise de
                rendez-vous,
                contactez-nous au+228 98742882 ou par courriel <br />
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
    <div class="heading__p">Créé par <strong>Mr EKOUE-BLA Sandjison</strong>
        |
        Voir la vie du bon coté.</div>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Include external JavaScript libraries -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.2/dist/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/easing@1.4.1/dist/easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/waypoints@4.0.1/lib/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const swiper = new Swiper(".swiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500, // Délai entre les changements de slide en millisecondes
                disableOnInteraction: false, // Ne pas désactiver l'autoplay lorsque l'utilisateur interagit avec le slider
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        // Pause l'autoplay quand on survole un slide
        const swiperContainer = document.querySelector('.swiper-wrapper');
        swiperContainer.addEventListener('mouseover', () => {
            swiper.autoplay.stop();
        });

        swiperContainer.addEventListener('mouseout', () => {
            swiper.autoplay.start();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js (requis pour Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.querySelector(".loader").style.display = "none"; // Cache le loader
                document.querySelector(".main-content").style.display = "block"; // Affiche le slider
            }, 300);
        });
    </script>



</body>

</html>
