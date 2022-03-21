<?php
if(!isset($_SESSION))
  session_start();

require_once('../config/db.php');

$q = $pdo->prepare('
  SELECT 
    first_name,
    last_name,
    email,
    phone,
    twitter,
    instagram,
    linkedin,
    short_biography,
    long_biography,
    experiences_title,
    projects_title
  FROM authors
  WHERE id = 1
  ');
$q->execute();
$user = $q->fetch();

require_once('../src/views/admin.php');
