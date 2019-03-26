<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       
        <!-- own CSS -->
        @section('stylesheets')
        <link href="{{ asset('css/layoutstyle.css') }}" rel="stylesheet" type="text/css" >

        @show

        <title>@yield('title', 'Leer Latijns')</title>
    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/whylatin">Waarom latijns?</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lessen latijns
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/lessenlatijns">Intro lessen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/les1">Les 1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Les 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Les 3</a>
                </div>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Latijnse quiz
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/quizzenlatijns">Intro quizzen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/quiz1">Quiz les 1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Quiz les 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Quiz Les 3</a>
                </div>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Forum
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/forum">Intro forum</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Forum les 1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Forum les 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Forum Les 3</a>
                </div>
            </ul>
            </div>
    </header>

    @yield('content')

    <footer class="custom-footer spacer200top">
        <div class="container">
            <div class="row mt-5 pt-4 pb-3">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4">
                    <p>Een leuke, leerzame en vooral latijnse georienteerde manier om bezig te zijn met de latijnse taal.</p>
                    <p class="custom-footer-text"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Jeroen Arne Wichers</span><span>. </span><span>All Rights Reserved.</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pr-xl-4">
                        <p id="socialgroup"> <a id="social" href="https://www.facebook.com/" class="fab fa-facebook fa-lg"></a>
                            <a id="social" href="https://www.instagram.com/" class="fab fa-instagram fa-lg"></a>
                            <a id="social" href="https://twitter.com/" class="fab fa-twitter fa-lg"></a>
                            <a id="social" href="https://www.linkedin.com/" class="fab fa-linkedin fa-lg"></a>
                        </p>
                        <p>    
                            <a id="social" class="custom-footer-text" href="mailto:#">info@leerlatijns.nl</a>
                        </p>
                    </div>      
                </div> 
            </div>
        </div>
    </footer>
   
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
