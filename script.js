    pytanie_nr = 1;
    wynik = 0;
    console.log(pytanie_nr);

        function setPozycja(x, y) {
            const planszaWidth = document.getElementById('plansza').offsetWidth;
            const planszaHeight = document.getElementById('plansza').offsetHeight;

            const percentageX = (x / planszaWidth) * 100;
            const percentageY = (y / planszaHeight) * 100;

            document.getElementById("pawn").style.left = percentageX + '%';
            document.getElementById("pawn").style.top = percentageY + '%';
            
        }
        function pozycja(pytanie_numer){
            switch (pytanie_numer){
                case 1:
                    setPozycja(37,755);
                    break;
                case 2:
                    setPozycja(154,755);
                    break;
                case 3:
                    setPozycja(246,755); 
                    break;
                case 4:
                    setPozycja(337,755);
                    break;
                case 5:
                    setPozycja(429,755);
                    break;
                case 6:
                    setPozycja(521,755)
                    break;
                case 7:
                    setPozycja(613,755)
                    break;
                case 8:
                    setPozycja(704,755)
                    break;
                case 9:
                    setPozycja(794,755)
                break;
                case 10:
                    setPozycja(794,663)
                break;
                case 11:
                    setPozycja(794,571)
                break;
                case 12:
                    setPozycja(794,479)
                break;
                case 13:
                    setPozycja(794,388)
                break;
                case 14:
                    setPozycja(794,296)
                break;
                case 15:
                    setPozycja(794,204)
                break;
                case 16:
                    setPozycja(794,114)
                break;
                case 17:
                    setPozycja(794,22)
                break;
                case 18:
                    setPozycja(704,22)
                break;
                case 19:
                    setPozycja(611,22)
                break;
                case 20:
                    setPozycja(522,22)
                break;
                case 21:
                    setPozycja(430,22)
                break;
                case 22:
                    setPozycja(339,22)
                break;
                case 23:
                    setPozycja(246,22)
                break;
                case 24:
                    setPozycja(156,22)
                break;
                case 25:
                    setPozycja(64,22)
                break;
                case 26:
                    setPozycja(64,114)
                break;
                case 27:
                    setPozycja(64,205)
                break;
                case 28:
                    setPozycja(64,298)
                break;
                case 29:
                    setPozycja(64,390)
                break;
                case 30:
                    setPozycja(64,482)
                break;
                case 31:
                    setPozycja(64,572)
                break;
                case 32:
                    setPozycja(155,572)
                break;
                case 33:
                    setPozycja(247,572)
                break;
                case 34:
                    setPozycja(338,572)
                break;
                case 35:
                    setPozycja(430,572)
                break;
                case 36:
                    setPozycja(521,572)
                break;
                case 37:
                    setPozycja(610,572)
                break;
                case 38:
                    setPozycja(610,480)
                break;
                case 39:
                    setPozycja(610,388)
                break;
                case 40:
                    setPozycja(610,296)
                break;
                case 41:
                    setPozycja(610,205)
                break;
                case 42:
                    setPozycja(520,205)
                break;
                case 43:
                    setPozycja(428,205)
                break;
                case 44:
                    setPozycja(337,205)
                break;
                case 45:
                    setPozycja(247,205)
                break;
                case 46:
                    setPozycja(247,296)
                break;
                case 47:
                    setPozycja(247,388)
                break;
                case 48:
                    setPozycja(337,388)
                break;
                case 49:
                    setPozycja(457,388)
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