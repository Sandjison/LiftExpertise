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


    <title>Fiche d'information</title>
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

        <h3>Fiche d'information</h3>

    </section>
    <section class="tableau">
        <div class="heading__p ">

            <h3>Formation normale de 1 mois (CHARIOT ÉLEVATEUR) </h3> <br />

        </div>

        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                chariot</td>
                            <td>Sur une période de 1 mois</td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>3 Séances de conduite par semaine (une journée)</td>
                            <td>100.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 1.pdf') }}">La fiche de formation en pdf </a>
        </div> <br /> <br />

        <div class="heading__p ">

            <h3>Formation accéléree de 2 semaines (CHARIOT ÉLEVATEUR) </h3> <br />

        </div>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                chariot</td>
                            <td>Sur une période de 2 semaines</td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>5 Séances de conduite par semaine (une journée)</td>
                            <td>120.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 2.pdf') }}">La fiche de formation en pdf
            </a>
        </div> <br /> <br />

        <div class="heading__p ">

            <h3>Formation premium de 1 mois (CHARIOT ÉLEVATEUR) </h3> <br />

        </div>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                chariot</td>
                            <td>Sur une période de 1 mois</td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>3 Séances de conduite par semaine (une journée) selon la disponibilité du client</td>
                            <td>150.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 3.pdf') }}">La fiche de formation en pdf </a>

        </div> <br /> <br />

        <div class="heading__p ">

            <h3>Formation normale de 3 ou 4 mois (CHARGEUSE) </h3> <br />

        </div>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                chargeuse</td>
                            <td>Sur une période de 3 ou 4 mois</td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>3 Séances de conduite par semaine (une journée).</td>
                            <td>350.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 4.pdf') }}">La fiche de formation en pdf </a>

        </div> <br /> <br />

        <div class="heading__p ">

            <h3>Formation normale de 2 ou 3 mois (GRUE PPM) </h3> <br />

        </div>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                grue ppm</td>
                            <td>Sur une période de 2 OU 3 mois</td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>3 Séances de conduite par semaine (une journée).</td>
                            <td>450.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 5.pdf') }}">La fiche de formation en pdf </a>

        </div> <br /> <br />

        <div class="heading__p ">

            <h3>Formation normale de 2 ou 3 mois (PELLE HYDRAULIQUE) </h3> <br />

        </div>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                pelle hydraulique</td>
                            <td>Sur une période de 2 ou 3 mois </td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>3 Séances de conduite par semaine (une journée).</td>
                            <td>350.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 6.pdf') }}">La fiche de formation en pdf </a>

        </div> <br /> <br />

        <div class="heading__p ">

            <h3>Formation normale de 1 ou 2 mois (CAMION BENNE) </h3> <br />

        </div>
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>FORMATION</th>
                            <th>DURÉE</th>
                            <th>COURS THÉORIQUES</th>
                            <th>COURS DE CONDUITE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formation complète pour l’obtention <br /> de l’attestation de conduite de <br />
                                camion benne</td>
                            <td>Sur une période de 1 ou 2 mois</td>
                            <td>
                                Psychologie du Conducteur <br /> <br />
                                Secourisme <br /> <br />
                                Connaissance du Matériel Automobile
                            </td>
                            <td>3 Séances de conduite par semaine (une journée).</td>
                            <td>300.000 F Cfa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <img src="{{ asset('assets/images/icons8-pdf-40.png') }}" alt="pdf" style="width: 1.8%">
            <a href="{{ URL::asset('assets/pdf/A4 - 7.pdf') }}">La fiche de formation en pdf </a>

        </div>
    </section> <br /> <br />

    <div class="bg_footer">
        <div class="heading__p">
            <h4>Contactez LiftExpertise plus au plus vite !</h4> <br />
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
