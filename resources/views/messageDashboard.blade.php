<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>Messagerie</title>
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet"
            href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
        <input type="checkbox" id="menu-toggle">
        <div class="sidebar">
            <div class="side-header">
                <h3>L<span>iftExpertise</span></h3>
            </div>

            <div class="side-content">
                <div class="profile">
                    <div class="profile-img bg-img"></div>
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
                        <li >
                            <a href="{{ route('messageDashboard') }}"class="active">
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
                            <span><a href="{{ route('logout') }}" class="logout" ><i
                                class="ri-logout-box-line"></i>Déconnexion</a></span>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <div class="page-header">
                    <h1>Messages</h1>
                </div>

                <div class="page-content">
                    <div class="records table-responsive">
                        <div class="record-header">
                            <div class="browse">
                                <input type="search" placeholder="Recherche"
                                    class="record-search">
                            </div>
                        </div>
                        <div>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span class="las la-sort"></span>
                                            CLIENT</th>
                                        <th><span class="las la-sort"></span>
                                            Objet</th>
                                        <th><span class="las la-sort"></span>
                                            Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#5033</td>
                                        <td>
                                            <div class="client">
                                                <div class="client-img bg-img"></div>
                                                <div class="client-info">
                                                    <h4>Andrew Bruno</h4>
                                                    <small>bruno@crossover.org</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                           Aprentissage du métier
                                        </td>
                                        <td>
                                           Pour prendre une place dans une société 
                                           dans la zone portuaire
                                        </td>
                                    </tr>
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
                item.addEventListener('click', function () {
                    // Retire la classe 'active' de tous les liens
                    menuItems.forEach(link => link.classList.remove('active'));
                    // Ajoute la classe 'active' uniquement à l'élément cliqué
                    this.classList.add('active');
                });
            });
            </script>
    </body>
</html>
