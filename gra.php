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
        </form>
    </div>
    <div id="plansza">

    </div>
    <button type="submit" class="btn btn-dark btn-lg" onclick="showQuestion()">Wyświetl pytanie</button>
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
                console.log(pytanie_nr);
            }
        };
        xhr.open('GET', `script-tresc.php?pytanie_nr=${pytanie_nr}`, true);
        xhr.send();
        const xhr2 = new XMLHttpRequest();
        xhr2.onreadystatechange = function () {
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                const response2 = xhr2.responseText;
                document.getElementById('answer-form').innerHTML = response2;
                if (response2 === 'open') {
                    const inputDiv = document.createElement('div');
                    inputDiv.classList.add('form-floating', 'mb-3');
                    inputDiv.id = 'klasa-id';
                    inputDiv.innerHTML = `
                        <input type="text" class="form-control" id="floatingInput" placeholder="odpowiedz" name="odpowiedz">
                        <label for="floatingInput">Wpisz odpowiedź</label>
                    `;
                    document.getElementById('answer-form').appendChild(inputDiv);
                    const submitButton = document.createElement('button');
                    submitButton.type = 'submit';
                    submitButton.classList.add('btn', 'btn-warning', 'btn-lg');
                    submitButton.textContent = 'Zatwierdź';
                    document.getElementById('answer-form').appendChild(submitButton);
                } else if (response2 === 'closed') {
                    const options = ['A', 'B', 'C', 'D'];
                    for (let option of options) {
                        const radioDiv = document.createElement('div');
                        radioDiv.classList.add('form-check');
                        radioDiv.innerHTML = `
                            <input class="form-check-input" type="radio" name="answer" id="answer-${option.toLowerCase()}" value="${option.toLowerCase()}">
                            <label class="form-check-label" for="answer-${option.toLowerCase()}">
                                ${option}
                            </label>
                        `;
                        document.getElementById('answer-form').appendChild(radioDiv);
                    }
                } else if (response2 === 'tf') {
                    const trueFalseButtonsDiv = document.createElement('div');
                    trueFalseButtonsDiv.classList.add('true-false-buttons');
                    trueFalseButtonsDiv.innerHTML = `
                        <button type="button" class="btn btn-success btn-lg true-button" data-value="true">Prawda</button>
                        <button type="button" class="btn btn-danger btn-lg false-button" data-value="false">Fałsz</button>
                    `;
                    document.getElementById('answer-form').appendChild(trueFalseButtonsDiv);
                    const answerInput = document.createElement('input');
                    answerInput.type = 'hidden';
                    answerInput.id = 'answer-input';
                    answerInput.name = 'answer';
                    answerInput.value = '';
                    document.getElementById('answer-form').appendChild(answerInput);
                }
                pytanie_nr += 1;
                console.log(pytanie_nr);
            }
        };
        xhr2.open('GET', `script-typ.php?pytanie_nr=${pytanie_nr}`, true);
        xhr2.send();

    }
</script>
</html>