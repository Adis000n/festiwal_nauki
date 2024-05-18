<?php
include 'db_spec.php';

// Check if the form was submitted
if(isset($_GET['api_key'])) {
    $api_key =  $_GET['api_key'];
    $sql = "UPDATE klasa SET czas_kon = CURRENT_TIME() WHERE api_key = '$api_key'";
    if (mysqli_query($con, $sql)) {
        echo "Rekord Zaktualizowany";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
mysqli_close($con);
?>
