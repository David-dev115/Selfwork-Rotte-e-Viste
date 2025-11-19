<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primo progetto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    {{-- css Custom --}}
    <link rel="stylesheet" href="style.css">


    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">




</head>


<body>



    {{-- titolo --}}

    <div class="container-fluid bianco box_1">

        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                <h1 class="titolo">Crafted Studio</h1>
                <p class="slogan">Crea valore con le tue mani</p>
            </div>
        </div>

    </div>


    {{-- navbar --}}

    <nav class="navbar navbar-expand-lg beige">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item nav-item-center">
                        <a class="nav-link" href="articoli">ARTICOLI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chi-siamo">ABOUT US</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    {{-- fine navbar --}}


    {{-- rigo grigio separatore --}}
    <div class="container-fluid">

        <div class="row box_2">
            <div class="col-12"></div>
        </div>

    </div>


    {{-- rigo separatore tra header e section --}}
    <div class="container-fluid beige">

        <div class="row box_5 box_5_b">
            <div class="col-12 d-flex justify-content-center">
                <h3 class="title_3">CHI SIAMO</h3>
            </div>
        </div>

    </div>


    <section>

        <div class="container-fluid d-flex justify-content-center box_6">
            <div class="row vh-100 box_3 box_3_d mt-3">
                <div class="col-12 d-flex justify-content-center align-items-center box_4_b">
                    <div class="box_4">
                        <h3>Il nostro team</h3>
                        <p class="par_1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore veniam sequi ratione optio ipsam qui fuga, commodi nobis obcaecati officia delectus odio, officiis porro deserunt dolorum nemo eligendi. Nesciunt, ducimus.</p>
                        

                    </div>



                </div>
            </div>
        </div>



    </section>



    {{-- rigo separatore --}}
    <div class="container-fluid beige">

        <div class="row box_5 box_5_c">
            <div class="col-12 d-flex justify-content-center">

            </div>
        </div>

    </div>



    <!-- footer -->

    <footer class="container-fluid footer_x">

        <div class="row">

            <div class="col-12 col-md-9">

                <p class="">Indirizzo Via Ugo Foscolo, 100</p>
                <p>tel. +39 012 01234567</p>
                <p>P.IVA. 100200300</p>


            </div>

            <div class="col-12 col-md-3 ">

                <p class="text-center mt-4 ">seguici su:</p>

                <div class="d-flex align-items-center justify-content-evenly">

                    <a href="https://google.com"> <i class="fa-brands fa-facebook fa-2x"></i> </a>
                    <a href="https://google.com"> <i class="fa-brands fa-twitter fa-2x"></i> </a>
                    <a href="https://google.com"> <i class="fa-brands fa-youtube fa-2x"></i> </a>


                </div>


            </div>

        </div>




    </footer>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>


    <!-- JS fontawesome-->
    <script src="https://kit.fontawesome.com/9339ce24f2.js" crossorigin="anonymous"></script>
</body>

</html>
