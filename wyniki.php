<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wyniki - festiwal nauki</title>
  <link rel="stylesheet" href="stylewynik.css"> 
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="graphics/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="graphics/pawn.png" type="image/x-icon"> 
</head>
<body>

  <header>
  <h1>Tablica Wyników:</h1></header>

  <div class="hr"><hr></div>
  <div id="records">
    <?php
  include 'db_spec.php';

      // Pobranie rekordów z bazy danych
      $sql = 'SELECT nazwa,punkty,wynik FROM klasa WHERE nr_pytanie = 49 ORDER BY punkty desc, wynik';
      $result = mysqli_query($con, $sql);

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
            echo "<p> <strong>".ucfirst($key).":</strong> $value</p>";
          }
          echo '</div>';$licznik++;
          echo'</div>';
          echo'</div>';
        }
      } else {
        echo 'Brak rekordów w bazie danych';
      }

      // Zamknięcie połączenia
      mysqli_close($con);
    ?>
  </div>
  <div class="hr"><hr></div>
</body>
</html>
