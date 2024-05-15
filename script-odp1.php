<?php
include 'db_spec.php';

if(isset($_GET['api_key']) && isset($_GET['answerValue'])) {
    $api_key = $_GET['api_key'];
    $answerValue = $_GET['answerValue'];

    $query = "SELECT * FROM klasa WHERE api_key='$api_key' LIMIT 1;";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nr_pytanie = $row['nr_pytanie'];
        $wynik = $row['punkty'];

        $new_nr_pytanie = $nr_pytanie + 1;

        $update_query = "UPDATE klasa SET nr_pytanie='$new_nr_pytanie' WHERE api_key='$api_key';";
        $update_result = mysqli_query($con, $update_query);

        if (!$update_result) {
            echo "Failed to update nr_pytanie in klasa table.";
            exit; 
        }

        $query2 = "SELECT * FROM pytanie WHERE id_pytanie='$nr_pytanie' LIMIT 1;";
        $result2 = mysqli_query($con, $query2);

        if ($result2 && mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_fetch_assoc($result2);
            $odpowiedz = $row2['odpowiedz1'];

            if (strcasecmp($odpowiedz, $answerValue) === 0) {
                $new_wynik = $wynik + 1;
                $update_query2 = "UPDATE klasa SET punkty='$new_wynik' WHERE api_key='$api_key';";
                $update_result2 = mysqli_query($con, $update_query2);

                if (!$update_result2) {
                    echo "Failed to update wynik in klasa table.";
                    exit; 
                }
                echo "dobrze";
            } else {
                echo "zle";
            }
        } else {
            echo "Nie znaleziono odpowiedzi.";
        }
    } else {
        echo "Api key nie należy do żadnej klasy.";
    }
} else {
    echo "Error: pytanie_nr nie jest ustawiony";
}

mysqli_close($con);
?>
