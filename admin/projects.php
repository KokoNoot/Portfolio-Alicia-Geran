<?php
if(!isset($_SESSION))
  session_start();

require_once('../config/db.php');

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

require_once('../src/views/admin.php');
