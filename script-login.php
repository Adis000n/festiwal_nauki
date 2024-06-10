<?php
include 'db_spec.php';
$response = array(); 

if(isset($_GET['klasa']) && isset($_GET['klucz'])) {
    $klasa = $_GET['klasa'];
    $klucz = $_GET['klucz'];
    $start = date("H:i:s");
    $klasa = mysqli_real_escape_string($con, $klasa);
    $klucz = mysqli_real_escape_string($con, $klucz);

    if(hash('sha256', $klucz) == "e950edf04f10999f21228307f91aa1d3268425e07d4c05c9f6a9076571b447b8") {
        $check_query = "SELECT * FROM klasa WHERE nazwa = '$klasa'";
        $check_result = mysqli_query($con, $check_query);
        
        if (mysqli_num_rows($check_result) > 0) {
            $existing_record = mysqli_fetch_assoc($check_result);
            $response['status'] = "istnieje";
            $response['klasa'] = $existing_record['nazwa'];
            $response['start'] = $existing_record['czas_start'];
            $response['nr_pytanie'] = intval($existing_record['nr_pytanie']);
            $response['wynik'] = intval($existing_record['punkty']);
            $response['api_key'] = $existing_record['api_key'];
        } else {
            $api_key = bin2hex(random_bytes(16));
            $sql = "INSERT INTO klasa(nazwa, api_key, czas_start) VALUES ('$klasa','$api_key','$start')";
            if (mysqli_query($con, $sql)) {
                $response['status'] = "nowy";
                $response['api_key'] = $api_key;
                $response['klasa'] = $klasa;
                $response['start'] = $start;
                $response['nr_pytanie'] = 1; 
                $response['wynik'] = 0; 
            } else {
                $response['status'] = "Error";
                $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        }
    } else {
        $response['status'] = "klucz-niepoprawny";
    }
} else {
    $response['status'] = "Error";
    $response['message'] = "Zmienne nie są ustawione";
}

mysqli_close($con);

echo json_encode($response);
?>
