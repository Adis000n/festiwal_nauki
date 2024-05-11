<?php
include 'db_spec.php';

// Check if pytanie_nr is set in the URL
if(isset($_GET['pytanie_nr'])) {
    $pytanie_nr = $_GET['pytanie_nr'];

    // Select a random, unused question from the database
    $query = "SELECT * FROM pytanie WHERE id_pytanie='$pytanie_nr' LIMIT 1;";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pytanie_typ = $row['media_typ'];
        echo $pytanie_typ; // Output the question content
    } else {
        echo "nie znaleźono pytania o id: $pytanie_nr";
    }
} else {
    echo "Error: pytanie_nr nie jest ustawiony";
}

// Close the connection
mysqli_close($con);
?>
