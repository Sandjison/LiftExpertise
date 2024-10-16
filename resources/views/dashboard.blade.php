<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Tableau de bord Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
</head>

<body>

    @if (Auth::check() && Auth::user()->email == 'adminlift@gmail.com')
        <input type="checkbox" id="menu-toggle">
        <div class="sidebar">
            <div class="side-header">
                <h3>L<span>iftExpertise</span></h3>
            </div>
            <div class="side-content">
                <div class="profile">
                    <div class="profile-img bg-img">
                    </div>
                    <h4>David Green</h4>
                </div>
                <div class="side-menu">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="active">
                                <span class="las la-home"></span>
                                <small>Tableau de bord</small>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('messageDashboard') }}" class="active">
                                <span class="las la-envelope"></span>
                                <small>Messagerie</small>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('souscriptionDashboard') }}" class="active">
                                <span class="las la-shopping-cart"></span>
                                <small>Souscription</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="header-content">
                    <label for="menu-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    <div class="header-menu">
                        <div class="user">
                            <div class=""></div>
                            <span class="fas fa-sign-out-alt"></span>
                            <span>
                                <a href="{{ route('logout') }} " class="logout">
                                    <i class="ri-logout-box-line"></i>
                                    Déconnexion
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="page-header">
                    <h1>Tableau de bord</h1>
                </div>
                <div class="page-content">
                    <div class="analytics">
                        <div class="card">
                            <div class="card-head">
                                <h2>107,200</h2>
                                {{-- <h2> {{ $subscriptions }} </h2> --}}
                            </div>
                            <div class="card-progress">
                                <small>Nombre souscription ce
                                    mois-ci</small>
                                <div class="card-indicator">
                                    <div class="indicator one" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <h2>47,500</h2>
                            </div>
                            <div class="card-progress">
                                <small>Nouveaux e-mails reçus</small>
                                <div class="card-indicator">
                                    <div class="indicator four" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="records table-responsive">
                        <div>
                            <table width="100%" id="datatable" class="stripe">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>
                                            Nom complet</th>
                                        <th>
                                            Email</th>
                                        <th>
                                            Sexe</th>
                                        <th>
                                            Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td> {{ $user->id }} </td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->gender }}
                                            </td>
                                            <td>
                                                {{ $user->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script>
            // Sélectionne tous les liens du menu
            const menuItems = document.querySelectorAll('.side-menu a');

            // Récupère l'URL actuelle de la page
            const currentPage = window.location.pathname;

            // Parcours tous les liens du menu pour trouver l'élément actif
            menuItems.forEach(item => {
                // Si le lien correspond à l'URL actuelle, on ajoute la classe 'active'
                if (item.getAttribute('href') === currentPage) {
                    item.classList.add('active');
                } else {
                    // Sinon, on s'assure qu'il n'a pas la classe 'active'
                    item.classList.remove('active');
                }

                // Ajoute un écouteur d'événement pour changer l'élément actif lors du clic
                item.addEventListener('click', function() {
                    // Retire la classe 'active' de tous les liens
                    menuItems.forEach(link => link.classList.remove('active'));
                    // Ajoute la classe 'active' uniquement à l'élément cliqué
                    this.classList.add('active');
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable({
                    "paging": false,
                    "ordering": true,
                    "info": false,
                    "searching": true,
                    "language": {
                        "search": "" ,
                        "searchPlaceholder": "Recherche",
                        "lengthMenu": "_MENU_",
                        "zeroRecords": "Aucun enregistrement trouvé",
                        "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                        "infoEmpty": "Aucun enregistrement disponible",
                        "infoFiltered": "(filtré de _MAX_ entrées au total)",
                        "paginate": {
                            "previous": "Précédent",
                            "next": "Suivant"
                        }
                    }
                });
            });
        </script>

</body>

</html>
@else
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
    <title>Tableau de bord Utilisateur</title>
</head>

<body>
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
                            <li><a href="{{ route('logout') }}"><i class="ri-logout-box-line"></i>Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="chat-content">
                <div class="content-sidebar"><br /><br /><br />
                    <div class="content-sidebar-title">Bienvenue</div>
                    <br /><br /><br /><br />
                    <div class="background"></div>
                    <div class="wrapper">
                        <div class="cube">
                            <div class="bottom"></div>
                            <div class="side back"></div>
                            <div class="side left"></div>
                            <div class="side right"></div>
                            <div class="side front"></div>
                        </div><br /><br /><br /><br />
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
                        </div> <br /><br />
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
                        </div> <br /><br />
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
                        </div> <br /><br />
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
@endif
