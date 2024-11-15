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
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Remove-bg.ai_1723043103315.png') }}">

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
                            <li><a href="{{ route('dasboardProfile') }}" data-conversation="#conversation-1"><i
                                        class="ri-user-line"></i> Profil</a></li>
                            <li><a href="{{ route('logout') }}"><i class="ri-logout-box-line"></i>Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="chat-content">
                <div class="content-sidebar">

                    <div class="content-sidebar-title">Profil</div> <br /><br />

                    <form class="profile-info" action="{{ route('dasboardProfile') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="profile-pic-container">
                            <!-- Bouton avec l'image de profil -->
                            <button type="button" id="profile-pic-button"
                                onclick="document.getElementById('profile_picture').click();">
                                <img src="{{ Auth::user()->profile_picture ? asset('uploads/' . Auth::user()->profile_picture) : asset('assets/images/R (2).png') }}"
                                    alt="Photo de Profil" id="profile-pic-preview" class="profile-pic">
                            </button>
                            <!-- Input type file caché -->
                            <input type="file" name="profile_picture" id="profile_picture" style="display: none;"
                                accept="image/*" onchange="previewImage(event)">
                        </div>

                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name"
                            placeholder="Saisir votre nom complet ici..." value=" {{ Auth::user()->name }}" readonly>

                        <label for="phone">Numéro de téléphone</label>
                        <input type="tel" id="phone" name="phone"
                            placeholder="Saisir votre numéro de téléphone ici..." value="{{ Auth::user()->phone }}">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Saisir votre e-mail ici..."
                            value=" {{ Auth::user()->email }}" readonly>

                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" placeholder="Saisir votre adresse ici.."
                            value="{{ Auth::user()->address }}">

                        <div class="update_buttons_div">
                            <button type="button" id="modify_button" class="update_button">Modifier</button>

                            <button type="button" id="cancel_button" class="red_button" style="display: none;">
                                Annuler
                            </button>
                            <button type="submit" id="apply_button" class="submit_button" style="display: none;">
                                Appliquer
                            </button>
                        </div>

                    </form>
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
                                            <td>Formation chariot (Normale) sur une
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
                                            <td>Formation chariot (Accélérée)
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
                                            <td>Formation chariot (Accélérée)
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
                                            <td>Formation chariot (Normale)
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
                        </div><br /><br />
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
                                            <td>Formation chargeuse (Normale)
                                                sur une durée de 3 mois
                                                répartie sur 3 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                16 Janvier 2025 à 9
                                                heures ( lundi, mercredi
                                                , vendredi ).
                                            </td>
                                            <td>Au centre d'aného.
                                               
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><br /><br />
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
                                            <td>Formation grue ppm (Normale)
                                                sur une durée de 3 mois
                                                répartie sur 3 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                12 février 2025 à 9
                                                heures ( lundi, mercredi
                                                , vendredi ).
                                            </td>
                                            <td>Au centre d'aného.
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><br /><br />
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
                                            <td>Formation pelle hydraulique (Normale)
                                                sur une durée de 3 mois
                                                répartie sur 3 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                28 février 2025 à 9
                                                heures ( lundi, mercredi
                                                , vendredi ).
                                            </td>
                                            <td>Au centre de zone- franche ( qui se situe derrière NP Gandour ).
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><br /><br />
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
                                            <td>Formation camion benne (Normale)
                                                sur une durée de 3 mois
                                                répartie sur 3 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                28 février 2025 à 9
                                                heures ( lundi, mercredi
                                                , vendredi ).
                                            </td>
                                            <td>Au port autonome de Lomé.
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><br /><br />
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
                                            <td>Formation grue ppm (Normale)
                                                sur une durée de 2 mois
                                                répartie sur 3 séances
                                                par semaine.
                                            </td>
                                            <td>La formation se tiendra
                                                28 février 2025 à 9
                                                heures ( lundi, mercredi
                                                , vendredi ).
                                            </td>
                                            <td>Au port autonome de Lomé.
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><br /><br />
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

        document.addEventListener("DOMContentLoaded", function() {
            let ifChange = false;
            const modifyButton = document.getElementById('modify_button');
            const applyButton = document.getElementById('apply_button');
            const cancelButton = document.getElementById('cancel_button');

            function resetForm() {
                applyButton.style.display = 'none';
                modifyButton.style.display = 'inline-block';
                modifyButton.innerText = 'Modifier';
                cancelButton.style.display = 'none';
                ifChange = false;
            }

            modifyButton.addEventListener('click', function() {
                if (!ifChange) {
                    ifChange = true;
                    modifyButton.style.display = 'none';
                    applyButton.style.display = 'inline-block';
                    cancelButton.style.display = 'inline-block';
                } else {
                    resetForm();
                }
            });
            cancelButton.addEventListener('click', function() {
                resetForm();
            });
        });

        /////////////
        document.querySelectorAll('[data-conversation]').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                document.querySelectorAll('.conversation').forEach(function(i) {
                    i.classList.remove('active')
                })
                document.querySelector(this.dataset.conversation).classList.add('active')
            })
        })

        document.querySelectorAll('.conversation-back').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                this.closest('.conversation').classList.remove('active')
                document.querySelector('.conversation-default').classList.add('active')
            })
        })
        ///////////
    </script>

</body>

</html>
