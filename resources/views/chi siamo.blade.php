<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chi siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stack+Sans+Notch:wght@200..700&display=swap" rel="stylesheet">


    {{-- CSS custom --}}
    <link rel="stylesheet" href="/style.css">

</head>

{{-- 13 self --}}
{{-- 34:43 front --}}

<body>





    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/media/logo black_1.png" alt="logo sito" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/articoli">articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chi-siamo">chi siamo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>

        <div class="container-fluid css-header">
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center align-items-start py-5">
                    <h1 class="textFirst py-5">Chi siamo</h1>
                </div>
                <div class="row  ">
                    <div class="col-12 d-flex justify-content-around">

                        {{-- card --}}

                        @foreach ($users as $user)
                            <div class="card card_custom" style="width: 18rem;">
                                <img src={{ $user['immagine'] }} class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-text text-center"> {{ $user['name'] }} </h3>
                                </div>
                            </div>
                        @endforeach

                        {{-- card --}}





                    </div>
                </div>
            </div>

    </header>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
