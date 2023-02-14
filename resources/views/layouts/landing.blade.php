<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="website icon" type="png" href="{{ asset('logo.svg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            font-family: 'Quicksand', sans-serif;
        }

        #g-mapdisplay img {
            max-width: none !important;
            background: none !important;
            font-size: inherit;
            font-weight: inherit;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light p-3 p-lg-3 navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('logo.svg') }}" alt="" style="max-width: 50px" class="me-3">
                <span class="text-white fw-bold d-none d-lg-inline">
                    {{ config('app.name', 'Laravel') }}
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <hr class="text-white d-lg-none">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <form class="d-none d-lg-flex" role="search">
                <div class="col-auto me-3 my-lg-0">
                    <a href="" class="text-decoration-none text-white"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
                <div class="col-auto me-3 my-lg-0">
                    <a href="" class="text-decoration-none text-white"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <div class="col-auto my-lg-0">
                    <a href="" class="text-decoration-none text-white"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </form>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
