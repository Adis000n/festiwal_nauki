<?php
$hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "festiwal_nauki";
        $connection = mysqli_connect($hostname, $username, $password, $dbname);
        
        
        // Check if the connection was successful
        if (!$connection) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        // Check if the form was submitted
        if(isset($_POST['klasa'])){
         
          // Get the data submitted in the form
$klasa=$_POST['klasa'];
$start=$_POST['start'];
$czas_kon=$_POST['koniec'];
        
        
          // Insert the data into the database
        
          $sql = "INSERT INTO klasa  VALUES (default,'$klasa','$czas_kon','$start',null)";
        
          if (mysqli_query($connection, $sql)) {
            echo "Rekord Dodany do bazy danych";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
          }
        }
        
        // Close the database connection
        mysqli_close($connection);
        ?>