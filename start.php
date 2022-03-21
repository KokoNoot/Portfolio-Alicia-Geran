<?php
require_once('config/db.php');

$q = $pdo->prepare('
  SELECT 
    email,
    phone,
    twitter,
    instagram,
    linkedin,
    short_biography,
    long_biography,
    experiences_title,
    projects_title,
    cv_file
  FROM authors
  WHERE id = 1
  ');
$q->execute();
$authors = $q->fetch();

$q = $pdo->prepare('
  SELECT *
  FROM experiences
  WHERE author_id = 1
  ORDER BY id DESC
  ');
$q->execute();
$experiences = [];
while ($results = $q->fetch()) {
  array_push($experiences, $results);
}

$q = $pdo->prepare('
  SELECT *
  FROM projects
  WHERE author_id = 1
  ORDER BY id DESC
  ');
$q->execute();
$projects = [];
while ($results = $q->fetch()) {
  array_push($projects, $results);
}

require_once('src/views/home.php');
