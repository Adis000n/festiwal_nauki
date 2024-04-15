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
    wynik = 0;
    console.log(pytanie_nr);
    //.
    </script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festiwal nauki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="nav">
        <div id="wynik-wys">Wynik: 0 </div>
        <button id="questionbut" class="button-87" role="button" onclick="showQuestion()" hidden>Wyświetl pytanie</button>
        <div id="czas-wys">Czas: - </div>
    </div>
<div id="blob"></div>
<div id="blur"></div>
<div id="overlay"></div>
<div id="start" class="popUp">
    <div id="wprowadzenie">
        <div id="tresc2">Aby rozpocząć wpisz nazwę klucz potwierdzający oraz nazwę klasy</div>
    </div>
    <form method="post" onsubmit="disableUnloadAlert()">
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating mb-3" id="klucz">
                    <input type="password" class="form-control" id="floatingInputGrid1" placeholder="1234" name="klucz" style="font-size: 3vh;height:100%;" maxlength="4" minlength="4">
                    <label for="floatingInputGrid" style="font-size: 2vh;height:100%;"><strong>Wpisz klucz zabezpiczejący, załączony w wiadomości</strong> (np. 1234)</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3" id="klasa-id">
                    <input type="text" class="form-control" id="floatingInputGrid2" placeholder="klasa" name="klasa" style="font-size: 3vh;height:100%;">
                    <label for="floatingInputGrid" style="font-size: 2vh;height:100%;"><strong>Wpisz nazwę klasy:</strong> (np. 2TP)</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-warning btn-lg" id="btn-start">Rozpocznij</button>
    </form>
</div>
    <div id="pytanie" class="popUp" hidden>
        <div id="cale-pyt">
            <h1>Pytanie</h1>
            <div id="pytanie-tresc">
            </div>
        </div>
        
        <div id="answer-form" disabled>
    </div>
    </div>
    <div id="plansza">
    <img id="pawn" src="graphics/pawn.png" alt="BRAKUJE ZDJĘĆ" >
    </div>

    <script>
        function setPozycja(x, y) {
            const planszaWidth = document.getElementById('plansza').offsetWidth;
            const planszaHeight = document.getElementById('plansza').offsetHeight;

            const percentageX = (x / planszaWidth) * 100;
            const percentageY = (y / planszaHeight) * 100;

            document.getElementById("pawn").style.left = percentageX + '%';
            document.getElementById("pawn").style.top = percentageY + '%';
            
        }
        function pozycja(pytanie_numer){
            switch (pytanie_numer) {
    case 1:
        setPozycja(33, 679);
        break;
    case 2:
        setPozycja(138, 679);
        break;
    case 3:
        setPozycja(221, 679);
        break;
    case 4:
        setPozycja(303, 679);
        break;
    case 5:
        setPozycja(386, 679);
        break;
    case 6:
        setPozycja(468, 679);
        break;
    case 7:
        setPozycja(551, 679);
        break;
    case 8:
        setPozycja(633, 679);
        break;
    case 9:
        setPozycja(714, 679);
        break;
    case 10:
        setPozycja(714, 596);
        break;
    case 11:
        setPozycja(714, 513);
        break;
    case 12:
        setPozycja(714, 431);
        break;
    case 13:
        setPozycja(714, 349);
        break;
    case 14:
        setPozycja(714, 266);
        break;
    case 15:
        setPozycja(714, 183);
        break;
    case 16:
        setPozycja(714, 102);
        break;
    case 17:
        setPozycja(714, 19);
        break;
    case 18:
        setPozycja(633, 19);
        break;
    case 19:
        setPozycja(549, 19);
        break;
    case 20:
        setPozycja(469, 19);
        break;
    case 21:
        setPozycja(387, 19);
        break;
    case 22:
        setPozycja(305, 19);
        break;
    case 23:
        setPozycja(221, 19);
        break;
    case 24:
        setPozycja(140, 19);
        break;
    case 25:
        setPozycja(57, 19);
        break;
    case 26:
        setPozycja(57, 102);
        break;
    case 27:
        setPozycja(57, 184);
        break;
    case 28:
        setPozycja(57, 268);
        break;
    case 29:
        setPozycja(57, 351);
        break;
    case 30:
        setPozycja(57, 434);
        break;
    case 31:
        setPozycja(57, 514);
        break;
    case 32:
        setPozycja(139, 514);
        break;
    case 33:
        setPozycja(222, 514);
        break;
    case 34:
        setPozycja(304, 514);
        break;
    case 35:
        setPozycja(387, 514);
        break;
    case 36:
        setPozycja(469, 514);
        break;
    case 37:
        setPozycja(549, 514);
        break;
    case 38:
        setPozycja(549, 432);
        break;
    case 39:
        setPozycja(549, 349);
        break;
    case 40:
        setPozycja(549, 267);
        break;
    case 41:
        setPozycja(549, 184);
        break;
    case 42:
        setPozycja(468, 184);
        break;
    case 43:
        setPozycja(385, 184);
        break;
    case 44:
        setPozycja(303, 184);
        break;
    case 45:
        setPozycja(222, 184);
        break;
    case 46:
        setPozycja(222, 267);
        break;
    case 47:
        setPozycja(222, 349);
        break;
    case 48:
        setPozycja(303, 349);
        break;
    case 49:
        setPozycja(411, 349);
        break;
}

        }
        pozycja(pytanie_nr);
        const blob = document.getElementById("blob");

        window.onpointermove = event => { 
        const { clientX, clientY } = event;
        
        blob.animate({
            left: `${clientX}px`,
            top: `${clientY}px`
        }, { duration: 3000, fill: "forwards" });
        }

        function disableUnloadAlert() {
            window.removeEventListener('beforeunload', preventUnload);
            window.removeEventListener('submit', disableUnloadAlert); // Remove the listener for form submission
        }

        function preventUnload(event) {
            event.preventDefault();
            event.returnValue = '';
            const confirmationMessage = 'Czy na pewno chcesz zamknąć stronę?';
            event.returnValue = confirmationMessage;
            return confirmationMessage;
        }

        window.addEventListener('beforeunload', preventUnload);

        // Add event listener to re-enable the unload alert after form submission
        window.addEventListener('submit', disableUnloadAlert);
    </script>
