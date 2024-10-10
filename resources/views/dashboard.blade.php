<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwindcss-colors.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>DashboardUtilisateur</title>
</head>

<body>

    {{-- <div class="container d-flex justify-content-center mt-5">
        <div class="col-md-6 border shadow">

            <ul class="nav nav-pills nav-justified">
                <li class="nav-item"><a href="#profile-tab" class="nav-link active" data-toggle="pill">Profil</a></li>
                <li class="nav-item"><a href="#setting-tab" class="nav-link" data-toggle="pill">Paramètre</a></li>
                <li class="nav-item"> <a href="{{ route('logout') }}" class="nav-link">Déconnexion</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade p-5" id="setting-tab">

                    <h4 class="text-center mb-4">Paramètres du compte</h4>
                    <h6>Nom complet : </h6>
                    <p>{{ Auth::user()->name }} <a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Email : </h6>
                    <p>{{ Auth::user()->email }}<a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Téléphone : </h6>
                    <p>785454093 <a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Genre : </h6>
                    <p>{{ Auth::user()->gender }} <a href="#" class="float-right">Edit/Change</a></p>

                </div>
            </div>
        </div>
    </div> --}}

    <section class="chat-section">
        <div class="chat-container">
            <aside class="chat-sidebar">
                <a href="#" class="chat-sidebar-logo">
                    <i class="fas fa-dolly"></i>
                </a>
                <ul class="chat-sidebar-menu">

                    <li class="chat-sidebar-profile">
                        <button type="button" class="chat-sidebar-profile-toggle">
                            <img src="{{ asset('assets/images/R (2).png') }}" alt>
                        </button>
                        <ul class="chat-sidebar-profile-dropdown">
                            <li><a href="#"><i class="ri-user-line"></i>
                                    Profil</a></li>
                            <li><a href="{{ route('logout') }}"><i class="ri-logout-box-line"></i>Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <div class="chat-content">
                <div class="content-sidebar"><br/><br/><br/>
                    <div class="content-sidebar-title">Bienvenue</div>
                    <br/><br/><br/><br/>
                    <div class="background"></div>
                    <div class="wrapper">
                        <div class="cube">
                            <div class="bottom"></div>
                            <div class="side back"></div>
                            <div class="side left"></div>
                            <div class="side right"></div>
                            <div class="side front"></div>
                        </div><br/><br/><br/><br/>
                        <p class="text"> {{ Auth::user()->name }}</p>
                    </div>

                    {{-- <div class="content-sidebar-title">Profil</div> --}}

                    {{-- <button type="button">
                        <div class="profile-pic-container ">
                            <img src="{{ asset('assets/images/R (2).png') }}" alt="Photo de Profil" class="profile-pic">
                        </div>
                    </button>

                    <form class="profile-info">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name"
                            placeholder="Saisir votre nom complet ici...">

                        <label for="phone">Numéro de téléphone</label>
                        <input type="tel" id="phone" name="phone"
                            placeholder="Saisir votre numéro de téléphone ici...">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Saisir votre e-mail ici...">

                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" placeholder="Saisir votre adresse ici..">
                    </form> --}}
                </div>
                <div class="conversation active ">
                    <div class="conversation-main">
                        <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#202DE6" fill-opacity="1"
                                d="M0,224L60,202.7C120,181,240,139,360,122.7C480,107,600,117,720,138.7C840,160,960,192,1080,213.3C1200,235,1320,245,1380,250.7L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                            </path>
                            <text class="info-text" x="1160" y="140" text-anchor fill="#ffffff">INFOS</text>
                        </svg>
                        <br /><br />
                        <div class="container mt-5">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>FORMATION</th>
                                            <th>DATE et HEURE</th>
                                            <th>LIEU</th>
                                        </tr>
                                    </thead>
                                    <tbody class="custom-tbody">
                                        <tr>
                                            <td>Formation (Normale) sur une
                                                durée de 2 mois
                                                répartie sur 3 séances par
                                                semaine.
                                            </td>
                                            <td>La formation se tiendra 12
                                                Novembre 2024 à 9
                                                heures (lundi, mercredi,
                                                vendredi).
                                            </td>
                                            <td>Au port autonome de
                                                Lomé.
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>   <br /><br />
                        <div class="container mt-5">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>FORMATION</th>
                                            <th>DATE et HEURE</th>
                                            <th>LIEU</th>
                                        </tr>
                                    </thead>
                                    <tbody class="custom-tbody">
                                        <tr>
                                            <td>Formation (Accélérée)
                                                sur une durée de 3
                                                semaines répartie sur
                                                5 séances par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                8 Décembre 2024 à 9
                                                heures ( de lundi à
                                                vendredi ).
                                            </td>
                                            <td>Au centre de zone-
                                                franche ( qui se situe
                                                derrière NP Gandour ).
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>   <br /><br />
                        <div class="container mt-5">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>FORMATION</th>
                                            <th>DATE et HEURE</th>
                                            <th>LIEU</th>
                                        </tr>
                                    </thead>
                                    <tbody class="custom-tbody">
                                        <tr>
                                            <td>Formation (Accélérée)
                                                sur une durée de 2 mois
                                                répartie sur 5 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                8 Décembre 2024 à 9
                                                heures ( de lundi à
                                                vendredi ).
                                            </td>
                                            <td>Au centre de de kara
                                                ( qui se situe derrière
                                                Université de kara )
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>   <br /><br />
                        <div class="container mt-5">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>FORMATION</th>
                                            <th>DATE et HEURE</th>
                                            <th>LIEU</th>
                                        </tr>
                                    </thead>
                                    <tbody class="custom-tbody">
                                        <tr>
                                            <td>Formation (Normale)
                                                sur une durée de 1 mois
                                                répartie sur 3 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                16 Janvier 2025 à 9
                                                heures ( lundi, mercredi
                                                , vendredi ).
                                            </td>
                                            <td>Au centre de de kara
                                                ( qui se situe derrière
                                                Université de kara ).
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </section>

    <script>
        // start: Sidebar
        document.querySelector('.chat-sidebar-profile-toggle').addEventListener('click', function(e) {
            e.preventDefault()
            this.parentElement.classList.toggle('active')
        })

        document.addEventListener('click', function(e) {
            if (!e.target.matches('.chat-sidebar-profile, .chat-sidebar-profile *')) {
                document.querySelector('.chat-sidebar-profile').classList.remove('active')
            }
        })
        // end: Sidebar
    </script>

</body>

</html>
