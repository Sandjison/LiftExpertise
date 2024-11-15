<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Remove-bg.ai_1723043103315.png') }}">


    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('login.process') }}" method="POST" class="p-4 rounded">
                    @csrf

                    {{-- <div class="text-right mb-4">
                        <a href="{{ route('login') }}" class="btn btn-link">Retour</a>
                    </div> --}}


                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <h1 class="text-center mb-4 custom-title">Connexion</h1>
                    </div>



                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">{{ $message }}</div><br />
                    @endif

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Saisir l'e-mail ici ...">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Saisir le mot de passe ici ...">
                    </div>

                    <div class="form-group text-center">
                        <a href="{{ route('forgottenPassword') }}" class="text-primary">Mot de passe oublié?</a>
                        |
                        <a href="{{ route('registration') }}" class="text-primary">S'inscrire</a>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
