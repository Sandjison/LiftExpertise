<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Mot de passe oublié</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('forgottenPassword.process') }}" method="POST" class="p-4 rounded">
                    @csrf

                    {{-- <div class="text-right mb-4">
                        <a href="{{ route('login') }}" class="btn btn-link">Retour</a>
                    </div> --}}

                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <h1 class="text-center mb-4 custom-title">Mot de passe oublié</h1>
                    </div>

                    <h4 class="text-center mb-3 custom_text">Récupérez votre compte!</h4> <br/>
                    <p class="text-center">Entrez votre adresse e-mail et nous vous enverrons un e-mail avec des instructions pour réinitialiser votre mot de passe.</p> <br/>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                            </ul>
                        </div>
                    @endif

                    @if ($message = session('error'))
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif

                    @if ($message = session('success'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Saisir l'e-mail ici...">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Soumettre</button>

                    <div class="form-group text-center mt-4">
                        <p>Vous l'avez retrouvé? 
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
