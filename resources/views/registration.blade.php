<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('registration.process') }}" method="POST" class=" p-4 rounded">
                    @csrf

                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <h1 class="text-center mb-4 custom-title">Inscription</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif

                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Saisir votre nom complet ici ...">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Saisir l'e-mail ici ...">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Saisir le mot de passe ici ...">
                    </div>

                    <div class="form-group">
                        <label for="passwordConfirm">Confirmer le mot de passe</label>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Resaisir le mot de passe ici ...">
                    </div>

                    <div class="form-group">
                        <label for="gender">Sexe</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="male" name="gender" value="male" class="form-check-input">
                            <label for="male" class="form-check-label">Homme</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                            <label for="female" class="form-check-label">Femme</label>
                        </div>
                    </div>

                    <div class="form-group">
                        {{-- <label for="phone">Numéro de téléphone</label> --}}
                        <input type="hidden" name="phone" id="phone" class="form-control" placeholder="Saisir votre numéro de téléphone ici ...">
                    </div>
                
                    <div class="form-group">
                        {{-- <label for="address">Adresse</label> --}}
                        <input type="hidden" name="address" id="address" class="form-control" placeholder="Saisir votre adresse ici ...">
                    </div>
                
                    <div class="form-group">
                        {{-- <label for="profile_picture">Photo de Profil</label> --}}
                        <input type="hidden" name="profile_picture" id="profile_picture" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">S’inscrire</button> <br/>

                    <div class="form-group text-center">
                        <p>Déjà inscrit ? 
                            <a href="{{ route('login') }}">Se connecter</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
