<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>Souscription</title>

    <style>
        .bg_detail {
            background-color: #202DE6;
            color: #fff;
            padding: 12px 8px;
            font-size: 30px;

        }
    </style>

</head>

<body>
    <div class="container mb-5 ">
        <div class="d-flex justify-content-center align-items-center mt-4">
            <h1 class="text-center mb-4 custom-title">Souscription</h1>
        </div>

        <h4 class="text-center mb-5 custom_text">Inscription à la formation</h4>


        <div class="row">
            <div class="col-md-4 order-md-2 mt-4 ">
                <div class="list-group-item d-flex justify-content-between lh-condensed bg_detail">
                    <span>Détails de l'inscription</span>
                </div>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Formule :</h6>
                        </div>
                        <span class="text-muted"> {{ $plan['formula'] }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Frais</h6>
                        </div>
                        <span class="text-muted">: {{ $plan['price'] }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Séances de conduite</h6>
                        </div>
                        <span class="text-muted">: {{ $plan['sceance'] }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Inscription</h6>
                        </div>
                        <span class="text-muted">: {{ $plan['register'] }} F CFA</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>: {{ $plan['total'] }}</strong>
                    </li>
                </ul>
            </div>

            <div class="col-md-8 order-md-1">
                <form class="needs-validation" action="{{ route('subscription.process') }}" method="POST">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            </ul>
                        </div>
                    @endif

                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nom</label>
                            <input type="text" class="form-control" id="firstName"
                                placeholder="Saisissez votre nom ici..." name="first_name" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Prénoms</label>
                            <input type="text" class="form-control" id="lastName"
                                placeholder="Saisissez votre prénom ici..." name="last_name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email (Facultatif)</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Saisissez votre adresse e-mail ici...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Sexe</label>
                            <div class="form-check">
                                <input type="radio" id="male" name="gender" value="male"
                                    class="form-check-input">
                                <label for="male" class="form-check-label">Homme</label>
                            </div>
                            <div class="form-check ">
                                <input type="radio" id="female" name="gender" value="female"
                                    class="form-check-input">
                                <label for="female" class="form-check-label">Femme</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="payment">Numéro de paiement</label>
                            <input type="text" class="form-control" id="payment"
                                placeholder="Saisissez votre numéro de paiement ici..." name="payment_number" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact"
                                placeholder="Numéro de téléphone..." name="contact" required>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-6 mb-3">
                            <label for="payment-method">Mode de paiement</label><br>
                            <div class="form-check form-check">
                                <input type="radio" id="flooz" name="payment" value="flooz"
                                    class="form-check-input">
                                <label for="flooz" class="form-check-label">Flooz</label>
                            </div>
                            <div class="form-check form-check">
                                <input type="radio" id="tmoney" name="payment" value="tmoney"
                                    class="form-check-input">
                                <label for="tmoney" class="form-check-label">T-money</label>
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="plan" value="{{ $plan['formula'] }}">
                            <input type="hidden" name="total" value="{{ $plan['total'] }}">
                        </div>


                    </div>

                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary btn-submit btn-block">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
