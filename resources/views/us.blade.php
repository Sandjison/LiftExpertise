<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qui nous somme</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

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

        <h3>Qui sommes-nous ?</h3>

    </section>

    <section class="bg-primary-gradient" id="faq">
        <div class="bg-holder"
            style="background-image:url(assets/img/gallery/faq-bg.png);background-position:right;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row flex-center">
                <div class="col-md-3">

                </div>
                <div class="col-md-6"><img class="w-100" src="{{ asset('assets/images/illustration-student-.png') }}"
                        alt="..." />
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row flex-center py-4">
                <div class="col-md-12 ">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Pourquoi choisir LiftExpertise
                                        pour exceller dans la formation aux équipements de manutention ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Chez LiftExpertise, nous nous
                                    distinguons par notre engagement à offrir des formations de haute qualité dans un
                                    environnement sécurisé et adapté aux besoins de nos clients. En étant
                                    stratégiquement situés au cœur des grandes zones industrielles et portuaires, nous
                                    facilitons l'accès à nos services pour les entreprises recherchant une formation
                                    pratique et directement liée aux réalités du terrain. Nos formateurs expérimentés,
                                    issus du secteur industriel, partagent leur savoir-faire pour garantir une maîtrise
                                    complète des équipements de manutention, notamment les chariots élévateurs. Nous
                                    sommes le partenaire privilégié des entreprises qui souhaitent non seulement
                                    améliorer les compétences techniques de leurs équipes, mais aussi renforcer leur
                                    sécurité et performance au travail.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Comment notre expertise
                                        technique et pédagogique peut-elle répondre aux besoins des professionnels
                                        ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse7" aria-labelledby="heading7"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Notre centre, fort de plusieurs
                                    années d'expérience dans le secteur, associe une expertise technique solide à une
                                    pédagogie avancée pour offrir des formations sur mesure aux professionnels. Nos
                                    formateurs, tous issus du milieu industriel, partagent leur savoir-faire et leur
                                    expérience pour assurer une maîtrise totale des équipements de manutention. Grâce à
                                    cette approche, les participants développent une compréhension approfondie des
                                    normes de sécurité, garantissant ainsi une performance optimale dans leur
                                    environnement de travail.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Pourquoi investissons-nous dans
                                        des programmes de formation personnalisés pour améliorer la productivité et
                                        assurer la sécurité sur le lieu de travail ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse8" aria-labelledby="heading8"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Nous investissons dans des
                                    programmes de formation personnalisés car nous sommes convaincus que la clé pour
                                    améliorer la productivité et assurer la sécurité sur le lieu de travail réside dans
                                    une formation adaptée aux besoins spécifiques de chaque entreprise. En alliant
                                    théorie et pratique, nos programmes préparent nos stagiaires à relever les défis
                                    réels qu'ils rencontreront sur le terrain. Cette approche garantit non seulement une
                                    compréhension approfondie des concepts, mais aussi une application concrète et
                                    efficace des compétences acquises, ce qui contribue directement à une meilleure
                                    performance et à un environnement de travail plus sûr.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button px-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true"
                                    aria-controls="collapse9"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Qu'est-ce qui distingue notre
                                        entreprise de formation des autres dans le secteur ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse9" aria-labelledby="heading9"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Notre entreprise se distingue par
                                    son approche personnalisée et son engagement envers l'excellence. Nous combinons une
                                    vaste expérience dans le secteur avec des méthodes pédagogiques innovantes pour
                                    offrir des formations qui répondent spécifiquement aux besoins uniques de chaque
                                    client. Nos formateurs expérimentés, issus du milieu industriel, apportent une
                                    expertise pratique et une compréhension approfondie des défis du terrain. En nous
                                    concentrant sur la qualité et la pertinence de nos programmes, nous nous efforçons
                                    de garantir que chaque stagiaire acquiert des compétences directement applicables,
                                    améliorant ainsi leur performance et leur sécurité au travail.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button px-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true"
                                    aria-controls="collapse10"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Quel est notre objectif
                                        principal en tant qu'entreprise de formation ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse10" aria-labelledby="heading10"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Notre objectif principal est
                                    d'élever les standards de compétence et de sécurité dans les environnements de
                                    travail en offrant des formations de haute qualité. Nous visons à fournir à nos
                                    stagiaires les connaissances et les compétences nécessaires pour exceller dans leur
                                    domaine, en combinant une solide formation théorique avec une pratique immersive. En
                                    mettant l'accent sur la personnalisation et l'application pratique, nous nous
                                    engageons à aider nos clients à atteindre leurs objectifs professionnels tout en
                                    créant un environnement de travail plus sûr et plus efficace.
                                </div>
                            </div>
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
    <div class="heading__p">Créé par <strong>Mr EKOUE-BLA Sandjison</strong> | Voir la vie du bon coté.</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js (requis pour Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
