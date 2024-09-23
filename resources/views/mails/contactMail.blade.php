<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <h3>Bonjour, c'est {{ $firstname }} {{ $lastname }}</h3>
    <h3>Adresse email {{ $email }}</h3>

    <h1>{{ $object }}</h1>

    <h4>{{ $content }}</h4>
</body>

</html>
