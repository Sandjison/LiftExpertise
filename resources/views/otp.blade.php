<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Remove-bg.ai_1723043103315.png') }}">

    <title>Code de confirmation</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('otpCode.process') }}" method="POST" class="p-4 rounded">
                    @csrf

                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <h1 class="text-center mb-4 custom-title">Code de confirmation</h1>
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

                    <?php
                    $email = session('email');
                    ?>
                    <div class="mb-4">
                        <p>Un code de confirmation a été envoyé à votre adresse e-mail ({{ $email }}). Saisissez-le dans le champ ci-dessous pour continuer.</p>
                    </div>

                    <input type="hidden" name="email" id="email" value="{{ session()->get('email') }}" />

                    <div class="form-group">
                        <label for="code">Code de confirmation</label>
                        <input type="text" name="code" id="code" class="form-control" autocomplete="off"
                            placeholder="Saisir le code ici...">
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
