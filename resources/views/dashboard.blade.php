<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>DashboardUtilisateur</title>
</head>

<body>

    <div class="container d-flex justify-content-center mt-5">
        <div class="col-md-6 border shadow">

            <ul class="nav nav-pills nav-justified">
                <li class="nav-item"><a href="#profile-tab" class="nav-link active" data-toggle="pill">Profil</a></li>
                <li class="nav-item"><a href="#setting-tab" class="nav-link" data-toggle="pill">Paramètre</a></li>
                <li class="nav-item"> <a href="{{ route('logout') }}" class="nav-link">Déconnexion</a></li>
               

            </ul>

            <!-- All Tabs Main div -->

            <div class="tab-content">

                <!-- Profile tab start -->

                <div class="tab-pane show fade active justify-content-center px-5" id="profile-tab">
                    <img src="https://cdn-icons-png.flaticon.com/512/0/93.png" width="150px" height="150px"
                        class="rounded-circle border border-primary mx-auto d-flex my-2">
                    <h3 class="text-center">{{ Auth::user()->name }}</h3>
                    <div class="mx-auto my-3 d-flex justify-content-center">

                        <button class="btn btn-success btn-sm">Voir Profil <i class="fas fa-user"></i></button>
                        <button class="btn btn-info mx-3 btn-sm">Modifier Profil <i class="fas fa-user-edit"></i></button>
                       
                    </div>
                    <hr>

                    <h4 class="text-center mb-4"> Informations personnelles</h4>
                    <div class="form-group">
                        <h6><i class="fas fa-briefcase"></i> Profession</h6>
                        <p>Etudiant</p>
                    </div>

                    <div class="form-group">
                        <h6><i class="fas fa-university"></i>Education</h6>
                        <p>Bachelor from Oxford , England</p>
                    </div>

                    <div class="form-group">
                        <h6><i class="fas fa-hospital-alt"></i> Lieu de résidence</h6>
                        <p>Adakpamé , Lomé</p>
                    </div>
                </div>

                <!-- Setting tab start -->

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
    </div>
</body>

</html>
