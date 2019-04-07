@extends('layout')

@section('title', 'Quiz les 1')

@section('content')

<head>
    <link href="{{ asset('css/quizzes/quizles1.css') }}" rel="stylesheet" type="text/css" >
    <script src="{{ asset('js/quizzes/Quizles1.js') }}"></script>
</head>

<div class="container">
    <div class="row spacer200top">
        <div class="col-lg-12 content order-lg-1 order-1">
            <h2 class="title">Quiz over de stof van les 1</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio est dolorum, accusamus praesentium reiciendis repellat quam accusantium rerum perferendis dolore error consequuntur facere voluptas minima laboriosam quisquam beatae dignissimos qui tempora unde odit harum. Assumenda commodi itaque repellendus, laborum vitae numquam natus, rem atque placeat iste illum quis. Sapiente, quos.
            </p>
        </div>
    </div>
    <div class="row spacer200top">
        <div class="col-lg-12 content order-lg-1 order-1">
            <h2 class="title">Quiz over de stof van les 1</h2>
            <p>Let op! Hoofdlettergevoelig! Dus bijvoorbeeld: "De matroos is"</p>

                <br>
                <br>

            <form id="quiz" name="quiz"> 
                <p id="question1" class="font-weight-bold">Vertaal naar het nederlands: "Nauta es"</p>
                <input type="text" id="textbox" name="question1">

                <br>
                <br>

                <p id="question2" class="font-weight-bold">Vertaal naar het nederlands: "Agricolae estis"</p>
                <input type="text" id="textbox" name="question2">

                <br>
                <br>

                <p id="question3" class="font-weight-bold">Vertaal naar het nederlands: "Feminae insulam intrant"</p>
                <input type="text" id="textbox" name="question3">

                <br>
                <br>

                <p id="question4" class="font-weight-bold">Vertaal naar het nederlands: "Puella ambulat"</p>
                <input type="text" id="textbox" name="question4">

                <br>
                <br>

                <p id="question5" class="font-weight-bold">Vertaal naar het nederlands: "Femina ancillas laudat"</p>
                <input type="text" id="textbox" name="question5">

                <br>
                <br>

                <p id="question6" class="font-weight-bold">Vertaal naar het nederlands: "Puella in taberna non est"</p>
                <input type="text" id="textbox" name="question6">

                <br>
                <br>

                <p id="question7" class="font-weight-bold">Vertaal naar het nederlands: "Nautae in via ambulant"</p>
                <input type="text" id="textbox" name="question7">

                <br>
                <br>

                <p id="question8" class="font-weight-bold">Vertaal naar het nederlands: "Puella non ululat"</p>
                <input type="text" id="textbox" name="question8">

                <br>
                <br>

                <p id="question9" class="font-weight-bold">Vertaal naar het nederlands: "Nautae vident agricola"</p>
                <input type="text" id="textbox" name="question9">

                <br>
                <br>

                <p id="question10" class="font-weight-bold">Vertaal naar het nederlands: "Nautae non vident agricolae"</p>
                <input type="text" id="textbox" name="question10">

                <br>
                <br>

                <p id="question11" class="font-weight-bold">Vertaal naar het nederlands: "Agricolae estis."</p>
                <input type="radio" id="mcoption" name="question11" value="De boeren zijn"> De boeren zijn<br>
                <input type="radio" id="mcoption" name="question11" value="De boer is"> De boer is<br>

                <br>
                <br>
                
                <input type="button" id="button" value="controleer mijn antwoorden" onclick="check();">
            </form>

                <br>
                <br>

            <div id="aftersubmit">
                <p id="numbercorrect"></p>
            </div>
        </div>
    </div>
</div>

@endsection