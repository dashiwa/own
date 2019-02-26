<?php

// index.php
$connection = new PDO("mysql:host=db;dbname=default", 'root', 'root');

$result = $connection->query('SELECT id, title FROM post');

$posts = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  $posts[] = $row;
}

$connection = null;

// include the HTML presentation code
require 'templates/list.php';