function check() 
{
    var question1=document.quiz.question1.value;
    var question2=document.quiz.question2.value;
    var question3=document.quiz.question3.value;
    var question4=document.quiz.question4.value;
    var question5=document.quiz.question5.value;
    var question6=document.quiz.question6.value;
    var question7=document.quiz.question7.value;
    var question8=document.quiz.question8.value;
    var question9=document.quiz.question9.value;
    var question10=document.quiz.question10.value;
    var question11=document.quiz.question11.value;
    var correct=0;

    if (question1 == "De matroos is")
    {
        correct++;
        document.getElementById("question1").style.color = "green";
    }
    if (question2 == "De boeren zijn")
    {
        correct++;
        document.getElementById("question2").style.color = "green";
    }
    if (question3 == "De vrouwen gaan het huis binnen")
    {
        correct++;
        document.getElementById("question3").style.color = "green";
    }
    if (question4 == "Het meisje wandelt")
    {
        correct++;
        document.getElementById("question4").style.color = "green";
    }
    if (question5 == "De vrouw prijst de slaven")
    {
        correct++;
        document.getElementById("question5").style.color = "green";
    }
    if (question6 == "Het meisje is niet in de herberg")
    {
        correct++;
        document.getElementById("question6").style.color = "green";
    }
    if (question7 == "De matrozen lopen op straat")
    {
        correct++;
        document.getElementById("question7").style.color = "green";
    }
    if (question8 == "Het meisje huilt niet")
    {
        correct++;
        document.getElementById("question8").style.color = "green";
    }
    if (question9 == "De matrozen zien de boer")
    {
        correct++;
        document.getElementById("question9").style.color = "green";
    }
    if (question10 == "De matrozen zien de boeren niet")
    {
        correct++;
        document.getElementById("question10").style.color = "green";
    }
    // if (question11 == "De boeren zijn")
    // {
    //     correct++;
    //     document.getElementById("question11").style.color = "green";
    // }
    

    document.getElementById("aftersubmit").style.visibility = "visible";
    document.getElementById("numbercorrect").innerHTML="Je hebt er " + correct + " goed van de 10.";
}