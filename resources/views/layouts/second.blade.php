<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="https://support.nafii.my.id/icon/napikk.jpg" rel="icon">
    <link href="https://support.nafii.my.id/icon/napikk.jpg" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('auth/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('auth/css/pace.min.css') }}" rel="stylesheet" />
    <title>Translife Corporate | <?php echo $title; ?></title>
</head>

<body>

    @yield('conten')

    <!--plugins-->
    <script src="{{ asset('auth/js/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/js/pace.min.js') }}"></script>

</body>

</html>
