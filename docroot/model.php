<?php
// model.php
function open_database_connection()
{
  $connection = new PDO("mysql:host=db;dbname=default", 'root', 'root');

  return $connection;
}

function close_database_connection(&$connection)
{
  $connection = null;
}

function get_all_posts()
{
  $connection = open_database_connection();

  $result = $connection->query('SELECT id, title FROM post');

  $posts = [];
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
  }
  close_database_connection($connection);

  return $posts;
}

// model.php
function get_post_by_id($id)
{
  $connection = open_database_connection();

  $query = 'SELECT created_at, title, body FROM post WHERE id=:id';
  $statement = $connection->prepare($query);
  $statement->bindValue(':id', $id, PDO::PARAM_INT);
  $statement->execute();

  $row = $statement->fetch(PDO::FETCH_ASSOC);

  close_database_connection($connection);

  return $row;
}