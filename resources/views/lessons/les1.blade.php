@extends('layout')

@section('title', 'Les 1')

@section('content')

<head>
    <link href="{{ asset('css/les1.css') }}" rel="stylesheet" type="text/css" >
</head>

<div class="container">
    <div class="row spacer200top">
        <div class="col-lg-12 content order-lg-1 order-1">
            <h2 class="title">A-declinatie, nominativus, accusativus. Esse, Posse</h2>
            <p>Deze les introduceert naamvallen en het werkwoord zijn. 
            </p>
        </div>
    </div>
    <div class="row spacer200top">
        <div class="col-lg-12 content order-lg-1 order-1">
            <h2 class="title">Lidwoorden</h2>
            <p>Het Latijn kent geen lidwoorden. Femina kan daarom een vrouw, de vrouw of gewoon vrouw betekenen. 
                De context zal duidelijk moeten maken welke vertaling de juiste is. Daarom wordt femina in zin 5 met 
                een vrouw vertaald. Ze komt in die zin pas voor het eerst ter sprake. In zin 6 echter weten we al over
                welke vrouw we het hebben en daarom vertalen we femina daar met de vrouw. 
            </p>
        </div>
    </div>
    <div class="row spacer200top">
        <div class="col-lg-12 content order-lg-1 order-1">
            <h2 class="title">Declinaties</h2>
            <p>Het Latijn verdeelt de zelfstandige naamwoorden in verschillende groepen, declinaties genaamd, afhankelijk van de laatste letter van de stam:<br><br>
                - A-declinatie voor woorden waarvan de stam eindigt op A (bijvoorbeeld agricola, nauta, taberna en femina uit de voorbeeldzinnen hierboven).<br>
                - O-declinatie voor woorden waarvan de stam eindigt op O.<br>
                - E-declinatie voor woorden waarvan de stam eindigt op E.<br>
                - U-declinatie voor woorden waarvan de stam eindigt op U.<br>
                - Gemengde voor woorden waarvan de stam eindigt op een medeklinker (consonant).<br><br>
                Het is echter in de Nominativus Singularis niet duidelijk wat 
                de stam van het woord is.
                Het is erg belangrijk om te weten in welke declinatie een woord thuis hoort. Het is bepalend voor de verschillende verschijningsvormen van het 
                woord. In deze eerste les bekijken we alleen de woorden uit de A-declinatie. 
            </p>
        </div>
    </div>
    <div class="row spacer200top">
        <div class="col-lg-12 content order-lg-1 order-1">
            <h2 class="title">Naamvallen; nominatief en accusatief</h2>
            <p>Als je de zinnen nog eens goed bekijkt en de woorden met elkaar vergelijkt, dan zie je dat agricola in twee 
                verschillende vormen voorkomt: agricola en agricolam. Dat is geen schrijffout maar een eigenschap van het Latijn: 
                het zijn twee verschillende naamvalsvormen van het zelfde woord. Afhankelijk van de functie in de zin heeft het een andere uitgang. <br><br>
                    1. Agricola in taberna est = De boer is in de herberg.<br>
                    In deze zin heeft Agricola (de boer) de functie van onderwerp van de zin. Daarom eindigt het op een -a. <br><br>
                    4. Nautae agricolam vident = De matrozen zien de boer.<br>
                    In deze zin is de boer niet het onderwerp, maar het lijdend voorwerp van de zin. Daarom eindigt het op -am. <br><br>
                    Maar waarom dan nautae en nautas? De oplettende lezer zal gezien hebben dat deze woorden met matrozen worden vertaald, 
                    een meervoud dus. Nautae voor het onderwerp in het meervoud en nautas voor het lijdend voorwerp in het meervoud. Op dezelfde manier kunnen we agricola en agricolam in het meervoud zetten: agricolae en agricolas. 
            </p>
        </div>
    </div>
</div>

@endsection