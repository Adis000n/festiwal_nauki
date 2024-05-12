<?php
include 'db_spec.php';
$response = array(); 

if(isset($_GET['api_key'])) {
    $api_key = $_GET['api_key'];
        $check_query = "SELECT * FROM klasa WHERE api_key = '$api_key'";
        $check_result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            $existing_record = mysqli_fetch_assoc($check_result);
            if(intval($existing_record['nr_pytanie']) == 49){
                $response['status'] = "zrobione";
            }
            else{
                $response['status'] = "istnieje";
            }
            $response['klasa'] = $existing_record['nazwa'];
            $response['start'] = $existing_record['czas_start'];
            $response['nr_pytanie'] = intval($existing_record['nr_pytanie']);
            $response['wynik'] = intval($existing_record['punkty']);
        } 
        else {
            $response['status'] = "404";
        }
    
} else {
    $response['status'] = "Error";
    $response['message'] = "Zmienne nie są ustawione";
}

mysqli_close($con);

echo json_encode($response);
?>
