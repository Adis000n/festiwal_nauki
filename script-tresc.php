<?php
include 'db_spec.php';

// Check if api_key is set in the URL
if(isset($_GET['api_key'])) {
    $api_key = $_GET['api_key'];

    // Select a random, unused question from the database
    $query = "SELECT * FROM klasa WHERE api_key='$api_key' LIMIT 1;";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nr_pytanie = $row['nr_pytanie'];
        $query2 = "SELECT * FROM pytanie WHERE id_pytanie='$nr_pytanie' LIMIT 1;";
        $result2 = mysqli_query($con, $query2);
        if ($result2 && mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_fetch_assoc($result2);
            $pytanie_tresc = $row2['pytanie_tresc']; 
            echo $pytanie_tresc; 
        }
        else{
            echo "nie znaleźono pytania.";
        }
    } else {
        echo "Api key nie należy do żadanej klasy.";
    }
} else {
    echo "Error: Api key nie jest ustawiony";
}

// Close the connection
mysqli_close($con);
?>
