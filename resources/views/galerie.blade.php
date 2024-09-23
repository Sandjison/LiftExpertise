<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

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

        <div class="menu">

            <li><a href="{{ route('welcome') }}">Accueil</a></li>
            <li><a href="{{ route('galerie') }}">Galerie</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    Présentation
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('us') }}">Qui sommes-nous ?</a>
                    <a class="dropdown-item" href="{{ route('mission') }}">Notre mission</a>
                </div>
            </li>
            <li><a href="{{ route('formation') }}">Formation</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>

        </div>

        <button class="login_btn"> <a href="{{ route('login') }}" class="text-white">Se connecter</a> </button>

    </header>

    <section class="bluz">

        <h3>Galerie</h3>

    </section>

    <div class="grid-wrap">
        <ul>
            <li><img src="{{ asset('assets/images/IMG-20240821-WA0097.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240819-WA0221.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0083.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0085.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0105.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0130.jpg') }}"> </li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0142.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0144.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0154.jpg') }}"></li>
            <li><img src="{{ asset('assets/images/IMG-20240820-WA0162.jpg') }}"> </li>
            <li><img src="{{ asset('assets/images/IMG-20240821-WA0081.jpg') }}"></li>

        </ul>
    </div>

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
