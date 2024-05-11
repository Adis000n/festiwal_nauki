<?php
    include 'db_spec.php';
        
        // Check if the form was submitted
        if(isset($_POST['klasa'])){
         
          // Get the data submitted in the form
$klasa=$_POST['klasa'];
$start=$_POST['start'];
$czas_kon=$_POST['koniec'];
$wynik=$_POST['wynik'];
        
        
          // Insert the data into the database
        
          $sql = "INSERT INTO klasa  VALUES (default,'$klasa','$czas_kon','$start',null,$wynik)";
        
          if (mysqli_query($con, $sql)) {
            echo "Rekord Dodany do bazy danych";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
        }
        
        // Close the database con
        mysqli_close($con);
        ?>