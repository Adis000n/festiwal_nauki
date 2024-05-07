    pytanie_nr = 1;
    wynik = 0;
    answers2Loaded = false;

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
                    document.getElementById('questionbut').setAttribute('hidden', true);
                        document.getElementById('questionbut').setAttribute('hidden', true);
                        const now=new Date();
                        const czas_kon=now.getHours()+":"+now.getMinutes()+":"+now.getSeconds();

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

                    //konfetti POCZĄTEK =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-==-=-==-==-=-==-=-==-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
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
                //konfetti KONIEC =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-==-=-==-==-=-==-=-==-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                koniec();
            }
        }
        pozycja(pytanie_nr);
        const blob = document.getElementById("blob");

        window.onpointermove = event => { 
        const { clientX, clientY } = event;
        
        blob.animate({
            left: `${clientX}px`,
            top: `${clientY}px`
        }, { duration: 2500, fill: "forwards" });
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

        window.addEventListener('submit', disableUnloadAlert);

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
function showLoader2() {
    document.getElementById('loaderBG').removeAttribute('hidden');
}

function hideLoader2() {
    document.getElementById('loaderBG').setAttribute('hidden', true);
}


    function showQuestion() {
        document.querySelector('.loader').style.display = 'block';
        document.getElementById('questionbut').setAttribute('hidden', true);
        document.getElementById('pytanie').removeAttribute('hidden');
        document.getElementById('overlay').removeAttribute('hidden');
        document.getElementById('answer-form').style.display = 'block';
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = xhr.responseText;
                document.getElementById('pytanie-tresc').innerHTML = response;
                checkIfBothLoaded();
            }
        };
        xhr.open('GET', `script-tresc.php?pytanie_nr=${pytanie_nr}`, true);
        xhr.send();
        const xhr2 = new XMLHttpRequest();
        xhr2.onreadystatechange = function () {
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                const response2 = xhr2.responseText;
                questiontype = response2;
                document.getElementById('answer-form').innerHTML = "";
                if (response2 === 'open') {
                    const inputDiv = document.createElement('div');
                    inputDiv.classList.add('form-floating', 'mb-3');
                    inputDiv.id = 'klasa-id';
                    inputDiv.style.boxShadow = " 10px 10px 10px rgba(0, 0, 0, 0.4)";
                    inputDiv.innerHTML = `
                        <input type="0
                        text" class="form-control" id="floatingInput" placeholder="odpowiedz" name="odpowiedz" style="font-size: 3vh;height:100%; ">
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
                             showLoader2();
                            console.log(answerValue)
                            if(answerValue==""){
                                alert("Bruh nie można odpowiedzieć niczym na pytanie")
                                showQuestion()//jak pokazać pytanie jeszcze razzzzz
                                hideLoader2();

                            }else{
                                //wysyłanie
                                const xhr3 = new XMLHttpRequest();
                        xhr3.onreadystatechange = function () {
                            if (xhr3.readyState === 4 && xhr3.status === 200) {
                                const response = xhr3.responseText;
                                if (response.toUpperCase() === answerValue.toUpperCase()) {
                                    wynik += 1;
                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                    hideLoader2();
                                    Swal.fire({
                                        icon: "success",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 6vh;'>Ta odpowiedź jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 2500
                                        });
                                    
                                }
                                else{
                                    hideLoader2();
                                    Swal.fire({
                                        icon: "error",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 2500
                                        });
                                }
                            }
                        };
                        xhr3.open('GET', `script-odp1.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr3.send();
                        document.getElementById('pytanie').setAttribute('hidden', true);
                        document.getElementById('questionbut').removeAttribute('hidden');
                        document.getElementById('overlay').setAttribute('hidden', true);
                        document.getElementById('answer-form').innerHTML = "";
                        document.getElementById('pytanie-tresc').innerHTML = "";
                        pytanie_nr += 1;
                        pozycja(pytanie_nr);
                            }
                        } else {
                            // Handle the absence of an input field (open-ended question)
                            answerValue = "Open-ended answer";
                        }  
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
                                        showLoader2();
                                        // Get the selected option
                                        const selectedOption = option.toLowerCase();
                                        const xhr6 = new XMLHttpRequest();
                                        xhr6.onreadystatechange = function () {
                                            if (xhr6.readyState === 4 && xhr6.status === 200) {
                                                const response = xhr6.responseText;
                                                if (response.toLowerCase() == selectedOption.toLowerCase() ) {
                                                    wynik += 1;
                                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                                    hideLoader2();
                                                    Swal.fire({
                                                        icon: "success",
                                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 6vh;'>Ta odpowiedź jest poprawna</p>",
                                                        iconColor: "#FFD500",
                                                        background: "#00509D",
                                                        color: "#FDC500",
                                                        width: "50%",
                                                        showConfirmButton: false,
                                                        timer: 2500
                                                        });
                                                    
                                                }
                                                else{
                                                    hideLoader2();
                                                    Swal.fire({
                                                        icon: "error",
                                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                                        iconColor: "#FFD500",
                                                        background: "#00509D",
                                                        color: "#FDC500",
                                                        width: "50%",
                                                        showConfirmButton: false,
                                                        timer: 2500
                                                        });
                                                }
                                            }
                                        };
                                        xhr6.open('GET', `script-poprawna.php?pytanie_nr=${pytanie_nr}`, true);
                                        xhr6.send();
                                        document.getElementById('pytanie').setAttribute('hidden', true);
                                        document.getElementById('questionbut').removeAttribute('hidden');
                                        document.getElementById('overlay').setAttribute('hidden', true);
                                        document.getElementById('answer-form').innerHTML = "";
                                        document.getElementById('pytanie-tresc').innerHTML = "";
                                        pytanie_nr += 1;
                                        pozycja(pytanie_nr);
                                        
                                    });
                                    document.getElementById('answer-form').style.display = 'grid';
                                    document.getElementById('answer-form').style.gridTemplateColumns = 'repeat(2, 1fr)';
                                    document.getElementById('answer-form').style.gap = '10px';
                                    document.getElementById('answer-form').appendChild(button);
                                }
                                answers2Loaded = true;
                                checkIfBothLoaded();
                            }
                        };
                        xhr5.open('GET', `script-odpowiedzi.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr5.send();
                        
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
                            showLoader2();
                            document.getElementById('answer-input').value = 'true';
                        const xhr4 = new XMLHttpRequest();
                        xhr4.onreadystatechange = function () {
                            if (xhr4.readyState === 4 && xhr4.status === 200) {
                                const response = xhr4.responseText;
                                if (response.toLowerCase() == "true") {
                                    wynik += 1;
                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                    hideLoader2();
                                    Swal.fire({
                                        icon: "success",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 5vh;'>Ta odpowiedź jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 2500
                                        });
                                    
                                }
                                else{
                                    hideLoader2();
                                    Swal.fire({
                                        icon: "error",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 2500
                                        });
                                }
                            }
                        };
                        xhr4.open('GET', `script-odp1.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr4.send();
                            document.getElementById('pytanie').setAttribute('hidden', true);
                            document.getElementById('questionbut').removeAttribute('hidden');
                            document.getElementById('overlay').setAttribute('hidden', true);
                            document.getElementById('answer-form').innerHTML = "";
                            document.getElementById('pytanie-tresc').innerHTML = "";
                            pytanie_nr += 1;
                            pozycja(pytanie_nr);
                        });

                        falseButton.addEventListener('click', function() {
                            showLoader2();
                            document.getElementById('answer-input').value = 'false';  
                            const xhr4 = new XMLHttpRequest(); 
                            xhr4.onreadystatechange = function () {
                            if (xhr4.readyState === 4 && xhr4.status === 200) {
                                const response = xhr4.responseText; 
                                if (response.toLowerCase() == "false") {
                                    wynik += 1;
                                    document.getElementById("wynik-wys").innerHTML = "Wynik: "+wynik;
                                    hideLoader2();
                                    Swal.fire({
                                        icon: "success",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;'>Dobra robota!</p><br><p style='font-size: 6vh;'>Ta odpowiedź jest poprawna</p>",
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 2500
                                        });
                                    
                                }
                                else{
                                    hideLoader2();
                                    Swal.fire({
                                        icon: "error",
                                        title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Niestety!</p><br><p style='font-size: 6vh;'>Ta odpowiedź nie jest poprawna</p>", 
                                        iconColor: "#FFD500",
                                        background: "#00509D",
                                        color: "#FDC500",
                                        width: "50%",
                                        showConfirmButton: false,
                                        timer: 2500
                                        });
                                }
                            }
                        };
                        xhr4.open('GET', `script-odp1.php?pytanie_nr=${pytanie_nr}`, true);
                        xhr4.send();
                            document.getElementById('pytanie').setAttribute('hidden', true);
                            document.getElementById('questionbut').removeAttribute('hidden');
                            document.getElementById('overlay').setAttribute('hidden', true);
                            document.getElementById('answer-form').innerHTML = "";
                            document.getElementById('pytanie-tresc').innerHTML = "";
                            pytanie_nr += 1;
                            pozycja(pytanie_nr);
                        });
                        document.getElementById('answer-form').style.display = 'block';
                        document.getElementById('answer-form').style.gridTemplateColumns = 'none'; 
                        document.getElementById('answer-form').style.gap = '0';
                    }
                    checkIfBothLoaded();
            }
        };
        xhr2.open('GET', `script-typ.php?pytanie_nr=${pytanie_nr}`, true);
        xhr2.send();
    }

  function checkIfBothLoaded() {
    const questionLoaded = document.getElementById('pytanie-tresc').innerHTML.trim() !== '';
    const responseType = document.getElementById('answer-form').getAttribute('data-response-type');
    const buttonsLoaded = responseType === 'closed' ? document.querySelectorAll('.option-button').length > 0 : true;
    if (questiontype === 'open' || questiontype === 'tf'){
        if (questionLoaded && buttonsLoaded ) {
            document.querySelector('.loader').style.display = 'none';
            answers2Loaded = false;
        } else {
            document.querySelector('.loader').style.display = 'block';
        }
    }
    else{
        if (questionLoaded && buttonsLoaded && answers2Loaded == true) {
            document.querySelector('.loader').style.display = 'none';
            answers2Loaded = false;
        } else {
            document.querySelector('.loader').style.display = 'block';
        }
    }
    
}

function koniec() {
    setTimeout(() => {
        Swal.fire({
            title: "<p style='font-size: 9vh;border-bottom: 4px solid #ffffff;padding-bottom:10px;'>Świetnie!</p><br><p style='font-size: 5vh;'>Kliknij w przycisk poniżej aby przejść do tablicy wyników i zobaczyć swój wynik oraz porównać się do innych klas.</p>", 
            imageUrl: "graphics/crown.gif",
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: "Korona",
            background: "#00509D",
            showConfirmButton: true,
            color: "#FDC500",
            width: "75%",
            confirmButtonColor: "#fff",
            confirmButtonText: "<h2 style='color:black'>Do wyników!</h2>"
        }).then((result) => {
            disableUnloadAlert();
            if (result.isConfirmed) {
            window.location = "wyniki.php";
            }
          });
      }, 2500);
}



