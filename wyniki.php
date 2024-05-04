<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wyniki</title>
  <link rel="stylesheet" href="stylewynik.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="graphics/favicon.png" type="image/x-icon">
</head>
<body>
    <style>


 
    </style>
  <header>
  <h1>Wyniki</h1></header>
  <div id="records">
    <?php
      // Połączenie z bazą danych
      $conn = mysqli_connect('localhost', 'root', '', 'festiwal_nauki');

      // Sprawdzenie połączenia
      if (!$conn) {
        die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
      }

      // Pobranie rekordów z bazy danych
      $sql = 'SELECT nazwa,punkty,wynik FROM klasa ORDER BY punkty desc, wynik';
      $result = mysqli_query($conn, $sql);

      // Wyświetlenie rekordów
      $licznik=1;
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo'<div class="all">';
          echo '<div class="licznik">';
          echo  "Miejsce ".$licznik."<br>" ;
            echo '</div>'; 
          echo '<div class="record">';
          
          foreach ($row as $key => $value) {
            echo "<p> <strong>$key:</strong> $value</p>";
          }
          echo '</div>';$licznik++;
          echo'</div>';
          echo'</div>';
        }
      } else {
        echo 'Brak rekordów w bazie danych';
      }

      // Zamknięcie połączenia
      mysqli_close($conn);
    ?>
  </div>
</body>
</html>
