<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wszystkie rekordy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        .record {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.record p {
  margin: 0;
}
    </style>
  <h1>Wszystkie rekordy</h1>
  <div id="records">
    <?php
      // Połączenie z bazą danych
      $conn = mysqli_connect('localhost', 'root', '', 'festiwal_nauki');

      // Sprawdzenie połączenia
      if (!$conn) {
        die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
      }

      // Pobranie rekordów z bazy danych
      $sql = 'SELECT nazwa,wynik FROM klasa ORDER BY wynik asc';
      $result = mysqli_query($conn, $sql);

      // Wyświetlenie rekordów
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="record">';
          
          foreach ($row as $key => $value) {
            echo "<p><strong>$key:</strong> $value</p>";
          }
          echo '</div>';
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