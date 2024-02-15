<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "festiwal_nauki");

// Check if the connection is successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set UTF-8 encoding
mysqli_set_charset($con, "utf8");

// Check if pytanie_nr is set in the URL
if(isset($_GET['pytanie_nr'])) {
    $pytanie_nr = $_GET['pytanie_nr'];

    // Select a random, unused question from the database
    $query = "SELECT * FROM pytanie WHERE id_pytanie='$pytanie_nr' LIMIT 1;";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $odpowiedz1 = $row['odpowiedz1'];
        $odpowiedz2 = $row['odpowiedz2'];
        $odpowiedz3 = $row['odpowiedz3'];
        $odpowiedz4 = $row['odpowiedz4'];
        $answer = array($odpowiedz1, $odpowiedz2, $odpowiedz3, $odpowiedz4,);
        // Encode the array as JSON with UTF-8 encoding
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($answer, JSON_UNESCAPED_UNICODE);
    } else {
        echo "Nie znaleziono odpowiedzi";
    }
} else {
    echo "Error: pytanie_nr nie jest ustawiony";
}

// Close the connection
mysqli_close($con);
?>
