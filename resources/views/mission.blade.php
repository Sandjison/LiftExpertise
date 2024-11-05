<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mission</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
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

        <h3>Notre mission</h3>

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
                <div class="col-md-6"><img class="w-100"
                        src="{{ asset('assets/images/illustration-of-a-businessman-pursuing-a-target-vector.jpg') }}"
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
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Quel est l'objectif fondamental
                                        de notre mission en tant qu'entreprise de formation ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Notre objectif fondamental est de
                                    transformer les compétences des professionnels en offrant des formations de premier
                                    ordre qui sont à la fois adaptées aux exigences spécifiques du secteur et axées sur
                                    des résultats concrets. Nous visons à renforcer les capacités des individus et des
                                    équipes pour qu'ils puissent exceller dans leurs rôles et contribuer positivement à
                                    leur entreprise.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Comment notre mission
                                        contribue-t-elle à l'évolution des compétences des professionnels
                                        ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse7" aria-labelledby="heading7"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4"> Notre mission favorise l'évolution
                                    des compétences des professionnels en fournissant des programmes de formation
                                    innovants et continuellement mis à jour. Nous nous engageons à intégrer les
                                    dernières avancées technologiques et les meilleures pratiques du secteur dans nos
                                    formations pour garantir que nos stagiaires développent des compétences pertinentes
                                    et à jour.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">De quelle manière notre mission
                                        impacte-t-elle la performance organisationnelle de nos clients ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse8" aria-labelledby="heading8"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4"> En alignant nos formations avec
                                    les objectifs stratégiques des entreprises, notre mission impacte directement leur
                                    performance organisationnelle. En formant les employés sur des compétences
                                    spécifiques et critiques, nous aidons nos clients à améliorer l'efficacité
                                    opérationnelle, à réduire les coûts et à atteindre une meilleure performance
                                    globale.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button px-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true"
                                    aria-controls="collapse9"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Quel rôle joue notre mission
                                        dans le soutien à la croissance professionnelle des individus ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse9" aria-labelledby="heading9"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4"> Notre mission joue un rôle clé
                                    dans le soutien à la croissance professionnelle des individus en leur offrant des
                                    opportunités d'apprentissage adaptées à leurs aspirations et besoins de
                                    développement. Nous nous concentrons sur la création de parcours de formation qui
                                    favorisent l'acquisition de compétences pratiques et l'évolution vers des rôles de
                                    leadership ou de spécialisation.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button px-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true"
                                    aria-controls="collapse10"><span
                                        class="mb-0 text-start fs-0 text-900 fw-medium">Comment notre mission
                                        répond-elle aux défis actuels du secteur de la formation ?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse10" aria-labelledby="heading10"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4"> Nous répondons aux défis actuels
                                    du secteur de la formation en adoptant une approche proactive et adaptable. Notre
                                    mission inclut l'intégration de nouvelles méthodes pédagogiques et technologies
                                    éducatives pour faire face aux évolutions rapides du marché, garantissant ainsi que
                                    nos formations restent pertinentes et efficaces pour les professionnels et les
                                    entreprises.
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>

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
