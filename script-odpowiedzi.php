<?php
// Connect to the database
include 'db_spec.php';

// Set UTF-8 encoding
mysqli_set_charset($con, "utf8");

// Check if api_key is set in the URL
if(isset($_GET['api_key'])) {
    $api_key = $_GET['api_key'];
    $api_key = mysqli_real_escape_string($con, $api_key);

    $query2 = "SELECT * FROM klasa WHERE api_key='$api_key' LIMIT 1;";
    $result2 = mysqli_query($con, $query2);
    if ($result2 && mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $nr_pytanie = $row2['nr_pytanie'];
        $wynik = $row2['punkty'];
        
        $query = "SELECT * FROM pytanie WHERE id_pytanie='$nr_pytanie' LIMIT 1;";
        $result = mysqli_query($con, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $odpowiedz1 = $row['odpowiedz1'];
            $odpowiedz2 = $row['odpowiedz2'];
            $odpowiedz3 = $row['odpowiedz3'];
            $odpowiedz4 = $row['odpowiedz4'];
            $answer = array($odpowiedz1, $odpowiedz2, $odpowiedz3, $odpowiedz4);
            // Encode the array as JSON with UTF-8 encoding
            header('Content-Type: application/json; charset=UTF-8');
            echo json_encode($answer, JSON_UNESCAPED_UNICODE);
        } else {
            echo "Nie znaleziono odpowiedzi";
        }
    } else {
        echo "Api key nie należy do żadnej klasy.";
    }
} else {
    echo "Error: api_key nie jest ustawiony";
}

// Close the connection
mysqli_close($con);
?>
