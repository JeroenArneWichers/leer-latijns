@extends('layout')

@section('title', 'Home pagina')

@section('content')

<head>
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet" type="text/css" >
</head>
    
<div class="jumbotron jumbotron-fluid custom-jumbotron img-fluid">
    <div class="container">
        <h1 class="display-2">Leer Latijns</h1>
    </div>
</div> 
<div class="jumbotron custom-jumbotron-border">
</div>
    <div class="container spacer200top">
        <div class="row">
        <div class="col-lg-6 content order-lg-1 order-1">
            <h2 class="title">SALVE CIVIS!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam magni in dolore velit corrupti perferendis fuga fugiat, voluptatum alias. Cupiditate consequuntur ex, repellendus ratione ea delectus quas nostrum, qui aliquam iusto nulla esse ipsam consectetur aliquid voluptas at doloremque omnis minus amet repudiandae ut! Labore fugit beatae repudiandae sunt explicabo.</p>
        </div>
        <div class="col-lg-6 content order-lg-2 order-2">
            <h2 class="title">SALVE CIVIS!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab a iste nobis modi excepturi sunt minima eum, deleniti, earum accusamus cupiditate tempore, harum laborum veritatis sit! Cumque in eos fugiat neque facere nihil officiis commodi voluptatem totam beatae cupiditate sapiente non quo aliquam, soluta reprehenderit labore debitis libero. Incidunt, sint?</p>
            </div>
        </div>
        </div>
    </div>  

    <div class="container justify-content-center spacer200top">
        <h1 class="mt-5 mb-5 ml-5 mr-5 text-center">Hoe werkt Leer Latijns?</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-graduation-cap green-icon-color"></i> Bestudeer de stof</h5>
                        <p class="card-text">Deze site staat bol van het leermateriaal. Makkelijk te vinden en logisch geordernd.<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-chalkboard-teacher green-icon-color"></i> Kies een quiz</h5>
                        <p class="card-text">Er zijn meer dan genoeg leuke manieren om je kennis te testen. <br><br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-comments green-icon-color"></i> Praat met anderen</h5>
                        <p class="card-text">Er is een forum gemaakt voor iedereen die verder wil praten over het latijns.<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-12 background justify-content-center">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner homepage-custom-image-size">
                    <div class="carousel-item active">
                        <img class="d-block w-100 h-100" src="/img/homepage/Rome1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100" src="/img/homepage/Rome1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100" src="/img/homepage/Rome1.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100" src="/img/homepage/Rome1.jpg" alt="Fourth slide">
                    </div>
                    </div>
                </div>
                <div class="d-flex h-50 text-center align-items-center">
                    <div class="w-100 text-white">
                    <a href="#homepage" class="btn-homepage">Would you like to know more?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection