<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Remove-bg.ai_1723043103315.png') }}">


    <title>Equipe</title>
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

        <h3>Notre équipe</h3>

    </section>

    <section>
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
                        <div class="progress-bar bg-blue" id="profile-rating-bar" style="width: 90%"></div>
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
    </section>

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
                <p> <a href="mailto:ekoueblasandjison@gmail.com" style="color: #fff">ekoueblasandjison@gmail.com</a></p>
            </div>
            <div class="footer_3">
                <img src="{{ asset('assets/images/icons8-position-100.png') }}">
                <h6>Ville</h6>
                <p>Lomé</p>
            </div>
        </div>
    </div>
    <div class="heading__p">Créé par <strong>Mr EKOUE-BLA Sandjison</strong> | Voir la vie du bon coté.</div>


    <script src="{{ asset('assets/js/main.js') }}"></script>

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
