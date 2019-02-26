<?php

// index.php
$connection = new PDO("mysql:host=db;dbname=default", 'root', 'root');
$result = $connection->query('SELECT id, title FROM post');

?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>List of Posts</title>
  </head>
  <body>
  <h1>List of Posts</h1>
  <ul>
    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
      <li>
        <a href="/show.php?id=<?= $row['id'] ?>">
          <?= $row['title'] ?>
        </a>
      </li>
    <?php endwhile ?>
  </ul>
  </body>
  </html>

<?php
$connection = null;
?>