<?php
$timerScript = "
<script>
    czas_start = new Date();
    setInterval(myTimer, 1000);

    function myTimer() {
        const czas_stop = new Date();
        const stoper = czas_stop - czas_start;
        const seconds = Math.floor((stoper / 1000) % 60);
        const minutes = Math.floor((stoper / (1000 * 60)) % 60);
        const hours = Math.floor((stoper / (1000 * 60 * 60)) % 24);

        const formattedTime = [
            hours.toString().padStart(2, '0'),
            minutes.toString().padStart(2, '0'),
            seconds.toString().padStart(2, '0')
        ].join(':');

        document.getElementById('czas-wys').innerHTML = formattedTime;
    }
</script>
";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klucz = $_POST["klucz"];
    $klasa = $_POST["klasa"];
    $start = date("H:i:s");
    if($klucz == "1234"){
        echo "<script>";
        echo "document.getElementById('questionbut').removeAttribute('hidden');";
        echo "document.getElementById('start').setAttribute('hidden', true);";
        echo "document.getElementById('overlay').setAttribute('hidden', true);";
        echo "</script>";
        echo $timerScript;
    }
    else{
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: '<p style=\"font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;\">Oho!</p><br><p style=\"font-size: 6vh;\">Klucz który podałeś jest nie poprawny spróbuj ponownie.</p>', 
                iconColor: '#FFD500',
                background: '#00509D',
                color: '#FDC500',
                width: '50%',
                showConfirmButton: false,
                timer: 3000
            });
        </script>";
    }

}


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
        document.getElementById('questionbut').setAttribute('hidden', true);
        document.getElementById('pytanie').removeAttribute('hidden');
        document.getElementById('overlay').removeAttribute('hidden');
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = xhr.responseText;
                document.getElementById('pytanie-tresc').innerHTML = response;
            }
        };
        xhr.open('GET', `script-tresc.php?pytanie_nr=${pytanie_nr}`, true);
        xhr.send();
        const xhr2 = new XMLHttpRequest();
        xhr2.onreadystatechange = function () {
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                const response2 = xhr2.responseText;
                document.getElementById('answer-form').innerHTML = "";
                if (response2 === 'open') {
                    const inputDiv = document.createElement('div');
                    inputDiv.classList.add('form-floating', 'mb-3');
                    inputDiv.id = 'klasa-id';
                    inputDiv.style.boxShadow = " 10px 10px 10px rgba(0, 0, 0, 0.4)";
                    inputDiv.innerHTML = `
                        <input type="text" class="form-control" id="floatingInput" placeholder="odpowiedz" name="odpowiedz" style="font-size: 3vh;height:100%; ">
                        <label for="floatingInput" style="font-size: 2vh;height:100%;">Wpisz odpowiedź</label>
                    `;
                    document.getElementById('answer-form').appendChild(inputDiv);
                    const submitButton = document.createElement('button');
                    submitButton.type = 'button';
                    submitButton.classList.add('btn', 'btn-warning', 'btn-lg');
                    submitButton.textContent = 'Zatwierdź';
                    submitButton.style.width = '100%'; // Set width to 100%
                    submitButton.style.fontSize = '3.5vh'; // Adjust font size as needed
                    submitButton.style.height = '7vh';
                    submitButton.style.boxShadow = "inset 10px 10px 10px rgba(0, 0, 0, 0.3), inset -10px -10px 10px rgba(255, 255, 255, 0.3), 10px 10px 10px rgba(0, 0, 0, 0.4)";
                    submitButton.addEventListener('click', function(event) {
                        event.preventDefault(); // prevent the default form submission behavior
                        let answerValue;
                        const inputField = document.querySelector('input[name="odpowiedz"]');
                        if (inputField) {
                            answerValue = inputField.value;
                        } else {
                            // Handle the absence of an input field (open-ended question)
                            answerValue = "Open-ended answer";
                        }
                        console.log("Submitted answer:", answerValue);
                        const xhr3 = new XMLHttpRequest();
                        xhr3.onreadystatechange = function () {
                            if (xhr3.readyState === 4 && xhr3.status === 200) {
                                const response = xhr3.responseText;
                                console.log("Response:", response);
                                if (response.toUpperCase() === answerValue.toUpperCase()) {
                                    wynik += 1;
                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                    Swal.fire({
                                        icon: "success",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 6vh;'>Ta odpowiedź jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 3000
                                        });
                                    koniec(klasa, start)
                                }
                                else{
                                    Swal.fire({
                                        icon: "error",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 3000
                                        });
                                }
                                console.log("Aktualny wynik to:", wynik);
                            }
                        };
                        xhr3.open('GET', `script-odp1.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr3.send();
                        document.getElementById('pytanie').setAttribute('hidden', true);
                        document.getElementById('questionbut').removeAttribute('hidden');
                        document.getElementById('overlay').setAttribute('hidden', true);
                        pytanie_nr += 1;
                        pozycja(pytanie_nr);
                        console.log(pytanie_nr);
                        
                    });
                    document.getElementById('answer-form').appendChild(submitButton);
                    } else if (response2 === 'closed') {
                        const xhr5 = new XMLHttpRequest();
                        let options = []; // Define options array outside the callback function
                        xhr5.onreadystatechange = function () {
                            if (xhr5.readyState === 4 && xhr5.status === 200) {
                                const response = JSON.parse(xhr5.responseText);
                                options = [response[0], response[1], response[2], response[3]]; // Update options array
                                for (let option of options) {
                                    const button = document.createElement('button');
                                    button.type = 'button';
                                    button.classList.add('btn', 'btn-warning', 'btn-lg', 'option-button');
                                    button.textContent = option;
                                    button.id = `option-${option.toLowerCase()}`; // Unique identifier for each option
                                    button.addEventListener('click', function() {
                                        // Get the selected option
                                        const selectedOption = option.toLowerCase();
                                        console.log(selectedOption);
                                        const xhr6 = new XMLHttpRequest();
                                        xhr6.onreadystatechange = function () {
                                            if (xhr6.readyState === 4 && xhr6.status === 200) {
                                                const response = xhr6.responseText;
                                                console.log("Response:", response);
                                                if (response.toLowerCase() == selectedOption.toLowerCase() ) {
                                                    wynik += 1;
                                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                                    Swal.fire({
                                                        icon: "success",
                                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 6vh;'>Ta odpowiedź jest poprawna</p>",
                                                        iconColor: "#FFD500",
                                                        background: "#00509D",
                                                        color: "#FDC500",
                                                        width: "50%",
                                                        showConfirmButton: false,
                                                        timer: 3000
                                                        });
                                                    koniec(klasa, start)
                                                }
                                                else{
                                                    Swal.fire({
                                                        icon: "error",
                                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                                        iconColor: "#FFD500",
                                                        background: "#00509D",
                                                        color: "#FDC500",
                                                        width: "50%",
                                                        showConfirmButton: false,
                                                        timer: 3000
                                                        });
                                                }
                                                console.log("Aktualny wynik to:", wynik);
                                            }
                                        };
                                        xhr6.open('GET', `script-poprawna.php?pytanie_nr=${pytanie_nr}`, true);
                                        xhr6.send();
                                        document.getElementById('pytanie').setAttribute('hidden', true);
                                        document.getElementById('questionbut').removeAttribute('hidden');
                                        document.getElementById('overlay').setAttribute('hidden', true);
                                        pytanie_nr += 1;
                                        pozycja(pytanie_nr);
                                        console.log(pytanie_nr);
                                        
                                    });
                                    document.getElementById('answer-form').style.display = 'grid';
                                    document.getElementById('answer-form').style.gridTemplateColumns = 'repeat(2, 1fr)';
                                    document.getElementById('answer-form').style.gap = '10px';
                                    document.getElementById('answer-form').appendChild(button);
                                }
                            }
                        };
                        xhr5.open('GET', `script-odpowiedzi.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr5.send();
                        koniec(klasa, start)
                    }
                    else if (response2 === 'tf') {
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
                        
                        const trueButton = document.querySelector('.true-button');
                        const falseButton = document.querySelector('.false-button');

                        trueButton.addEventListener('click', function() {
                            document.getElementById('answer-input').value = 'true';
                        const xhr4 = new XMLHttpRequest();
                        xhr4.onreadystatechange = function () {
                            if (xhr4.readyState === 4 && xhr4.status === 200) {
                                const response = xhr4.responseText;
                                console.log("Response:", response);
                                if (response.toLowerCase() == "true") {
                                    wynik += 1;
                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                    Swal.fire({
                                        icon: "success",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 5vh;'>Ta odpowiedź jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 3000
                                        });
                                    koniec(klasa, start)
                                }
                                else{
                                    Swal.fire({
                                        icon: "error",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 3000
                                        });
                                }
                                console.log("Aktualny wynik to:", wynik);
                            }
                        };
                        xhr4.open('GET', `script-odp1.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr4.send();
                            document.getElementById('pytanie').setAttribute('hidden', true);
                            document.getElementById('questionbut').removeAttribute('hidden');
                            document.getElementById('overlay').setAttribute('hidden', true);
                            pytanie_nr += 1;
                            pozycja(pytanie_nr);
                            console.log(pytanie_nr);
                            
                        });

                        falseButton.addEventListener('click', function() {
                            document.getElementById('answer-input').value = 'false';  
                            const xhr4 = new XMLHttpRequest(); 
                            xhr4.onreadystatechange = function () {
                            if (xhr4.readyState === 4 && xhr4.status === 200) {
                                const response = xhr4.responseText; 
                                console.log("Response:", response);
                                if (response.toLowerCase() == "false") {
                                    wynik += 1;
                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                    Swal.fire({
                                        icon: "success",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 6vh;'>Ta odpowiedź jest poprawna</p>",
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 3000
                                        });
                                    koniec(klasa, start)
                                }
                                else{
                                    Swal.fire({
                                        icon: "error",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 3000
                                        });
                                }
                                console.log("Aktualny wynik to:", wynik);
                            }
                        };
                        xhr4.open('GET', `script-odp1.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr4.send();
                            document.getElementById('pytanie').setAttribute('hidden', true);
                            document.getElementById('questionbut').removeAttribute('hidden');
                            document.getElementById('overlay').setAttribute('hidden', true);
                            pytanie_nr += 1;
                            pozycja(pytanie_nr);
                            console.log(pytanie_nr);
                            
                        });
                        document.getElementById('answer-form').style.display = 'block';
                        document.getElementById('answer-form').style.gridTemplateColumns = 'none'; // Reset to default
                        document.getElementById('answer-form').style.gap = '0';
                    }
            }
        };
        xhr2.open('GET', `script-typ.php?pytanie_nr=${pytanie_nr}`, true);
        xhr2.send();
    }
</script>


<?php
// Przykładowe wartości dla zmiennych klasa i start
$klasa = $_POST["klasa"];


// Przekazanie wartości zmiennych PHP do JavaScript
if(isset($klasa)){
echo "<script>";
echo "var klasa = '" . $klasa . "';";
echo "var start = '" . $start . "';";
echo "</script>";}
?>
<script>
// Funkcja do wysyłania danych
function koniec(klasa, start) {
    if(pytanie_nr==49){ //no trzeba dodać ile jest pól

          document.getElementById("questionbut").disabled=true;
        const now=new Date();
        const czas_kon=now.getHours()+":"+now.getMinutes()+":"+now.getSeconds();
        console.log(czas_kon);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "skrypt-czas.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    var data = "klasa=" + encodeURIComponent(klasa) + "&start=" + encodeURIComponent(start)+ "&koniec="+encodeURIComponent(czas_kon) +"&wynik="+ encodeURIComponent(wynik);
    xhr.send(data);


    const duration = 15 * 1000,
  animationEnd = Date.now() + duration,
  defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

const interval = setInterval(function() {
  const timeLeft = animationEnd - Date.now();

  if (timeLeft <= 0) {
    return clearInterval(interval);
  }

  const particleCount = 50 * (timeLeft / duration);

  // since particles fall down, start a bit higher than random
  confetti(
    Object.assign({}, defaults, {
      particleCount,
      origin: { x: randomInRange(0.1, 0.5), y: Math.random() - 0.2 },
    })
  );
  confetti(
    Object.assign({}, defaults, {
      particleCount,
      origin: { x: randomInRange(0.5, 0.9), y: Math.random() - 0.2 },
    })
  );
}, 250);

}}



</script>
</html>