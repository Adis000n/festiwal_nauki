<?php
$con = mysqli_connect("localhost", "root", "", "festiwal_nauki");
if (!$con) {
    die("Nie działa: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="pl">
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
    <link rel="shortcut icon" href="graphics/favicon.png" type="image/x-icon">
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
<script src="script.js"></script>
</body>
<?php
$klasa = $_POST["klasa"];

if(isset($klasa)){
echo "<script>";
echo "var klasa = '" . $klasa . "';";
echo "var start = '" . $start . "';";
echo "</script>";}
?>
</html>