<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Nouveau mot de passe</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('newPassword.process') }}" method="POST" class="p-4 rounded">
                    @csrf

                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <h1 class="text-center mb-4 custom-title">Nouveau mot de passe</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                            </ul>
                        </div>
                    @endif

                    @if ($message = session('error'))
                        <div class="alert alert-danger">{{ $message }}</div><br />
                    @endif

                    @if ($message = session('success'))
                        <div class="alert alert-success">{{ $message }}</div><br />
                    @endif

                    <div class="form-group">
                        <label for="password">Nouveau mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Saisir le mot de passe ici...">
                    </div>

                    <input type="hidden" name="email" id="email" value="{{ session()->get('email') }}" />
                    <input type="hidden" name="code" id="code" value="{{ session()->get('code') }}" />

                    <div class="form-group">
                        <label for="passwordConfirm">Confirmer nouveau mot de passe</label>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control"
                            placeholder="Confirmer le nouveau mot de passe ici...">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
