<?php
$con = mysqli_connect("localhost", "root", "", "festiwal_nauki");
if (!$con) {
    die("Nie działa: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="pl">
<script>
    pytanie_nr = 1;
    console.log(pytanie_nr);
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festiwal nauki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="start" class="popUp" >
    <form method="post">
        <div class="form-floating mb-3" id="klasa-id">
            <input type="text" class="form-control" id="floatingInput" placeholder="klasa" name="klasa">
            <label for="floatingInput"><strong>Wpisz nazwę klasy:</strong> (np. 2TP)</label>
        </div>
        <button type="submit" class="btn btn-warning btn-lg" >Rozpocznij</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $klasa = $_POST["klasa"]; 
        $start = date("H:i:s");
        echo "<script>document.getElementById('start').setAttribute('hidden', true);</script>";
    }
    ?>
    </div>
    <div id="pytanie" class="popUp" hidden>
        <h2>Pytanie:</h2>
        <div id="pytanie-tresc">
        </div>
        <form id="answer-form" method="post">
        <!-- PRAWDA FAŁSZ -->
        <!-- <div class="true-false-buttons">
            <button type="button" class="btn btn-success btn-lg true-button" data-value="true">Prawda</button>
            <button type="button" class="btn btn-danger btn-lg false-button" data-value="false">Fałsz</button>
        </div>
        <input type="hidden" id="answer-input" name="answer" value=""> -->
        <!-- ZAMKNIĘTE -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer" id="answer-a" value="a">
            <label class="form-check-label" for="answer-a">
                A
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer" id="answer-b" value="b">
            <label class="form-check-label" for="answer-b">
                B
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer" id="answer-c" value="c">
            <label class="form-check-label" for="answer-c">
                C
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer" id="answer-d" value="d">
            <label class="form-check-label" for="answer-d">
                D
            </label>
        </div>
        <button type="submit" class="btn btn-warning btn-lg" onclick="answerQuestion()" >Zatwierdź</button>
        <!-- OTWARTE -->
        <!-- <div class="form-floating mb-3" id="klasa-id">
            <input type="text" class="form-control" id="floatingInput" placeholder="odpowiedz" name="odpowiedz">
            <label for="floatingInput">Wpisz odpowiedź</label>
        </div> 
        <button type="submit" class="btn btn-warning btn-lg" >Zatwierdź</button> -->
        </form>
    </div>
    <div id="plansza">

    </div>
    <button type="submit" class="btn btn-dark btn-lg" onclick="showQuestion()">Wyświetl pytanie</button>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     echo $_POST["answer"];
    // }
    ?> 
</body>
<script>
    
    document.addEventListener("DOMContentLoaded", function() {
    // Get true/false buttons
    const trueButton = document.querySelector('.true-button');
    const falseButton = document.querySelector('.false-button');

    // Add click event listeners to buttons
    trueButton.addEventListener('click', function() {
        document.getElementById('answer-input').value = 'true';
        document.getElementById('answer-form').submit(); 
    });

    falseButton.addEventListener('click', function() {
        document.getElementById('answer-input').value = 'false';
        document.getElementById('answer-form').submit(); 
    });
});
    function showQuestion() {
        document.getElementById('pytanie').removeAttribute('hidden');
        const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const response = xhr.responseText;
                        document.getElementById('pytanie-tresc').innerHTML = response;
                        pytanie_nr += 1;
                        console.log(pytanie_nr);
                    }
                };
                xhr.open('GET', `script.php?pytanie_nr=${pytanie_nr}`, true);
                xhr.send();
    }
</script>
</html>